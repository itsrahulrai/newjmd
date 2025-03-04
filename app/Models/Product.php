<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'name',
        'slug',
        'image',
        'shortdesc',
        'desc',
        'status',
    ];
    
      public function category()
      {
          return $this->belongsTo(Category::class, 'category_id');
      }
  
      public function subcategory()
      {
          return $this->belongsTo(Category::class, 'subcategory_id');
      }
}
