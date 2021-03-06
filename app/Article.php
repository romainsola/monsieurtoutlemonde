<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'title',
        'content',
        'active',
        'image',
        'fk_users_id',
        'fk_themes_id',
        'fk_blogs_id'
    ];

    public function theme()
    {
        return $this->hasOne('App\Theme', 'id', 'fk_themes_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'fk_users_id');
    }
}
