<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Coupon;
use App\Model\Admin\NewsLetter;
use Illuminate\Http\Request;

class CoupounsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $coupons = Coupon::all();
        return view('admin.coupon.coupons-list', compact('coupons'));
    }

    public function store(Request $request){
        $validated_data = $request->validate([
            'coupon'=>'required',
            'discount'=>'required'
        ]);
        $coupon = new Coupon();
        $coupon->coupon = $validated_data['coupon'];
        $coupon->discount = $validated_data['discount'];
        $coupon->save();
        $notification = [
            'message' => 'Coupon Created Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);

    }

    public function deletecoupon(Request $request, $id){
        $coupon = Coupon::find($id);
        $coupon->destroy();

        $notification = [
            'message' => 'Coupon Deleted Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }

    public function editcoupon(Request $request, $id){

        $coupon = Coupon::find($id);

        return view('admin.coupon.coupons-edit', compact('coupon'));
    }



    public function updatecoupon(Request $request, $id){
        $coupon = Coupon::find($id);
        
        $validated_data = $request->validate([
            'coupon'=>'required',
            'discount'=>'required',
        ]);
        $coupon->coupon  = $request->coupon;
        $coupon->discount = $request->discount;
        $coupon->save();   
        $notification = [
            'message' => 'Coupon updated Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }
    public function newsletter(){
        $news_letters = NewsLetter::all();
        return view('admin.coupon.newsletter', compact('news_letters'));
    }

    public function storenewsletter(Request $request){
        $validated_data = $request->validate([
            'email'=>'required|unique:news_letters',
        ]);
        $news_letter = new NewsLetter();
        $news_letter->email = $request->email;
        $news_letter->save();
        $notification = [
            'message' => 'email subscribed Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }
}
