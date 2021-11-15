<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionFinanciere extends Model
{
    use HasFactory;

    public $fillable = [
        'libelle',
        'information',
        'manifestation_id',
    ];

    public function manifestation()
    {
        return $this->belongsToMany(Manifestation::class);
    }
}
