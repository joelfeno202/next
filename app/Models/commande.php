<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'user_id',
        'ville',
        'tel',
        'adresse',
        'pays',
        'entreprise',
        'prenom',
        'image'
    ];
}