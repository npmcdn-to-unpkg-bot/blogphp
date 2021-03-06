<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'status',
        'published_at',
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    public function picture()
    {
        return $this->hasOne('App\Picture');
    }

}
