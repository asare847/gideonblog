<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopefooter_post($query){
    	return $query->take(5)->latest()->get();
    }

}
