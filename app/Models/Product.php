<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = 'products'; 
    protected $keyType = 'string'; 
    
    public $incrementing = false; 
    protected $fillable = ['product_name', 'product_thumbnail'];
    
}
