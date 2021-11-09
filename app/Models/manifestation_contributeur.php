<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manifestation_contributeur extends Model
{
    use HasFactory;

    public $fillable = [
        'contributeur_id',
        'manifestation_id',
    ];
}
