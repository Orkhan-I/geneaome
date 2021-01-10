
  @extends('back.layouts.master')
  

  <!-- Content Wrapper. Contains page content -->
  @section('content')
  
		<!-- Main content -->
		<section class="content">

		<body class="hold-transition theme-primary bg-img" style="background-image: url(https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/auth-bg/bg-2.jpg)">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-10 col-md-10 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Get started with Us</h2>
								<p class="mb-0">Register a new membership</p>							
							</div>
							<div class="p-40">
							<?php foreach ($errors->all() as $message) {?>
										<p style="color:Red"><?php echo $message?></p>
															<?php }?>
								<form action="{{route('editRoles',[$role_id->id])}}" method="post" enctype="multipart/form-data">
									@csrf
									
							
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<select value="{{$users[1]->name}}" class="form-control pl-15 bg-transparent" name="user_id" id="">
													@foreach($users as $user)
													<option  value="{{$user->id}}">{{$user->name}}</option>
													@endforeach
									  		</select>
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
										  <button type="submit" class="btn btn-info margin-top-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
									  
								</form>				
								<div class="text-center">
									<p class="mt-15 mb-0">Already have an account?<a href="auth_login.html" class="text-danger ml-5"> Sign In</a></p>
									
								</div>
							</div>
						</div>								

						<div class="text-center">
						  <p class="mt-20 text-white">- Register With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>	
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>



	
</body>
		</section>
		<!-- /.content -->
	  
  <!-- /.content-wrapper -->
  @endsection