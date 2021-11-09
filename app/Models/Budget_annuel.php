<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget_annuel extends Model
{
    use HasFactory;
    public $fillable = [
        'annee',
        'budget_fixe',
    ];
}
