<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/powerbi-admin-template/html/main-dark/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 11:53:37 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/favicon.ico">

    <title>{{settings()->get('app_name')}}</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('back/')}}/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('back/')}}/css/style.css">
	<link rel="stylesheet" href="{{asset('back/')}}/css/skin_color.css">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url(https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/auth-bg/bg-1.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Welcome</h2>
								<p class="mb-0">Sign in to continue to Next Blog</p>							
							</div>
							<div class="p-40">
								@if (session('status'))
									<div class="mb-4 font-medium text-sm text-green-600">
										{{ session('status') }}
									</div>
								@endif
								<div style="text-align:center;">
                           			 <x-jet-validation-errors style="margin-top:30px; color:red;list-style-type:none" class="mb-4" />							
                         	   </div>
								<form method="POST" action="{{ route('login') }}">
									@csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input id="email" name="email" type="email" value="{{old('email')}}" class="form-control pl-15 bg-transparent" required autofocus>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input id="password" type="password" class="form-control pl-15 bg-transparent" name="password" required autocomplete="current-password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" name="remember" >
											<label for="remember">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-right">
                                         @if (Route::has('password.request'))
											<a href="{{ route('password.request') }}" class="hover-warning"><i class="ion ion-locked"></i> {{ __('Forgot your password?') }}</a><br>
                                            @endif  
                                        </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-success mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="{{route('register')}}" class="text-warning ml-5">Sign Up</a></p>
								</div>	
							</div>						
						</div>
						<div class="text-center">
						  <!-- <p class="mt-20 text-white">- Sign With -</p> -->
						  <!-- <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="{{settings()->get('facebook')}}"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="{{settings()->get('twitter')}}"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="{{settings()->get('linkedin')}}"><i class="fa fa-instagram"></i></a>
							</p>	 -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('back/')}}/js/vendors.min.js"></script>
    <script src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/assets/icons/feather-icons/feather.min.js"></script>	

</body>

<!-- Mirrored from www.multipurposethemes.com/admin/powerbi-admin-template/html/main-dark/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 11:53:37 GMT -->
</html>
