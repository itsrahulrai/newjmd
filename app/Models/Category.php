<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'status', 'parent_id'];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

     // Relationship: A category can have many subcategories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Relationship: A subcategory belongs to a parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
