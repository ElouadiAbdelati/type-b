<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManifestationEtablissement extends Model
{
    use HasFactory;

    public $fillable = [
        'manifestation_id',
        'etablissement_id',
    ];
}
