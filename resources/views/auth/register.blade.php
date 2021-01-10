<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/powerbi-admin-template/html/main-dark/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 11:53:37 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/favicon.ico">

    <title>{{settings()->get('app_name')}} </title>
  
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
								<h2 class="text-primary">Welcome</h2>
                                <p class="mb-0">Register a new membership</p>
                            </div>
                            <div style="text-align:center;">
                            <x-jet-validation-errors style="margin-top:30px; color:red;list-style-type:none" class="mb-4" />							

                            </div>

							<div class="p-40">
                                <form method="POST" action="{{ route('register') }}">
                                @csrf
                                	<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input id="name" type="text" class="form-control pl-15 bg-transparent" placeholder="name" name="name" value="{{old('name')}}" required autofocus autocomplete="name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
											</div>
											<input id="email" type="email" class="form-control pl-15 bg-transparent" placeholder="Email" name="email" :value="old('email')" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" id="password" class="form-control pl-15 bg-transparent" name="password" placeholder="password" required autocomplete="new-password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" id="password_confirmation" class="form-control pl-15 bg-transparent" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
										</div>
									</div>
									  <div class="row">
										<div class="col-12">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">I agree to the <a href="#" class="text-warning"><b>Terms</b></a></label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-info margin-top-10">Register</button>
										</div>
										<!-- /.col -->
                                      </div>
                                      
								</form>				
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="{{route('login')}}" class="text-danger ml-5"> Sign In</a></p>
								</div>
							</div>
						</div>								

						<div class="text-center">
						  <!-- <p class="mt-20 text-white">- Register With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
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

<!-- Mirrored from www.multipurposethemes.com/admin/powerbi-admin-template/html/main-dark/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 11:53:37 GMT -->
</html>