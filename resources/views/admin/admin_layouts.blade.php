<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('public/backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('public/backend/css/starlight.css')}}">
    
        <!--- data tables --->

    <link href="{{asset('public/backend/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{asset('public/backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">
  
  </head>

  <body>

    @guest


     @else

     <!-- ########## START: LEFT PANEL ########## -->
     <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
     <div class="sl-sideleft">
       <div class="input-group input-group-search">
         <input type="search" name="search" class="form-control" placeholder="Search">
         <span class="input-group-btn">
           <button class="btn"><i class="fa fa-search"></i></button>
         </span><!-- input-group-btn -->
       </div><!-- input-group -->
 
       <label class="sidebar-label">Navigation</label>
       <div class="sl-sideleft-menu">
         <a href="index.html" class="sl-menu-link active">
           <div class="sl-menu-item">
             <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
             <span class="menu-item-label">Dashboard</span>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <a href="{{ route('coupons-list') }}" class="sl-menu-link">
           <div class="sl-menu-item">
             <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
             <span class="menu-item-label">Coupons</span>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <a href="#" class="sl-menu-link">
           <div class="sl-menu-item">
             <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
             <span class="menu-item-label">Category</span>
             <i class="menu-item-arrow fa fa-angle-down"></i>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{ route('categories') }}" class="nav-link">Categories</a></li>
           <li class="nav-item"><a href="{{ route('subcategories')}}" class="nav-link">Sub Categories</a></li>
           <li class="nav-item"><a href="{{ route('brands') }}" class="nav-link">Brands</a></li>
         </ul>
         <a href="#" class="sl-menu-link">
           <div class="sl-menu-item">
             <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
             <span class="menu-item-label">Forms</span>
             <i class="menu-item-arrow fa fa-angle-down"></i>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
           <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
           <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
           <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
           <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
         </ul>
         <a href="#" class="sl-menu-link">
           <div class="sl-menu-item">
             <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
             <span class="menu-item-label">Others</span>
             <i class="menu-item-arrow fa fa-angle-down"></i>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{ route('admin.newsletter') }}" class="nav-link">News Letter</a></li>
            </ul>
         <a href="#" class="sl-menu-link">
           <div class="sl-menu-item">
             <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
             <span class="menu-item-label">Products</span>
             <i class="menu-item-arrow fa fa-angle-down"></i>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="{{ route('create-product') }}" class="nav-link">Add Product</a></li>
           <li class="nav-item"><a href="{{route('product-list')}}" class="nav-link">All products</a></li>
         </ul>
         <a href="#" class="sl-menu-link">
           <div class="sl-menu-item">
             <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
             <span class="menu-item-label">Maps</span>
             <i class="menu-item-arrow fa fa-angle-down"></i>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
           <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
         </ul>
         <a href="mailbox.html" class="sl-menu-link">
           <div class="sl-menu-item">
             <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
             <span class="menu-item-label">Mailbox</span>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <a href="#" class="sl-menu-link">
           <div class="sl-menu-item">
             <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
             <span class="menu-item-label">Pages</span>
             <i class="menu-item-arrow fa fa-angle-down"></i>
           </div><!-- menu-item -->
         </a><!-- sl-menu-link -->
         <ul class="sl-menu-sub nav flex-column">
           <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
           <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
           <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
           <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
         </ul>
       </div><!-- sl-sideleft-menu -->
 
       <br>
     </div><!-- sl-sideleft -->
     <!-- ########## END: LEFT PANEL ########## -->
 
    </div>


    <!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
   
    @endguest

    @yield('admin_content')


    
    <script src="{{asset('public/backend/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('public/backend/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('public/backend/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('public/backend/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('public/backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('public/backend/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('public/backend/lib/d3/d3.js')}}"></script>
    <script src="{{asset('public/backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('public/backend/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('public/backend/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('public/backend/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('public/backend/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('public/backend/lib/flot-spline/jquery.flot.spline.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
        
<script src="{{asset('public/backend/lib/medium-editor/medium-editor.js')}}"></script>
<script src="{{asset('public/backend/lib/summernote/summernote-bs4.min.js')}}"></script>

    <script>
    $(function(){
     'use strict';
    
     // Inline editor
     var editor = new MediumEditor('.editable');
    
     // Summernote editor
     $('#summernote').summernote({
       height: 150,
       tooltip: false
     })
    });
    </script>


    <script src="{{asset('public/backend/js/starlight.js')}}"></script>
    <script src="{{asset('public/backend/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('public/backend/js/dashboard.js')}}"></script>
   

    <!--data tables -->

    <script src="{{asset('public/backend/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('public/backend/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('public/backend/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{asset('public/backend/lib/select2/js/select2.min.js')}}"></script>



    


    <script>
      $(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            
          }
        });

        $('#datatable2').DataTable({
          bLengthChange: true,
          searching: true,
          responsive: true,
 
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>

    

  

    <script>
        @if(Session::has('message'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
        @endif
     </script>  

     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>




</body>
</html>
