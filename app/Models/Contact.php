<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts'; // Specify the table name if it's different from the default naming

    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'emailaddress',
        'message',
    ];

    protected $keyType = 'string'; // Set the key type to 'string'

    public $incrementing = false; // Disable auto-incrementing for the primary key
}
