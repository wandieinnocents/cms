<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_category_id','product_name','product_price','product_description','product_image'];

    public function category()
    {
        // product_category_id is the local_key : very important
        return $this->belongsTo(Category::class,'product_category_id');
    }


}
