<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attension extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'slug',
        'flag',
        'nameImage',
        'description',
        'address',
        'embasy_phone',
        'faq',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical',
        'status' 
    ];
}
