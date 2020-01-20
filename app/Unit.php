<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Unit extends Model
{
    use Notifiable;

    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'description',
        'is_active',
        'deleted'
    ];

    // Defining Relationships with other Models
    public function user() {
        return $this->hasMany('App\User');
    }

    public function sale() {
        return $this->hasMany('App\Sale');
    }

    public function productCategory() {
        return $this->hasMany('App\ProductCategory');
    }
    
    public function product() {
        return $this->hasMany('App\Product');
    }
}
