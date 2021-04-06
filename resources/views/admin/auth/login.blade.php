@extends('admin.admin_layouts')

@section('admin_content')
      
        <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Ecommerce <span class="tx-info tx-normal">Admin</span></div>
              <div class="tx-center mg-b-60"> Advanced Ecommerce Project</div>
      <form action="" method="post">
          @csrf
              <div class="form-group">
                <div class="form-group icon_parent">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                    <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                 @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
                </div>

                <div class="form-group icon_parent">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                </div>
                <a href="{{route('admin.password.request')}}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
              </div><!-- form-group -->
              <button type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>
              <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div>
            </div><!-- login-wrapper -->
          </div><!-- d-flex -->
      
@endsection
