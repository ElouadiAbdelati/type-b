<?php

namespace App\Services;

interface ManifestationService
{
    public static function findAll();
    public static function findById($id);
    public static function save($manif);
    public static function update($manif);
    public static function delete($id);
    public static function getManifestation($id);
    public static function getManifestationDetails($id);
}
