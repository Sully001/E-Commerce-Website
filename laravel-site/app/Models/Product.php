<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    //This explicitly states which table the model should 
    //take its data from. In this case it takes the product data
    //from the products table
    protected $table = "products";

    //This states what they primaryKey (unique identifier) of the
    //products table is. Default primaryKey in laravel is "id".
    protected $primaryKey = "ProductID";

    public $timestamps = false;
}
