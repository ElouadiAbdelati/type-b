<?php

namespace App\Services\ServicesImpl;

use App\Models\FraisCouvert;
use App\Services\FraisCouvertService;

class FraisCouvetServiceImpl implements FraisCouvertService
{
    public static function findAll(){
        return FraisCouvert::all();
    }
    public static function findById($id){
        return FraisCouvert::findOrFail($id);
    }
    public static function save($frais){
        return FraisCouvert::ceate($frais);
    }
    public static function update($frais){
        return $frais->save();
    }
    public static function delete($id){
        $frais = DemandeServiceImpl::findById($id);
        return $frais->delete();
    }
}
