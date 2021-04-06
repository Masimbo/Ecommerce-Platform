<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Model\Admin\Category;
use App\Model\Admin\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function subcategories(){
        $sub = SubCategory::all();

        $category = Category::all();
        
        return view('admin.category.subcategories', compact('sub','category'));

}

    public function storesubcategory (Request $request){

        $validated_data = $request->validate([
            'subcategory_name' => 'required|unique:subcategories|max:255'
        ]);

        $subcategory = new SubCategory();
        $subcategory->subcategory_name = $validated_data['subcategory_name'];
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        $notification = [
            'message' => 'sub Category Added Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);


    }

    
    public function deletesubcategory(Request $request, $id){
        $cat = SubCategory::find($id);
        $cat->destroy();

        $notification = [
            'message' => 'sub Category Deleted Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }

    public function editsubcategory(Request $request, $id){

        $subcat = SubCategory::find($id);
        $categories = Category::all();

        return view('admin.category.subcategoryedit', compact('subcat', 'categories'));
    }

    public function updatesubcategory(Request $request, $id){
        $cat = SubCategory::find($id);
        
        $validated_data = $request->validate([
            'subcategory_name'=>'required',
        ]);
        $cat->subcategory_name  = $request->subcategory_name;
        $cat->category_id  = $request->category_id;

        $cat->save();   
        $notification = [
            'message' => 'sub Category updated Successfully',
            'alert-type'=>'success',
        ];
        return redirect()->back()->with($notification);
    }
}
