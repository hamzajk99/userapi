<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomUser extends Model
{
    protected $table = 'custom_users'; 

    protected $fillable = ['external_id', 'stage'];

}
