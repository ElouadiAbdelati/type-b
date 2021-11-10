<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntiteOrganisatrice extends Model
{
    use HasFactory;

    public $fillable = [
        'nom',
        'responsable',
        'etablissement_id',
    ];
}
