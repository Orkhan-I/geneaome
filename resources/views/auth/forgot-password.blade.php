<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/powerbi-admin-template/html/main-dark/auth_user_pass.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 11:53:37 GMT -->
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

<body class="hold-transition theme-primary bg-img" style="background-image: url(https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">						
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h3 class="mb-0 text-primary">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</h3>								
							</div>
							@if (session('status'))
							<div style="text-align:center; margin-top:20px; color:green" class="mb-2  font-medium text-sm text-green-600">
								{{ session('status') }}
							</div>
						@endif
							<div class="p-40">
								<form method="POST" action="{{ route('password.email') }}">
									@csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											</div>
											<input type="email" id="email" class="form-control pl-15 bg-transparent" placeholder="Your Email" name="email" value="{{old('email')}}" required autofocus>
										</div>
									</div>
									  <div class="row">
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info margin-top-10">Reset</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
							</div>
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

<!-- Mirrored from www.multipurposethemes.com/admin/powerbi-admin-template/html/main-dark/auth_user_pass.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 11:53:37 GMT -->
</html>
