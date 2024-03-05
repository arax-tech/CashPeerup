<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $fillable = [
        'user_id', 'name', 'city', 'zip', 'dob', 'identification', 'amount', 'status'
    ];
}
