<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class UsersController extends ResourceController
{
    protected $modelName = 'App\Models\UsersModel';
    protected $format    = 'json';

    public function register()
    {
        $data = $this->request->getJSON(); // Use getJSON for JSON data

        // Validate input data using the model's validation rules
        if (!$this->model->validate((array)$data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        // Process data (e.g., save to database)
        $this->model->insert($data);
        return $this->respondCreated(['message' => 'User registered successfully']);
    }

    public function login()
    {
        $data = $this->request->getJSON(); // Use getJSON to get the JSON body

        // Validate input data
        if (!$data || empty($data->username) || empty($data->password)) {
            return $this->failValidationErrors('Username and password are required.');
        }

        // Find user by username
        $user = $this->model->where('username', $data->username)->first();

        // Check if user exists and password matches
        if (!$user || $user['password'] !== $data->password) {
            return $this->failUnauthorized('Invalid username or password');
        }

        // If login is successful, return user data (excluding password)
        return $this->respond($user, 200);
    }

    public function getUser($id = null)
    {
        $user = $this->model->find($id);

        if (!$user) {
            return $this->failNotFound('User not found');
        }

        return $this->respond($user, 200);
    }

    public function editUser($id = null)
    {
        $data = $this->request->getJSON();

        $this->model->setValidationRule('username', 'is_unique[users.username,id_user,' . $id . ']');
        
        // Validate input data using the model's validation rules
        if (!$this->model->validate((array)$data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        // Find user by ID
        $user = $this->model->find($id);
        if (!$user) {
            return $this->failNotFound('User not found');
        }

        // Update user data
        $this->model->update($id, (array)$data);
        return $this->respondUpdated(['message' => 'User updated successfully']);
    }
}
