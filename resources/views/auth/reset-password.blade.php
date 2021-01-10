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
							
							<div class="p-40">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="form-group">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                                </div>

                                <div class="form-group">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="form-group">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                <div style="text-align:center" class="flex items-center justify-center mt-4">
                                    <button class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
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
