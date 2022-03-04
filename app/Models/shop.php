<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produit;
class shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'prod_id',
        'prod_qty',
        'product_prix',
        'commande'
    ];
    public function products(){
        return  $this->belongsTo(produit::class,'prod_id','id');
    }
}