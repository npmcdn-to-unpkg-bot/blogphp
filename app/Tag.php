<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()  // relation avec Post.php
    {
        return $this->belongsToMany('App\Post');
    }
}
