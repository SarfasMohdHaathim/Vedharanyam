<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatments';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['id', 'name', 'thumbnail', 'category', 'details'];
}
