<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id'];

    // Définir la relation entre le panier et les produits (exemple de relation Many-to-Many)
    public function King(){
        return $this->hasMany(King::class);
    }

    public function User(){
        return $this->belongsTo(Cart::class);
    }
}
