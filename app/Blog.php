<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function articles()
    {
        return $this->hasMany('App\Article', 'fk_blogs_id', 'id');
    }
}
