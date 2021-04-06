<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
            'subcategory_name','category_id',
    ];

    protected $table ='subcategories';

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
