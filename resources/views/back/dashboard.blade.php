
  @extends('back.layouts.master')
  

  <!-- Content Wrapper. Contains page content -->
  @section('content')
  
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-7 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">@lang('pagination.hello')  {{auth()->user()->name}}</h4>
							<br><h4><a style="color:white; font-size:17px;" href="{{route('front.home',session('locale'))}}"> View Site</a></h4>
							<ul class="box-controls pull-right d-md-flex d-none">
							  <li class="dropdown">
								<button class="btn btn-outline btn-primary dropdown-toggle px-10 " data-toggle="dropdown" href="#">Show By Months</button>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item" href=""><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								  <div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body">
							<div id="recent_trend"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-12">
					<div class="box">		
						<div class="box-header bg-primary">
							<h4 class="box-title text-white">Sales Overview</h4>
							<ul class="box-controls pull-right">
							  <li class="dropdown">
								<a data-toggle="dropdown" href="#" class="btn btn-primary-light px-10 base-font">Export</a>
								<div class="dropdown-menu dropdown-menu-right">
								  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
								  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
								  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
								  <div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
								</div>
							  </li>
							</ul>
						</div>
						<div class="box-body px-0 bg-primary rounded-0">	
							<div id="spark1" class="text-dark"></div>
						</div>
						<div class="box-body up-mar60 pb-0">	
							<div class="row">
								<div class="col-6">
									<div class="bg-warning-light px-30 py-40 rounded20 mb-20">
										<span class="icon-Equalizer d-block font-size-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
										<a href="#" class="text-warning font-weight-500 font-size-18">
											<span class="d-xxxl-inline-block d-xl-none d-inline-block">Monthly</span> Review
										</a>
									</div>
								</div>
								<div class="col-6">
									<div class="bg-primary-light px-30 py-40 rounded20 mb-20">
										<span class="icon-Add-user d-block font-size-40"><span class="path1"></span><span class="path2"></span></span>
										<a href="#" class="text-primary font-weight-500 font-size-18">
											<span class="d-xxxl-inline-block d-xl-none d-inline-block">Total</span> Visiter
										</a>
									</div>
								</div>
								<div class="col-6">
									<div class="bg-danger-light px-30 py-40 rounded20 mb-20">
										<span class="icon-Cart2 d-block font-size-40"><span class="path1"></span><span class="path2"></span></span>
										<a href="#" class="text-danger font-weight-500 font-size-18">
											<span class="d-xxxl-inline-block d-xl-none d-inline-block">Product</span> Sale
										</a>
									</div>
								</div>
								<div class="col-6">
									<div class="bg-success-light px-30 py-40 rounded20 mb-20">
										<span class="icon-Mail-opened d-block font-size-40"><span class="path1"></span><span class="path2"></span></span>
										<a href="#" class="text-success font-weight-500 font-size-18">
											Order <span class="d-xxxl-inline-block d-xl-none d-inline-block">Overview</span>
										</a>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>
				
				<div class="col-xl-2 col-12">
					<a href="#" class="box bg-warning-light">
						<div class="box-body">
							<span class="text-warning icon-Equalizer font-size-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
							<div class="text-warning font-weight-600 font-size-18 mb-2 mt-5">Sales Stats</div>
							<div class="text-mute font-size-16">70% Up for '19</div>
						</div>
					</a>
					<a href="#" class="box">
						<div class="box-body">
							<span class="text-primary icon-Cart2 font-size-40"><span class="path1"></span><span class="path2"></span></span>
							<div class="font-weight-600 font-size-18 mb-2 mt-5">Shopping</div>
							<div class="text-fade font-size-16">Duis, Faucibus</div>
						</div>
					</a>
					<a href="#" class="box bg-info bg-hover-info">
						<div class="box-body">
							<span class="text-white icon-Layout-arrange font-size-40"><span class="path1"></span><span class="path2"></span></span>
							<div class="text-white font-weight-600 font-size-18 mb-2 mt-5">Apartamentos</div>
							<div class="text-white font-size-16">Duis, Faucibus</div>
						</div>
					</a>
				</div>
				<div class="col-xl-7 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Trending Items
								<small class="subtitle">400+ new Items in Trending</small>
							</h4>						
						</div>
						<div class="box-body p-0">
							<div class="table-responsive">
								<table class="table no-border mb-5">
									<thead>
										<tr>
											<th class="p-0" style="width: 50px"></th>
											<th class="p-0" style="min-width: 150px"></th>
											<th class="p-0" style="min-width: 160px"></th>
											<th class="p-0" style="min-width: 100px"></th>
											<th class="p-0" style="min-width: 40px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-primary-light">Approved</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Phasellus venenatis</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-warning-light">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Aliquam in magna</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-success-light">Success</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Duis faucibus lorem</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-danger-light">Rejected</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
													  <img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
												</div>
											</td>
											<td>
												<a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Duis faucibus lorem</a>
												<span class="text-fade d-block">Pharetra, Nulla , Nec</span>
											</td>
											<td class="text-right">
												<span class="text-fade">
													Lacus lacinia mollis
												</span>
											</td>
											<td class="text-right">
												<span class="badge badge-warning-light">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right font-size-18"><span class="path1"></span><span class="path2"></span></span></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-12">
					<div class="box">
						<div class="box-body d-flex p-0">
							<div class="flex-grow-1 bg-info px-30 pt-50 pb-80 flex-grow-1 bg-img min-h-300" style="background-position: right bottom; background-size: 45% auto; background-image: url(https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/svg-icon/color-svg/custom-6.svg)">
								<h4 class="font-weight-500 text-white">Start Now</h4>
								<p class="py-15 font-size-16">Offering discounts for <br>online store and earn<br>loyalty Points
								</p>
								<a href="#" class="btn btn-info-light">Join Now</a>
							</div>
						</div>
					</div>
					<a href="#" class="box bg-success bg-hover-success">
						<div class="box-body">
							<span class="text-white icon-Equalizer font-size-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
							<div class="text-white font-weight-600 font-size-18 mb-2 mt-5">Revenue </div>
							<div class="text-white font-size-16">70% Up in '19</div>
						</div>
					</a>
				</div>
				<div class="col-xxl-8 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Profit
							</h4>
						</div>
						<div class="box-body">
							<div id="charts_widget_2_chart"></div>
							<div class="bg-primary p-30 rounded mt-30">
								<div class="d-lg-flex justify-content-between align-items-center">
									<div class="d-flex align-items-center">
										<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
											  <span class="icon-Library font-size-18 text-success"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-white hover-success font-size-16">$800</a>
											<span class="text-white-50">Duis faucibus</span>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
											<span class="icon-Write font-size-18 text-warning"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-white hover-danger font-size-16">$400</a>
											<span class="text-white-50">Sed quis</span>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
											<span class="icon-Group-chat font-size-18 text-primary"><span class="path1"></span><span class="path2"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-white hover-success font-size-16">$900</a>
											<span class="text-white-50">Phasellus</span>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div class="mr-15 bg-white h-40 w-40 l-h-50 rounded text-center">
											<span class="icon-Attachment1 font-size-18 text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
										</div>
										<div class="d-flex flex-column font-weight-500">
											<a href="#" class="text-white hover-info font-size-16">$80</a>
											<span class="text-white-50">Aliquam In</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-4 col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Orders Overview</h4>
							<div class="box-controls pull-right">
								<ul class="nav nav-pills nav-pills-sm" role="tablist">
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0 active" data-toggle="tab" href="#">
											<span class="nav-text base-font">Daily </span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-12">
									<div id="charts_widget_1_chart"></div>
								</div>
								<div class="col-12 d-flex flex-column mt-20">
									<div class="flex-grow-1 bg-danger p-30 flex-grow-1 bg-img"
										style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/svg-icon/color-svg/custom-3.svg)">
										<h4 class="ont-weight-500">User Confidence</h4>
										<p class="my-10">
											Boost marketing & sales<br/>through product confidence.
										</p>
										<a href="#" class="btn btn-warning-light py-2 px-6">Learn</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="box bg-img" style="background-image: url(https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/abstract-1.svg);background-position: right top; background-size: 30% auto;">
						<div class="box-body">
							<a href="#" class="box-title font-weight-600 text-muted hover-primary font-size-18">Travel Schedule</a>
							<div class="font-weight-bold text-success mt-20 mb-10">11:30PM</div>
							<p class="text-mute font-weight-500 font-size-16">
								There is no one who loves pain<br> itself, who seeks after...
							</p>
						</div>
					</div>
				  </div>
				  <div class="col-lg-4 col-12">
					<div class="box bg-img bg-info-light" style="background-image: url(https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/abstract-2.svg);background-position: right top; background-size: 30% auto;">
						<div class="box-body">
							<a href="#" class="box-title font-weight-600 text-muted hover-primary font-size-18">Anuncio</a>
							<div class="font-weight-bold text-success mt-20 mb-10">16 Jan 2019</div>
							<p class="text-mute font-weight-500 font-size-16">
								There is no one who loves pain<br> itself, who seeks after...
							</p>
						</div>
					</div>
				  </div>
				  <div class="col-lg-4 col-12">
					<div class="box bg-img" style="background-image: url(https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/abstract-3.svg);background-position: right top; background-size: 30% auto;">
						<div class="box-body">
							<a href="#" class="box-title font-weight-600 text-muted hover-primary font-size-18">New Release</a>
							<div class="font-weight-bold text-success mt-20 mb-10">HTML</div>
							<p class="text-mute font-weight-500 font-size-16">
								There is no one who loves pain<br> itself, who seeks after...
							</p>
						</div>
					</div>
				  </div>
			</div>
		</section>
		<!-- /.content -->
	  
  <!-- /.content-wrapper -->
  @endsection