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
        'entite_organisatrice_id',
      
    ];
}
