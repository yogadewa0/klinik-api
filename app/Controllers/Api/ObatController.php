<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class ObatController extends ResourceController
{
    protected $modelName = 'App\Models\ObatModel';
    protected $format    = 'json';

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = $this->model->findAll();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($kodeobat = null)
    {
        $data = $this->model->find($kodeobat);
        if (!$data) {
            return $this->failNotFound('Obat not found');
        }
        return $this->respond($data);
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $data = $this->request->getJSON();

        if (!$this->model->validate((array)$data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        $this->model->insert($data);
        return $this->respondCreated($data);
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($kodeobat = null)
    {
        // Get the raw input data
        $data = $this->request->getJSON();
        
        // Check if the kodeobat exists
        if (!$this->model->find($kodeobat)) {
            return $this->failNotFound('Obat not found');
        }

        // Exclude the current kodeobat from validation rules
        $this->model->setValidationRule('kodeobat', 'required|is_unique[obat.kodeobat,kodeobat,' . $kodeobat . ']');

        if (!$this->model->validate((array)$data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        $this->model->update($kodeobat, (array)$data);
        return $this->respondUpdated($data);
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($kodeobat = null)
    {
        if (!$this->model->find($kodeobat)) {
            return $this->failNotFound('Obat not found');
        }
        $this->model->delete($kodeobat);
        return $this->respondDeleted('Obat '. $kodeobat . ' dihapus.');
    }
}
