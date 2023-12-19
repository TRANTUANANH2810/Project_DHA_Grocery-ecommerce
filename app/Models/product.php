<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product'; 
    protected $guarded = []; 

    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
