<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'description',
        'price',
        'product_category_id',
        'unit_id',
        'is_active',
    ];

    public function unit() {
        return $this->belongsTo('App\Unit');
    }
    
    public function productCategory() {
        return $this->belongsTo('App\ProductCategory');
    }

    public function sale() {
        return $this->hasMany('App\Sale');
    }
}
