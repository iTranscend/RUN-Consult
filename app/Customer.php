<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'deleted'
    ];

    // Defining Relationships with other Models
    public function sale() {
        return $this->hasMany('App\Sale');
    }
}
