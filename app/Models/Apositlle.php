<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apositlle extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'section1',
        'section2_image',
        'section_3',
        'section4',
        'section6',
        'section5',
       'canonical',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status'
    ];
}
