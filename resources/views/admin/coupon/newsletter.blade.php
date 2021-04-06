@extends('admin.admin_layouts')
@section('admin_content')



  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Ecommerce</a>
      <a class="breadcrumb-item" href="index.html">Tables</a>
      <span class="breadcrumb-item active">emails Table</span>
    </nav>

    <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>emails Table</h5>
      </div><!-- sl-page-title -->

      <div class="card pd-20 pd-sm-40">

        <h6 class="card-body-title">emails list 
            <a href="" class="btn btn-sm btn-warning" style="float:right;" data-toggle="modal" data-target="#modaldemo3"> Add New  </a>

        </h6>
        <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">ID</th>
                <th class="wd-15p">Email</th>
                <th class="wd-15p">Subscribtion time</th>
                <th class="wd-20p">Action</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach($news_letters as $key=>$row)
                
                <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->created_at->diffForhumans() }}</td>
                
                <td>
                    <a href="{{ route('newsletter.delete', [ $row->id ]) }}" class="btn btn-sm btn-danger" id="delete"> Delete </a>
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
        
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


        <form action={{ route('admin.newsletter') }} method="post" >
            @csrf
         
        <div class="modal-body pd-20">
                <div class="mb-3">
                    <input type="text" class="form-control"  name="email" placeholder="email">
                </div>
                <button type="submit" class="btn btn-info pd-x-20">Submit</button>

              </form>  
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->


@endsection