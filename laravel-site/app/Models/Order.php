<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'orderID';

    protected $fillable = [
        'orderID',
        'userID',
        'productID',
        'quantity',
        'created_at',
        'updated_at',
    ];
}
