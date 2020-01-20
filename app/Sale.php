<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    // The attributes that are mass assignable
    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'is_credit',
        'customer_id',
        'driver_id',
        'unit_id',
        'deleted'
    ];

    // Defining Relationships with other Models
    public function user() {
        return $this->belongsTo('App\User'); // Skeptical (one or more user because the driver and operator can both be involved in a sale)
    }

    public function driver() {
        return $this->belongsTo('App\User', 'driver_id');
    }

    public function customer() {
        return $this->belongsTo('App\Customer');
    }

    public function unit() {
        return $this->belongsTo('App\Unit');
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
