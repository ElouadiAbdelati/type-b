<?php

namespace App\Services;

interface DemandeService
{
    public function findAll();
    public function findById($id);
    public function save($demande);
    public function update($demande);
    public function delete($id);
    public function findByEtat($etat);
}
