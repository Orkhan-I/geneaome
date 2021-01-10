
  @extends('back.layouts.master')
  

  <!-- Content Wrapper. Contains Slider content -->
  @section('content')
  <div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="Slider-title">Data Tables</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="Slider">Tables</li>
								<li class="breadcrumb-item active" aria-current="Slider">Data Tables</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>
		  <div class="row">
			  
			<div class="col-12">
				<div class="box">
					<div class="box-header">
											
						<h4 class="box-title">Complex headers (rowspan and colspan)</h4><br><br>
						@role('admin')
						<a href="{{route('createSlider')}}" class="btn btn-success">
						<i class="fad fa-tags"></i><span class="path1"></span><span class="path2"></span></i>
							<span>Create Slider</span>
						</a>

						
      				  @endrole
					
					</div>
					<div class="box-body">
						<div class="table-responsive">
							<table  class="table table-striped table-bordered  yajra-datatable " style="width:100%">
								<thead>
									
								<tr>
										<th rowspan="2">no</th>
										<th style="text-align:center" colspan="4">Title</th>
									</tr>
									<tr>
										<th>Az</th>
										<th>Tr</th>
										<th>En</th>
										<th>Ru</th>
										<th>id</th>
										<th>image</th>
										<th>description</th>
										<th>action</th>
									</tr>
										
										
									
								</thead>
							
								
							</table>
							
						</div>
					</div>
				</div>
			</div>
</div>


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
        ajax: "{{ route('slider') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
			{
                data: 'az', 
                name: 'az', 
                orderable: true, 
                searchable: true
            },
			{
                data: 'tr', 
                name: 'tr', 
                orderable: true, 
                searchable: true
            },
			{
                data: 'en', 
                name: 'en', 
                orderable: true, 
                searchable: true
            },
			{
                data: 'ru', 
                name: 'ru', 
                orderable: true, 
                searchable: true
            },

            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
			{data: 'description', name: 'description'},
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