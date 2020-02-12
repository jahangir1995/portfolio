<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
   	'first_Name','last_Name','email','subject','message'
   ];
}
