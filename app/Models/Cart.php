<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table="cart";

    protected $guarded = []; 

    public function user(){

        return $this->hasOne(User::class,'id','user_id');

    }

    public function cartDetail(){

        return $this->hasMany(OrderDetail::class,'cart_id','id');

    }
}
