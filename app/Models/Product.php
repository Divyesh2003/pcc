<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'canonical',
        'status',
        'meta_keywords'
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
