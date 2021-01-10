
  @extends('back.layouts.master')
  
  @section("css")
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
    </style>


  @endsection
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
															@if(Session::has('success'))
																<div class="alert alert-success">
																	{{Session::get('success')}}
																</div>
															@endif
								<form action="{{route('editArticlePost',[$article->id])}}" method="post" enctype="multipart/form-data">
									@csrf
									<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
									@foreach ($locales as $locale)
										<li class="nav-item">
											<a class="nav-link {{ ($locale->code == 'az') ? 'active': '' }}" id="pills-tab-{{ $locale->code }}"
											data-toggle="pill" href="#pills-{{ $locale->code }}" role="tab"
											aria-controls="pills-{{ $locale->code }}" aria-selected="true">{{ $locale->name }}</a>
										</li>
									@endforeach
									</ul>
									
									<div class="tab-content pt-2 pl-1" id="pills-tabContent">
									@foreach($locales as $locale)
									<div class="tab-pane fade show {{ ($locale->code == 'az') ? 'active': '' }}" id="pills-{{ $locale->code }}"
                                 role="tabpanel" aria-labelledby="pills-tab-{{ $locale->code }}">
									<div class="form-group">
										<div class="input-group mb-3 ">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-tag"></i></span>
											</div>
											<input id="name"  value="{{$article->setLocale($locale->code)->title}}" required name="title[{{$locale->code}}]" type="" class="form-control pl-15 bg-transparent" placeholder="{{$locale->name}}">
										</div>
										<div class="input-group mb-3 ">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-tag"></i></span>
											</div>
											<textarea rows="6" id="name"  value="" required name="description[{{$locale->code}}]" type="" class="form-control pl-15 bg-transparent" placeholder="{{$locale->name}}">{{$article->setLocale($locale->code)->description}}</textarea>
										</div>
										</div>
										</div>
										@endforeach
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input   value="{{$article->author}}" required name="author" type="" class="form-control pl-15 bg-transparent" placeholder="Author name">
													
											</div>
									</div>

									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<select value="" class="form-control pl-15 bg-transparent" name="category_id" id="" value="">
											@foreach($categories as $category)
												<option class="form-control pl-15 bg-transparent" value="{{$category->id}}" {{($category->id == $article->category_id) ? 'selected': '' }} >{{$category->name}}</option>
											@endforeach
											</select>
													
											</div>
									</div>

									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<select value="" class="form-control pl-15 bg-transparent" name="status" id="" value="">
												<option class="form-control pl-15 bg-transparent" value="active" {{($article->status == 'active') ? 'selected': '' }} >active</option>
												<option class="form-control pl-15 bg-transparent"  value="inactive" {{ ($article->status == 'inactive') ? 'selected': '' }} >inactive</option>
											</select>
													
											</div>
									</div>

									<div class="form-group">
										<div class="file-loading">
											<input class="form-control pl-15 bg-transparent" value="" id="file-1" type="file" name="image" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
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
										  <button type="submit" class="btn btn-info margin-top-10">Update</button>
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
  @section("js")
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        $("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize:2000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    </script>
@endsection	