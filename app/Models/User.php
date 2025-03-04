<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $casts = [
        'social_media_visibility' => 'array',
    ];
    // User.php (Model)
    protected $fillable = [
        'user_type',
        'name',
        'email',
        'mobile',
        'profession',
        'age',
        'dob',
        'facebook',
        'linkedin',
        'youtube',
        'instagram',
        'social_media_visibility',
        'twitter',
        'about',
        'weight',
        'father_name',
        'mother_name',
        'image',
        'country_id',
        'state_id',
        'city_id',
        'gender',
        'seeking',
        'username',
        'password',
        'height',
        'bodytype',
        'relationship_status',
        'have_kids',
        'want_kids',
        'your_education',
        'you_smoke',
        'you_drink',
        'ethnicities',
        'religion',
        'interest',
        'role',
        'status', 
    ];


   

    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    // Optionally, customize the array output if necessary
    public function toArray()
    {
        $array = parent::toArray();
        // Add or modify fields if needed
        return $array;
    }
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }



    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function getStatusAttribute($value)
    {
        return ucfirst($value);
    }

    public function purchasePlans()
    {
        return $this->hasMany(PurchasePlan::class);
    }



}
