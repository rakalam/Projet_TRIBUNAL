<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_entreprise',
        'date_declaration', 
        'periodicite',
        'mois',
        'anne',
        'etat',
        'montant',
      
   ];

    public function entreprise(){
        return $this->belongsTo(Entreprise::class, 'id_entreprise', 'id');
    }

}
