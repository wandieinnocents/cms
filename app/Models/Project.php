<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectCategory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['project_category_id','title','description','product_image'];

    public function project_category()
    {
        // project_category_id is the local_key : very important
        return $this->belongsTo(ProjectCategory::class,'project_category_id');
    }

}
