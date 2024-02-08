<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    protected $fillable = [
    
        'id_decl',
        'id_entreprise',
        'date_paiment',
        'code_banque_payeur',
        'montant',
   ];

    public function entreprise(){
        return $this->belongsTo(Entreprise::class, 'id_entreprise', 'id');
    }

    public function declaration(){
        return $this->belongsTo(Declaration::class, 'id_decl', 'id');
    }
}
