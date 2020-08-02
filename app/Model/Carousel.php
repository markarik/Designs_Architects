<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{

    protected $fillable = [

        'title',
        'image_url',
        'description'
    ];

}
