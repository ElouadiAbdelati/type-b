<?php

namespace App\Services;

interface DemandeService
{
    public static function findAll();
    public static function findById($id);
    public static function save($demande);
    public static function update($demande);
    public static function delete($id);
}
