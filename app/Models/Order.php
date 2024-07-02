<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tovar_id',
        'name',
        'price',
        'quantity',
        'total_price',
        'user_id'
    ];
}
