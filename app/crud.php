<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    protected $fillable =['name', 'email', 'mobileno', 'gender', 'qualification', 'address', 'image'];
}
