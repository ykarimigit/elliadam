<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'title', 'name', 'seo','keywords','description','detail','home','parent_id','navbar','sidebar','footer','order_no','status',
    ];
    public $timestamps = false;
    //
}
