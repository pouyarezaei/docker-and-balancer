<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function news()
    {
        return $this->belongsTo('App\News');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
