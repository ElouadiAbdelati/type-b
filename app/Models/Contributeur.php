<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributeur extends Model
{
    use HasFactory;

    public $fillable = [
        'type',
        'nom',
        'montant',
        'nature',
    ];
}
