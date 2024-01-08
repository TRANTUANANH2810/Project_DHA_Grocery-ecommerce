<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    protected $table = 'attribute_value'; 

    protected $guarded = []; 

    public function attribute(){

        return $this->hasOne(Attribute::class,'id','attribute_id');

    }

    public function product(){

        return $this->hasMany(Product::class,'id','product_id');

    }
}
