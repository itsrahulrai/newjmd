<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'amount',
    ];

    // Define the relationship with the user (the one making the transaction)
    public function user()
    {
        return $this->belongsTo(Signup::class);
    }
}
