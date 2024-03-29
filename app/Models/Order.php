<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'productid', 'name', 'phone', 'nid', 'location', 'carinfo', 'payment_method', 'quantity', 'status'];
}
