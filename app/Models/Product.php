<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'price', 'detail', 'imgs', 'bestseller'];
    
    //protected $with = ['category'];

    public function category() 
    {
        return $this->belongsToMany(Category::class);
    }
}
