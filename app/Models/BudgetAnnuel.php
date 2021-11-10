<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetAnnuel extends Model
{
    use HasFactory;
    public $fillable = [
        'annee',
        'budget_fixe',
    ];
}
