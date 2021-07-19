<?php

namespace App\Models;
use App\Models\GalleryCategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function gallery_category()
    {
        // gallery_category_id is the local_key : very important
        return $this->belongsTo(GalleryCategory::class,'gallery_category_id');
    }
}
