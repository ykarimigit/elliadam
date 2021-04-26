<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userpass extends Model
{
    protected  $fillable=['email','pass',];

    public $timestamps=false;
}
