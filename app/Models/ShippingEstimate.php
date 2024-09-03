<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingEstimate extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'email', 'pickup_location', 'pickup_address', 'mobile',
        'item_weight', 'delivery_location', 'delivery_address',
        'item_description', 'delivery_cost'
    ];
}
