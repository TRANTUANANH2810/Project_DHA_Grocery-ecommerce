<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $table = 'category_attribute'; 

    protected $guarded = []; 

    public function category(){

        return $this->hasOne(Category::class,'id','category_id');

    }

    public function attributeValue(){

        return $this->hasOne(AttributeValue::class,'attribute_id','id');

    }

    public function seller(){

        return $this->hasMany(Seller::class,'id','seller_id');

    }
}
