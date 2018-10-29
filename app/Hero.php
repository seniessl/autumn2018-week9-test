<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = "heroes";

    public function image() {
        return $this->belongsToMany('App\Image', 'hero_image');
    }
}