<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    use HasFactory;
    protected $fillable = [
        'logolight',        
        'logodark',      
        'name',
        'email',         
        'phone',        
        'copyright',    
        'address',       
        'description', 
    ];
}
