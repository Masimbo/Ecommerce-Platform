@extends('admin.admin_layouts')

@section('admin_content')



    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Ecommerce</a>
        <span class="breadcrumb-item active">Edit Category</span>
      </nav>

      <div class="sl-pagebody">
        <form action={{ route('category.update', [$cat->id]) }} method="post" >
          @csrf
              <input type="text" class="form-control"  name="category_name" value="{{ $cat->category_name }}">
            
            <button type="submit" class="btn btn-info pd-x-20">Submit</button>
      
          </form>  
       </div><!-- row -->

@endsection