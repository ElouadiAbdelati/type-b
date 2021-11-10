<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;

    public $fillable = [
        'libelle',
        'intitule',
        'ville_id',
        'addresse',
        
    ];
}
