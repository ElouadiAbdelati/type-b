<?php

namespace App\Services;

interface ManifestationService
{
    public  function findAll();
    public  function findById($id);
    public  function save($manif);
    public  function update($manif);
    public  function delete($id);
    public  function getManifestation($id);
    public  function getManifestationDetails($id);
}
