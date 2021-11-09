<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece_demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'description',
        'nbr_copie',
    ];
}
