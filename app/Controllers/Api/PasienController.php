<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class PasienController extends ResourceController
{
    protected $modelName = 'App\Models\PasienModel';
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
    public function show($id_pasien = null)
    {
        $data = $this->model->find($id_pasien);

        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Pasien not found');
        }
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
    public function update($id_pasien = null)
    {
        $data = $this->request->getJSON();
        
        if (!$this->model->find($id_pasien)) {
            return $this->failNotFound('Pasien not found');
        }

        if (!$this->model->validate((array)$data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        $this->model->update($id_pasien, (array)$data);
        return $this->respondUpdated($data);
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id_pasien = null)
    {
        if (!$this->model->find($id_pasien)) {
            return $this->failNotFound('Pasien not found');
        }
        $this->model->delete($id_pasien);
        return $this->respondDeleted('Pasien '. $id_pasien . ' dihapus.');
    }
}
