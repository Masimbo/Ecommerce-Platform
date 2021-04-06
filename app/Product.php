<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Model\Admin\Category');
    }

    public function subcategory(){
        return $this->belongsTo('App\Model\Admin\SubCategory');
    }

    public function brand(){
        return $this->belongsTo('App\Model\Admin\Brand');
    }


    public function whishlist()
    {
        return $this->belongsToMany('App\WhishLists');
    }

}
