<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 
        'lastname', 
        'email', 
        'phone', 
        'password',
        'role_id',
        'unit_id',
        'profile_photo',
        'deleted',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Defining Relationships with other Models
    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function unit() {
        return $this->belongsTo('App\Unit');
    }

    public function sale() {
        return $this->hasMany('App\Sale');
    }

}
