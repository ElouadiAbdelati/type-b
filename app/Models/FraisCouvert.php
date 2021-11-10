<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FraisCouvert extends Model
{
    use HasFactory;

    public $fillable = [
        'libelle',
        'forfait',
        'limite',
        'description',
        'remarques',
    ];
}
