<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'des', 'thumbnail', 'content'];
}
