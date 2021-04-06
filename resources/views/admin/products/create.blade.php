@extends('admin.admin_layouts')
<link href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet"/>
<link href="{{asset('public/backend/lib/summernote/summernote-bs4.css')}}" rel="stylesheet">
@section('admin_content')

     <!-- ########## START: HEAD PANEL ########## -->
     <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
              <img src="{{asset('public/backend/img/img3.jpg')}}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href="{{ route('admin.password.change') }}"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('public/backend/img/img3.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('public/backend/img/img4.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('public/backend/img/img7.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('public/backend/img/img5.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="{{asset('public/backend/img/img3.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img8.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img9.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img10.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img5.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img8.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img10.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img9.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="{{asset('public/backend/img/img5.jpg')}}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
<form method="post" action="{{ route('store-product') }}" enctype="multipart/form-data">
    @csrf  
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Add new Product</h6>
  
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_name" value="" placeholder="Enter product name">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">product code: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_code" value="" placeholder="Enter product code">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">product quantity <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_quantity" value="" placeholder="Enter product quantity">
                  </div>
                </div><!-- col-4 -->
                
                </div><!-- col-8 -->
                <div class="col-lg-4">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" data-placeholder="Choose Category" name="category_id">
                      <option label="Choose Category">Choose Category</option>
                      @foreach ($categories as $category )
                      <option value="{{$category->id}}">{{$category->category_name}}</option>

                      @endforeach
                  
                    </select>
                    
                  </div>
                  
                </div><!-- col-4 -->
                
                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" data-placeholder="Choose sub Category" name="subcategory_id">
                        <option label="Choose Category"></option>
                        
                      </select>
                      
                    </div>
                    
                  </div><!-- col-4 -->
                
                  
                  <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" data-placeholder="Choose Brand" name="brand_id">
                        <option label="Choose Brand"> Choose Brand</option>
                        @foreach ($brands as $brand )
                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option> 
                        @endforeach                       
                      </select>
                      
                    </div>
                    
                  </div><!-- col-4 -->
                  
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">product size <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" data-role="tagsinput" name="product_size" id="size" value="" placeholder="Enter product size">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">product color <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" data-role="tagsinput" name="product_color" id="color" value="" placeholder="Enter product color">
                      </div>
                  </div><!-- col-4 -->
                  <div class="form-group">
                    <label class="form-control-label">Selling Price <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text"  name="selling_price"  value="" placeholder="Enter product price">
                  </div>

                  <div class="form-group">
                    <label class="form-control-label">product details <span class="tx-danger">*</span></label>
                    <textarea id="summernote" name="product_details" > </textarea>
                  </div>
              </div><!-- row -->
              
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product video: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="video_link" value="" placeholder="Enter video link">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product image one: <span class="tx-danger">*</span></label>
                  <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input" name="image_one">
                    <span class="custom-file-control"></span>
                  </label>
                </div>

                <div class="row-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Product image two: <span class="tx-danger">*</span></label>
                      <label class="custom-file">
                        <input type="file" id="file" class="custom-file-input" name="image_two">
                        <span class="custom-file-control"></span>
                      </label>
                    </div>

                    <div class="row-lg-12">
                        <div class="form-group">
                          <label class="form-control-label">Product image three: <span class="tx-danger">*</span></label>
                          <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input" name="image_three">
                            <span class="custom-file-control"></span>
                          </label>
                        </div>
                
                        
  <div class="row">
    <div class="col-lg-8">
        <label class="ckbox">
            <input type="checkbox" name="main_slider" value="1">
            <span>Main Slider</span>
          </label>
        </div>
        <div class="col-lg-8">
        <label class="ckbox">
            <input type="checkbox" name="hot_deal" value="1">
            <span>Hot Deal</span>
          </label>
        </div>

        <div class="col-lg-8">
          <label class="ckbox">
            <input type="checkbox" name="best_rated" value="1">
            <span>best rated</span>
              </label>
            </div>

            <div class="col-lg-8">
                <label class="ckbox">
                  <input type="checkbox" name="mid_slider" value="1">
                  <span>Mid Slider</span>
                </label>
              </div>

              <div class="col-lg-8">
                <label class="ckbox">
                  <input type="checkbox" name="trend" value="1">
                  <span>Trend</span>
                </label>
              </div>
              <div class="col-lg-8">
                <label class="ckbox">
                  <input type="checkbox" name="hot_new" value="1">
                  <span>Hot New</span>
                </label>
              </div>

              

    </div>
                      

  
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5">Submit Form</button>
                <button class="btn btn-secondary">Cancel</button>
              </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
          </div><!-- card -->
        </form>  
               </div><!-- sl-pagebody -->
       <footer class="sl-footer">
         <div class="footer-left">
           <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
           <div>Made by ThemePixels.</div>
         </div>
         <div class="footer-right d-flex align-items-center">
           <span class="tx-uppercase mg-r-10">Share:</span>
           <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
           <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
         </div>
       </footer>
       

       <script type="text/javascript">
        $(document).ready(function(){
       $('select[name="category_id"]').on('change',function(){
            var category_id = $(this).val();
            if (category_id) {
              
              $.ajax({
                url: "{{ url('/get/subcategory/') }}/"+category_id,
                type:"GET",
                dataType:"json",
                success:function(data) { 
                var d =$('select[name="subcategory_id"]').empty();
                $.each(data, function(key, value){
                
                $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');
  
                });
                },
              });
  
            }else{
              alert('danger');
            }
  
              });
        });
  
   </script>
  
  <script type="text/javascript">
    function readURL(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#one')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

@endsection