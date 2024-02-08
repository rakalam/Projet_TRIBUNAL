<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{   


    protected $fillable = [
        'id_decl', 
        'id_entreprise',
        'nom_prenom',
        'fonction',
        'cin',
        'cnaps',
        'renumeration',
        'avantage',
        'pension',
        'sanitaire',
        'enfant',
        'impot',
      
   ];

    public function entreprise(){
        return $this->belongsTo(Entreprise::class, 'id_entreprise', 'id');
    }

    public function declaration(){
        return $this->belongsTo(Declaration::class, 'id_decl', 'id');
    }
    use HasFactory;
}
