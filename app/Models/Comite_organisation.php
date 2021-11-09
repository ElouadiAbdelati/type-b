<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comite_organisation extends Model
{
    use HasFactory;

    public $fillable = [
        'nom',
        'prenom',
        'email',
        'tel',
        'etablissement_id',
    ];
}
