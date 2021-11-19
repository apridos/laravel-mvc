<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestFriend extends Model
{
    // table's name on the database
    protected $table = 'bestfriend';

    // attributes that assignable
    protected $fillable = ['name', 'favorite_food'];

}
