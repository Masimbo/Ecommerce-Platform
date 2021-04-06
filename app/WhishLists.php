<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WhishLists extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
