
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
								<h2 class="text-primary">ROLES</h2>
								<p class="mb-0"></p>							
							</div>
							<div class="p-40">
							<?php foreach ($errors->all() as $message) {?>
										<p style="color:Red"><?php echo $message?></p>
															<?php }?>

		<div class="row">
			  
			<div class="col-12">
				<div class="box">
					<div class="box-header">						
						<h4 class="box-title">ROLE TABLE</h4>
					</div>
					<div class="box-body">
															<div class="table-responsive">
							<table  id="complex_header" class="table table-striped table-bordered  yajra-datatable" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Role Name</th>
										<th>role_id</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>

							
									
								</tbody>
								
							</table>
							</div>
							</div>

							</div>

							</div>
							</div>

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
  @section('js')
 
 </script>alert("111")</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
 <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
	 
 <script type="text/javascript">
   $(function () {
	 
	 var table = $('.yajra-datatable').DataTable({
		 processing: true,
		 serverSide: true,
		 ajax: "{{ route('roles') }}",
		 columns: [
			 {data: 'DT_RowIndex', name: 'DT_RowIndex'},
			 {data: 'name', name: 'name'},
			 {data: 'id', name: 'id'},
			 {
				 data: 'action', 
				 name: 'action', 
				 orderable: true, 
				 searchable: true
			 },
			 
			 
		 ]
	 });
	 
   });
 </script>
 @endsection