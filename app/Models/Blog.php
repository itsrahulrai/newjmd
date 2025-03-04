<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'content',
        'thumbnail',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
    ];

    public function media()
    {
        return $this->hasMany(BlogMedia::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
