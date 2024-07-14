<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
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
    public function product()
    {
        return $this->belongsTo(Product::class,'category_id','id');
    }
}