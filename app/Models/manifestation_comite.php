<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manifestation_comite extends Model
{
    use HasFactory;

    public $fillable = [
        'comite_organisation_id',
        'manifestation_id',
    ];
}
