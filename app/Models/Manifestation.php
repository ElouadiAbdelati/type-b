<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manifestation extends Model
{
    use HasFactory;
    public $fillable = [
        'intitule',
        'type',
        'etendue',
        'lieu',
        'site_web',
        'agence_organisatrice',
        'pertenaires',
        'nbr_participants_prevus',
        'date_debut',
        'date_fin',
        'demande_id',
        'entite_organisatrice_id',
    ];

    public function entiteOrganisatrice()
    {
        return $this->belongsTo(EntiteOrganisatrice::class, 'entite_organisatrice_id');
    }

    public function soutienSollicite()
    {
        return $this->belongsToMany(FraisCouvert::class,'soutien_sollicites','manifestation_id','frais_couvert_id')
        ->withPivot('nbr', 'montant','remarques');
    }
    public function soutienAccorde()
    {
        return $this->belongsToMany(FraisCouvert::class,'soutien_accordes','manifestation_id','frais_couvert_id')
        ->withPivot('nbr', 'montant','remarques');
    }
}
