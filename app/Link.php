<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function file()
    {
        return $this->belongsTo('App\File');
    }
}
