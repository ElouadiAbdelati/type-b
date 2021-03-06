<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoutienAccorde extends Model
{
    use HasFactory;

    public $fillable = [
        'nbr',
        'montant',
        'remarques',
        'frais_couvert_id',
        'manifestation_id',
    ];
}
