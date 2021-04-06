<?php

namespace App\Http\Controllers;

use App\Model\Admin\Coupon;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Session;

class CartController extends Controller
{
    public function addtocart(Request $request,$id){
        
        $product = Product::find($id);
            if($product->discount_price == null){
                Cart::add(array(
                    'id' => $product->id, 
                    'name' => $product->product_name,
                    'price' => $product->selling_price,
                    'quantity' => $request->qty,
                    'attributes' => array(
                        'image' => $product->image_one,
                        'size'  => $request->size,
                        'color' => $request->color,
                    )
                ));
                $notification = [
                    'message' => 'successfully add to cart',
                    'alert-type'=>'success',
                ];
                return redirect()->route('showcart')->with($notification);
            }
        else{
            Cart::add(array(
                'id' => $product->id, 
                'name' => $product->name,
                'price' => $product->discount_price,
                'quantity' => 1,
                'attributes' => array(
                    'image' => $product->image_one,
                    'size'  => $request->size,
                    'color' => $request->color,
                )
            ));
            
            $notification = [
                'message' => 'successfully add to cart',
                'alert-type'=>'success',
            ];
            return redirect()->route('showcart')->with($notification);


    }
        }
    
    
    public function checkout(){
        
        return view('pages.checkout');
        

    }
    
    
    public function showcart(){
        $cart = Cart::getContent();
        return view('pages.show-cart',compact('cart'));
    }

    public function applycoupon(Request $request){
        $coupon = Coupon::where('coupon',$request->coupon)->first();
        if ($coupon){
            Session::put('coupon',[
                'coupon' => $coupon->coupon,
                'discount'=> $coupon->discount,
                'balance'=>Cart::getTotal()-$coupon->discount,
            ]);

            $notification = [
                'message' => 'Coupon applied Successfully',
                'alert-type'=>'success',
            ];
            return redirect()->back()->with($notification);

        }
        else{
            $notification = [
                'message' => 'Coupon invalid ',
                'alert-type'=>'error',
            ];
            return redirect()->back()->with($notification);
        }

    }

    }
