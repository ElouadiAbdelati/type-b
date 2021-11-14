<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeContributeur extends Model
{
    use HasFactory;

    public $fillable = [
        'libelle',
    ];
}
