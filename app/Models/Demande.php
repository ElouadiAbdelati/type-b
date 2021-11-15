<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;


    public $fillable = [
        'code',
        'date_envoie',
        'etat',
        'remarques',
        'coordonnateur_id',
    ];

    public function manifestation(){
        return $this->hasOne(Manifestation::class);
    }

    public function coordonnateur(){
        return $this->belongsTo(User::class,'coordonnateur_id');
    }
}
