<?php

namespace App\Services;

interface FraisCouvertService
{
    public static function findAll();
    public static function findById($id);
    public static function save($frais);
    public static function update($frais);
    public static function delete($id);
}
