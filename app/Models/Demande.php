<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    public $fillable = [
        'code',
        'date_envoie',
        'etat',
        'remarques',
        'manifestation_id',
        'coordonnateur_id',
    ];
}
