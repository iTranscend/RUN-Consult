<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    // Defining Relationships with other Models
    public function user() {
        return $this->hasMany('App\User');
    }

}
