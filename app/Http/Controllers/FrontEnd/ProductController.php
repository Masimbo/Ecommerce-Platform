<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    

    public function show($id, $name){
        
      $product = Product::find($id)->where('product_name', $name)->first();
      $size = $product->product_size;
      $color = $product->product_color;
      $product_size = explode(',',$size);
      $product_color = explode(',',$color);


      return view('pages.show-product', compact('product','product_color','product_size'));
    
    }
}
