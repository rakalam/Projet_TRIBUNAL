<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
       
            'nif',
            'id_fiscale',
            'mdp',
            'nom_societe',
            'activite',
            'adresse',
            'nb_message',
      
   ];

    public function centre(){
        return $this->belongsTo(Centre::class, 'id_fiscale', 'id');
    }
}
