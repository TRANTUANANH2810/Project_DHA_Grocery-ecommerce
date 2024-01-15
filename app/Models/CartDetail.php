<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    protected $table = 'cart_detail'; 

    protected $guarded = []; 

    public function product(){

        return $this->hasOne(Product::class,'id','product_id');

    }

    public function cart(){

        return $this->hasOne(Cart::class,'id','cart_id');

    }
}
