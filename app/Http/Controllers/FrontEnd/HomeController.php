<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function home(){
      
        $hot = Product::all()->where('hot',1)->where('status',1);
        $featured = Product::all()->where('featured',1)->where('status',1);
        
        return view('pages.index',compact('hot','featured'));
    }
}
