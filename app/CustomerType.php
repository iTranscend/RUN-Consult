<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerType extends Model
{
    // The table this model points to
    protected $table = 'customer_type';

    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'is_active',
        'deleted'
    ];

    // Defining Relationships with other Models
}
