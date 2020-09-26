<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone','phone2','phone3','describe','google','address','email','instagram'];

}
