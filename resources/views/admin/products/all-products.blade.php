@extends('admin.admin_layouts')
@section('admin_content')



  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Ecommerce</a>
      <a class="breadcrumb-item" href="index.html">Tables</a>
      <span class="breadcrumb-item active">products Table</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>products Table</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">

        <h6 class="card-body-title">products list 

        </h6>
        <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">ID</th>
                <th class="wd-15p">Product name</th>
                <th class="wd-15p">status </th>
                <th class="wd-15p">category  name</th>
                <th class="wd-15p">sub category name</th>
                <th class="wd-18p">Product quantity</th>
                <th class="wd-15p">ProductCode</th>
                <th class="wd-15p">image</th>

                <th class="wd-30p">Action</th>

                
              </tr>
            </thead>
            <tbody>
                @foreach($products as $key=>$product)
                
                <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $product->product_name }}</td>
                  @if($product->status==1)
                  <td> Active </td>
                  @else
                  <td> InActive </td>
                  @endif

                <td>{{ $product->category->category_name }}</td>
                @if ($product->subcategory)
                <td>{{ $product->subcategory->subcategory_name }}</td>
                @else
                <td>no sub category</td>
                @endif
                <td>{{ $product->product_code }}</td>
                <td>{{ $product->product_quantity }}</td>
                <td><img src="{{asset('uploads/product/'.$product->image_one ) }}" style="width:80px; height:80px;"></td>
                  
                <td>
                    <a href="{{ route('edit-product',[$product->id]) }}" class=" btn btn-sm btn-success" > Edit </a>

                    <a href="{{ route('delete-product',[$product->id]) }}" class="btn btn-sm btn-danger" id="delete"> Delete </a>
                </td>
               
              </tr>
              @endforeach
              </tbody>
          </table>
        </div><!-- table-wrapper -->
      </div><!-- card -->


     
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  
<!-- LARGE MODAL -->
<div id="modaldemo3" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add category</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
    
      


      

@endsection