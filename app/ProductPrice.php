<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    // The table this model points to
    protected $table = 'products_prices';

    // The attributes that are mass assignable
    protected $fillable = [
        'product_id',
        'price',
        'customer_type_id',
        'is_active',
        'deleted'
    ];

    // Defining Relationships with other Models
}
