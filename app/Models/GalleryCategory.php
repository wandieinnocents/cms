<?php

namespace App\Models;
use App\Models\Gallery;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;
    
    // relationship with gallery 
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
