<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'slug',
        'body',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical',
        'status'
    ];
}
