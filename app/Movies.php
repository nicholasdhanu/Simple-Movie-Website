<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    public function genres(){

        return $this->hasOne('App\Genres', 'id', 'genre_id');

    }
}
