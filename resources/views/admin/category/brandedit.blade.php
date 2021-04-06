@extends('admin.admin_layouts')

@section('admin_content')



    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Ecommerce</a>
        <span class="breadcrumb-item active">Edit Brand</span>
      </nav>

      <div class="sl-pagebody">
        <form action='{{ route('brand.update',[$brand->id] ) }}' method="post"  enctype="multipart/form-data">
            @csrf
         
        <div class="modal-body pd-20">
                <div class="mb-3">
                    <input type="text" class="form-control"  name="brand_name" value="{{ $brand->brand_name }}">

                    <input type="file" class="form-control"  name="brand_logo">
                    <img src='{{ asset('/uploads/products/'. $brand->brand_logo) }}'>
                    <input type="hidden" value="{{$brand->brand_logo}}" name="old_logo">
 
                </div>
                <button type="submit" class="btn btn-info pd-x-20">Submit</button>

              </form>  
       </div><!-- row -->

@endsection