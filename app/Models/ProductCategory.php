<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory; 
    protected $fillable = ['product_category_name','product_category_description'];

    // relationship with product
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
}
