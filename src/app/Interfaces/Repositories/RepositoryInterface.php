<?php

namespace App\Interfaces\Repositories;

interface RepositoryInterface
{
    public function allObject();

    public function createObject($data);

    public function findObject($id);

    public function updateObject($id, $data);

    public function inactiveOrActiveObject($id);

    public function deleteObject($id);

    public function searchObject($filters);

    public function replicateObject($id);

    public function pdfObjects($view, $data);

    public function getModel();

    public function getTable();

    public function getQuery();
}
