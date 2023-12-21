<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory,Sluggable;

    protected $table = 'product'; 

    protected $fillable =  ['seller_id', 'category_id', 'name', 'sku', 'slug', 'image', 'description', 'content', 'price', 'price_old', 'qty', 'is_active'];

    public function category(){

        return $this->hasOne(Category::class,'id','category_id');

    }

    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
