<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    
    protected $fillable =[
        
        'numero_affaire',
        'numero_stage',
        'numero_bdc',
        'numero_facture',
        'nom_formation',
        'nom_comedien',
        'nom_entreprise',
        'adresse_entreprise',
        'ville_formation',
        'objet_facture',
        
    ];
    
}
