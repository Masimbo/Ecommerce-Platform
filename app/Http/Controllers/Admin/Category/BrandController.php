<?php

namespace App\Http\Controllers\Admin\Category;
use Carbon;
use App\Http\Controllers\Controller;
use App\Model\Admin\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function brands(){
        $brands = Brand::all();
        return view('admin.category.brands', compact('brands'));

}

public function storebrand(Request $request){
    $validated_data = $request->validate([
        'brand_name'=>'required|unique:brands',
    ]);

    if ($request->has('brand_logo')){
        $this->validate($request, ['brand_logo'=>'required | image']);
        $image    = $request->file('brand_logo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->move('uploads\brands', $filename);

        $brand  = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_logo = $filename;
        $brand->save();
        $notification = [
            'message' => 'brand Added Successfully',
            'alert-type'=>'success',
        ];

        
        return redirect()->back()->with($notification);

    }

    
}
public function deletebrand(Request $request, $id){
    $brand = Brand::find($id);
    unlink($brand->brand_logo);
    $brand->destroy();

    $notification = [
        'message' => 'Brand Deleted Successfully',
        'alert-type'=>'success',
    ];
    return redirect()->back()->with($notification);
}

public function editbrand(Request $request, $id){

    $brand = Brand::find($id);

    return view('admin.category.brandedit', compact('brand'));
}



public function updatebrand(Request $request, $id){
    $brand = Brand::find($id);
    $old_logo = $request->old_logo;
    $validated_data = $request->validate([
        'brand_name'=>'required|unique:brands',
    ]);

    if ($request->has('brand_logo')){
        $this->validate($request, ['brand_logo'=>'required | image']);
        $image    = $request->file('brand_logo');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->move('uploads\products', $filename);
        $brand->brand_name = $request->brand_name;
        $brand->brand_logo = $filename;
        $brand->save();
        $notification = [
            'message' => 'brand updated Successfully',
            'alert-type'=>'success',
        ];

        return redirect()->back()->with($notification);

    }
    else{
        $brand->brand_name = $request->brand_name;
        $brand->brand_logo = $request->old_logo;
        $brand->save();
        $notification = [
            'message' => 'brand updated without image Successfully',
            'alert-type'=>'success',
        ];

        return redirect()->back()->with($notification);

    }
}


}
