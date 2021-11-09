<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conditions_generale extends Model
{
    use HasFactory;

    public $fillable = [
        'libelle',
        'description',
    ];
}
