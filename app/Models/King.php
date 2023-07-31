<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class King extends Model
{
    
    use HasFactory;
    public function Carts(){
        return $this->belongsTo(Cart::class);
    }
}
