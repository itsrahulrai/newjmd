<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'ref_user_id', 'amount', 'relationship',
    ];

    // Define the relationship with the user receiving the commission
    public function user()
    {
        return $this->belongsTo(Signup::class);
    }

    // Define the relationship with the referrer user (the one who referred)
    public function refUser()
    {
        return $this->belongsTo(Signup::class, 'ref_user_id');
    }
}
