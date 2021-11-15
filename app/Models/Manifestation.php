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
        'partenaires',
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
        return $this->belongsToMany(FraisCouvert::class, 'soutien_sollicites', 'manifestation_id', 'frais_couvert_id')
            ->withPivot('nbr', 'montant', 'remarques_');
    }
    public function soutienAccorde()
    {
        return $this->belongsToMany(FraisCouvert::class, 'soutien_accordes', 'manifestation_id', 'frais_couvert_id')
            ->withPivot('nbr', 'montant', 'remarques');
    }

    public function contributeurs()
    {
        return $this->belongsToMany(Contributeur::class, 'manifestation_contributeurs', 'manifestation_id', 'contributeur_id');
    }

    public function etablissements()
    {
        return $this->belongsToMany(Etablissement::class, 'manifestation_etablissements', 'manifestation_id', 'etablissement_id');
    }

    public function comites()
    {
        return $this->belongsToMany(ComiteOrganisation::class, 'manifestation_comites', 'manifestation_id', 'comite_organisation_id');
    }

    public function gestionFinanciere()
    {
        return $this->hasOne(GestionFinanciere::class);
    }
}
