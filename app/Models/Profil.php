<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profil extends Model
{
    use HasFactory;
    
    Public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    
    protected $fillable = [
        
        'numberphone',
        'adress',
        'picture',
        'user_id',
        
    ];
    
    
    
}
