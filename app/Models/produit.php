<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorie;

class produit extends Model
{
    use HasFactory;
    protected $fillable = ['vu', 'quatite', 'nomProduit', 'image', 'prix', 'description', 'nombre', 'categorie','selectt'];
}