<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category(){
        $category = Category::all();
        return view('admin.category.category', compact('category'));

    }

    public function storecategory(Request $request){
        $validated_data = $request->validate([
            'category_name' => 'required|unique:categories|max:255'
        ]);

        $category = new Category();
        $category->category_name = $validated_data['category_name'];
        $category->save();
        $notification = [
            'message' => 'Category Added Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }


    public function deletecategory(Request $request, $id){
        $cat = Category::find($id);
        $cat->destroy();

        $notification = [
            'message' => 'Category Deleted Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }

    public function editcategory(Request $request, $id){

        $cat = Category::find($id);

        return view('admin.category.categoryedit', compact('cat'));
    }



    public function updatecategory(Request $request, $id){
        $cat = Category::find($id);
        
        $validated_data = $request->validate([
            'category_name'=>'required',
        ]);
        $cat->category_name  = $request->category_name;
        $cat->save();   
        $notification = [
            'message' => 'Category updated Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }



}
