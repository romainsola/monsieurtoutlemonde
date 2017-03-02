<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function theme()
    {
        return $this->hasOne('App\Theme', 'id', 'fk_themes_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'fk_users_id');
    }
}
