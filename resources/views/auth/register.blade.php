@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/contact_responsive.css')}}">

@section('content')


@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

        <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                    <!-- page content -->
                    <div class="login_page center_container">
                        <div class="center_content">
                        <div class="contact_form">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_form_container">
						<div class="contact_form_title">Register</div>

						<form method="POST" action="{{route('register')}}" id="contact_form">
							@csrf   
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input type="text" id="contact_form_name" name="email" class="contact_form_name input_field" placeholder="Your email" required="required" data-error="email is required.">
							</div>
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
								<input type="text" id="contact_form_name" name="name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="email is required.">
                            </div>


                            
							<div class="contact_form_text">
                                <input type="password" id="contact_form_name" class="contact_form_name input_field" placeholder="password" required="required" data-error="password is required." name="password">

                            </div> 

                            <div class="contact_form_text">
                                <input type="password" id="contact_form_name" class="contact_form_name input_field" placeholder="password" required="required" data-error="password is required." name="password_confirmation">

                            </div> 
							<div class="contact_form_button">
								<button type="submit" class="button contact_submit_button">Register</button>
                                
                            
                            
                            </div>
						</form>
                            
                        </div>
                    </div>

                    </div><!--/ content wrapper -->
       		
                </div><!--/ wrapper -->
@endsection
