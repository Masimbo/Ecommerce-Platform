<?php

namespace App\Http\Controllers;

use App\Product;
use App\WhishLists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhishListController extends Controller
{
    public function addtowhishlist($id){
        
        $user_id = Auth::id();
        if($user_id){
        $whish_list = WhishLists::where('user_id',$user_id)->get();
        if ($whish_list){
            $product = $whish_list->products()->where('product_id', $id);
            if($product){
                $notification = [
                    'message' => 'product already in whishlist',
                    'alert-type'=>'error',
                ];

                return redirect()->back()->with($notification);
            }
            else{
            $whish_list = new WhishLists;
            $whish_list->user_id = $user_id;
            $whish_list->save();
            $whish_list->products()->attach($id);
            $notification = [
                'message' => 'Product Added Successfully',
                'alert-type'=>'success',
            ];
            return redirect()->back()->with($notification);


        }}
       
    }  
    else{
        $notification = [
            'message' => 'login to your account first',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }
  }
    
    

}
