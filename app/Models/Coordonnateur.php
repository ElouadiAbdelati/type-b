<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordonnateur extends Model
{
    use HasFactory;
    public $fillable = [
        'nom',
        'prenom',
        'profession',
        'email',
        'tel',
        'fax',
    ];
}
