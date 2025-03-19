<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'fname',
        'lname',
        'email',
        'phone',
        'state',
        'district',
        'city',
        'pincode',
        'option',
        'message',
    ];
    
     // Relationship with Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
}
