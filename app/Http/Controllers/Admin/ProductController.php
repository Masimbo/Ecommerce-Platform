<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use App\Model\Admin\Brand;
use App\Model\Admin\Category;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $products = Product::all();
        return view('admin.products.all-products', compact('products'));
    }


    public function create(Request $request){
        $categories  = Category::all();
        $brands   = Brand::all();
        return view('admin.products.create', compact('categories','brands'));

    }


    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        
        return view('admin.products.edit',compact('product','categories', 'brands'));
    }

    public function delete($id){
        $product = Product::find($id);
        $product->destroy();
 
        $notification = [
            'message' => 'product deleted Successfully',
            'alert-type'=>'success',
        ];

        
        return redirect()->back()->with($notification);    }

    public function getSubCategories($id){
        

        $subcategories = Category::find($id)->subcategories;
        return json_encode($subcategories);

    }

    public function store(Request $request){
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_quantity = $request->product_quantity;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;
        $product->selling_price = $request->selling_price;
        $product->product_details = $request->product_details;
        $product->video_link = $request->video_link;
        $product->main_slider = $request->main_slider;
        $product->mid_slider = $request->mid_slider;
        $product->hot_deal = $request->hot_deal;
        $product->best_rated = $request->best_rated;
        $product->trend = $request->trend;
        $product->hot_new = $request->hot_new;
        $product->status = 1;

       
        $image_one   = $request->file('image_one');
        $image_two   = $request->file('image_two');
        $image_three = $request->file('image_three');
        
        if($image_one && $image_two && $image_three){
            $filename_one = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            $path_one = $image_one->move('uploads\product', $filename_one);
            
            $filename_two = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            $path_two = $image_two->move('uploads\product', $filename_two);

            
            $filename_three = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            $path_three = $image_three->move('uploads\product', $filename_three);

            $product->image_one = $filename_one;
            $product->image_two = $filename_two;
            $product->image_three = $filename_three;
            
        }
        $product->save();
        
        
        $notification = [
            'message' => 'product Added Successfully',
            'alert-type'=>'success',
        ];

        
        return redirect()->back()->with($notification);



    }


    public function updatewithoutphoto(Request $request, $id){
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_quantity = $request->product_quantity;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->brand_id = $request->brand_id;
        $product->product_size = $request->product_size;
        $product->product_color = $request->product_color;
        $product->selling_price = $request->selling_price;
        $product->product_details = $request->product_details;
        $product->video_link = $request->video_link;
        $product->main_slider = $request->main_slider;
        $product->mid_slider = $request->mid_slider;
        $product->hot_deal = $request->hot_deal;
        $product->best_rated = $request->best_rated;
        $product->trend = $request->trend;
        $product->hot_new = $request->hot_new;
        $product->status = 1;

       
        $product->save();
        
        $notification = [
            'message' => 'product Added Successfully',
            'alert-type'=>'success',
        ];

        
        return redirect()->back()->with($notification);



    }

    public function updatephoto(Request $request, $id){
        $product = Product::find($id);
        $old_image1 = $product->image_one;
        $old_image2 = $product->image_two;
        $old_image3 = $product->image_three;
        if($request->has('image_one')){
            unlink($old_image1);
            $image_one = $request->image_one;
            $filename_one = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            $path_one = $image_one->move('uploads\product', $filename_one);
            $product->image_one = $path_one;
        }
        else{
            return redirect()->back();

        }
        if($request->has('image_two')){
            unlink($old_image2);
            $image_two = $request->image_two;
            $filename_two = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            $path_two = $image_two->move('uploads\product', $filename_two);
            $product->image_two = $path_two;
        }
        else{
            return redirect()->back();

        }
        if($request->has('image_three')){
            unlink($old_image3);
            $image_three = $request->image_three;
            $filename_three = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            $path_three = $image_three->move('uploads\product', $filename_three);
            $product->image_three = $path_three;
        }
        else{
            return redirect()->back();

        }

        $product->save();
    }
    
    
}

