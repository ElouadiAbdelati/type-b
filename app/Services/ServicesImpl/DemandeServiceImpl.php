<?php

namespace App\Services\ServicesImpl;

use App\Models\Demande;
use App\Services\DemandeService;

class DemandeServiceImpl implements DemandeService
{
    public static function findAll(){
        return Demande::all();
    }
    public static function findById($id){
        return Demande::findOrFail($id);
    }
    public static function save($demande){
        return Demande::create($demande);
    }
    public static function update($demande){
        return $demande->save();
    }
    public static function delete($id){
        $demande = DemandeServiceImpl::findById($id);
        return $demande->delete();
    }
}
