<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_entreprise',
        'mes', 
    
    ];
      

    public function entreprise(){
        return $this->belongsTo(Entreprise::class, 'id_entreprise', 'id');
    }
}
