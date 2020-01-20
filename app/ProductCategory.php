<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    // The table this model points to
    protected $table = 'product_categories';
    
    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'unit_id',
        'is_active',
        'deleted'
    ];

    // Defining Relationships with other Models
    // public function product() {
    //     return $this->hasMany('App\Product');
    // }

    public function unit() {
        return $this->belongsTo('App\Unit');
    }
}
