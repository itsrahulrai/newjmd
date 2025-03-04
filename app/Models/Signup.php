<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Signup extends Authenticatable
{
    use Notifiable;

    protected $table = 'signup'; // Specify the table name

    protected $fillable = [
        'name', 'email', 'password', 'parent_id', 'referral_code',
    ];

    public function parent()
    {
        return $this->belongsTo(Signup::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Signup::class, 'parent_id');
    }
}
