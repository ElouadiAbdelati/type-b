<?php

namespace App\Services\ServicesImpl;

use App\Models\Demande;
use App\Services\DemandeService;

class DemandeServiceImpl implements DemandeService
{
    public function findAll(){
        return Demande::all();
    }
    public function findById($id){
        return Demande::findOrFail($id);
    }
    public function save($demande){
        return Demande::create($demande);
    }
    public function update($demande){
        return $demande->save();
    }
    public function delete($id){
        $demande = $this->findById($id);
        return $demande->delete();
    }

    public function findByEtat($etat){
        $demandes = Demande::where('etat','Courante')->with('coordonnateur')->get();
        return ['demandes'=>$demandes];
    }
}
