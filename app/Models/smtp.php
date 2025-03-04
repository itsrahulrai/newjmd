<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smtp extends Model
{
    use HasFactory;

    protected $fillable = [
        'smtp_host',
        'smtp_port',
        'smtp_user',
        'smtp_password',
        'smtp_encryption',
        'from_email',
        'from_name',
    ];
}
