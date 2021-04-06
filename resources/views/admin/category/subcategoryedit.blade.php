@extends('admin.admin_layouts')

@section('admin_content')



    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Ecommerce</a>
        <span class="breadcrumb-item active">Edit SubCategory</span>
      </nav>

      <div class="sl-pagebody">
        <form action={{ route('subcategory.update', [$subcat->id]) }} method="post" >
          @csrf

              <input type="text" class="form-control"  name="subcategory_name" value="{{ $subcat->subcategory_name }}">
                 <select name="category_id" id="categories">
                      @foreach ($categories as $row )
                      
                      
                      <option value="{{ $row->id }}" {{ $row->id == $subcat->category_id ? 'selected':'' }} > {{ $row->category_name }}</option>


                      @endforeach
                
                  </select>

            <button type="submit" class="btn btn-info pd-x-20">Submit</button>
      
          </form>  
       </div><!-- row -->

@endsection