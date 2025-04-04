<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $fillable = [
        'name',
        'company',
        'phone_number',
        'email'
    ];
    public $timestamps = true;
}
