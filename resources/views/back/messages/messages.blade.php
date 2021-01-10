@extends('back.layouts.master')

@section('content')

		<!-- Main content -->
		<section  class="content">
			<div class="row">
				<div class="col-xl-2 col-lg-4 col-12">
				  <button class="btn btn-danger btn-block mb-30" type="button" alt="default" data-toggle="modal" data-target=".bs-example-modal-lg">Compose</button>

				  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="myLargeModalLabel">Compose New Message</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<input class="form-control" placeholder="To:">
								  </div>
								  <div class="form-group">
									<input class="form-control" placeholder="Subject:">
								  </div>
								  <div class="form-group">
										<textarea id="compose-textarea" class="form-control" style="height: 300px">
										  <p>Your Message Here....</p>
										</textarea>
								  </div>
								  <div class="form-group">
									<div class="btn btn-info btn-file">
									  <i class="fa fa-paperclip"></i> Attachment
									  <input type="file" name="attachment">
									</div>
									<p class="help-block">Max. 32MB</p>
								  </div>
							</div>
							<div class="modal-footer">
								<div class="pull-right">
									<button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
									<button type="submit" class="btn btn-success"><i class="fa fa-envelope-o"></i> Send</button>
								</div>
								<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Discard</button>
								<button type="button" class="btn btn-danger text-left" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->

				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Folders</h4>
					  <ul class="box-controls pull-right">
						<li><a class="box-btn-slide" href="#"></a></li>	
					  </ul>
					</div>
					<div class="box-body no-padding mailbox-nav">
					  <ul class="nav nav-pills flex-column">
						<li id="hit" class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i class="ion ion-ios-email-outline"></i> Inbox
						@if($count!=0)
							<span  class="label label-success pull-right">{{$count}}</span></a></li>
						@endif
						<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-paper-airplane"></i> Sent</a></li>
						<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Drafts</a></li>
						<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-star"></i>  Starred <span class="label label-warning pull-right">14</span></a>
						</li>
						<li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-trash-a"></i> Trash</a></li>
					  </ul>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /. box -->
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Labels</h4>
					  <ul class="box-controls pull-right">
						<li><a class="box-btn-slide" href="#"></a></li>	
					  </ul>
					</div>
					<div class="box-body no-padding mailbox-nav">
					  <ul class="nav nav-pills flex-column">
						<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
						<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-warning"></i> Promotions</a></li>
						<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-info"></i> Social</a></li>
					  </ul>
					</div>
					<!-- /.box-body -->
				  </div>
				  <!-- /.box -->
					
					<div class="contact-bx">
						<div class="media-list media-list-hover">
							<div class="media py-10 px-0 align-items-center">
							  <a class="avatar avatar-lg status-success" href="#">
								<img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/1.jpg" alt="...">
							  </a>
							  <div class="media-body">
								<p class="font-size-16">
								  <a href="#">Sarah Kortney</a>
								</p>
							  </div>
							</div>

							<div class="media py-10 px-0 align-items-center">
							  <a class="avatar avatar-lg status-danger" href="#">
								<img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/2.jpg" alt="...">
							  </a>
							  <div class="media-body">
								<p class="font-size-16">
								  <a href="#">Tommy Nash</a>
								</p>
							  </div>
							</div>

							<div class="media py-10 px-0 align-items-center">
							  <a class="avatar avatar-lg status-warning" href="#">
								<img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/3.jpg" alt="...">
							  </a>
							  <div class="media-body">
								<p class="font-size-16">
								  <a href="#">Kathryn Mengel</a>
								</p>
							  </div>
							</div>

							<div class="media py-10 px-0 align-items-center">
							  <a class="avatar avatar-lg status-primary" href="#">
								<img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/4.jpg" alt="...">
							  </a>
							  <div class="media-body">
								<p class="font-size-16">
								  <a href="#">Mayra Sibley</a>
								</p>
							  </div>
							</div>			

							<div class="media py-10 px-0 align-items-center">
							  <a class="avatar avatar-lg status-success" href="#">
								<img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/1.jpg" alt="...">
							  </a>
							  <div class="media-body">
								<p class="font-size-16">
								  <a href="#">Tommy Nash</a>
								</p>
							  </div>
							</div>

							<div class="media py-10 px-0 align-items-center">
							  <a class="avatar avatar-lg status-danger" href="#">
								<img src="https://www.multipurposethemes.com/admin/powerbi-admin-template/html/images/avatar/2.jpg" alt="...">
							  </a>
							  <div class="media-body">
								<p class="font-size-16">
								  <a href="#">Williemae Lagasse</a>
								</p>
							  </div>
							</div>
						  </div>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xl-6 col-lg-8 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Inbox</h4>
						<div class="box-controls pull-right">
						<div class="box-header-actions">
						  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
							<input type="text" name="s" placeholder="Search">
						  </div>
						</div>
					  </div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					  <div class="mailbox-controls">
						<!-- Check all button -->
						<button type="button" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
						</button>
						<div class="btn-group">
						  <button id="deleteMessage" type="submit" class="btn btn-primary btn-sm"><i class="ion ion-trash-a"></i></button>
						  <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-reply"></i></button>
						  <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-share"></i></button>
						</div>
						<!-- /.btn-group -->
						<div class="btn-group">
						  <div class="btn-group">
							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							  <i class="ion ion-flag margin-r-5"></i>
							  <span class="caret"></span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						  </div>
						  <div class="btn-group">
							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							  <i class="ion ion-folder margin-r-5"></i>
							  <span class="caret"></span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						  </div>
						</div>
						<!-- /.btn-group -->
						<button onClick="window.location.reload()" type="button" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button>
						<div class="pull-right">
						  <div class="btn-group">
							<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-left"></i></button>
							<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-right"></i></button>
						  </div>
						  <!-- /.btn-group -->
						</div>
						<!-- /.pull-right -->
					  </div>
					  <div class="mailbox-messages inbox-bx">
					  <div style="display:none" id="alert" class="alert alert-danger"></div>
						  <div class="table-responsive">
							<table class="table table-hover table-striped">
							  <tbody >
                                @foreach ($messages as $message)   
                                    <tr>
                                        <td>
                                            <input style="left:15px; opacity:1" type="checkbox" name="name[]" value="{{$message->id}}" >
										<br> 
									    </td>
                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                        <td>
                                            <p class="mailbox-name mb-0 font-size-16 font-weight-600">{{$message->name}}</p>
											<button type="submit"   name='id' value="{{$message->id}}" style="float:right" class="btn btn-success btn-submit">Read</button>
											<a  class="mailbox-subject"><b>Messsage</b> - {{\Illuminate\Support\str::limit($message->message,20,'...')}}</a>
                                        </td>
                                        <td class="mailbox-attachment"></td>
                                        <td class="mailbox-date">{{date('H:i',strtotime($message->created_at))}}</td>
                                    </tr>
                                @endforeach
							  </tbody>
							</table>
						  </div>                
						<!-- /.table -->
					  </div>
					  <!-- /.mail-box-messages -->
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					  <div class="mailbox-controls">
						<!-- Check all button -->
						<button type="button" class="btn btn-primary btn-sm checkbox-toggle"><i class="ion ion-android-checkbox-outline-blank"></i>
						</button>
						<div class="btn-group">
						  <button  type="button" class="btn btn-primary btn-sm"><i class="ion ion-trash-a"></i></button>
						  <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-reply"></i></button>
						  <button type="button" class="btn btn-primary btn-sm"><i class="ion ion-share"></i></button>
						</div>
						<!-- /.btn-group -->
						<div class="btn-group">
						  <div class="btn-group">
							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							  <i class="ion ion-flag margin-r-5"></i>
							  <span class="caret"></span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						  </div>
						  <div class="btn-group">
							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							  <i class="ion ion-folder margin-r-5"></i>
							  <span class="caret"></span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						  </div>
						</div>
						<!-- /.btn-group -->
						<button onClick="window.location.reload()"  class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></button>
						<div class="pull-right">
						  <div class="btn-group">
							<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-left"></i></button>
							<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-chevron-right"></i></button>
						  </div>
						  <!-- /.btn-group -->
						</div>
						<!-- /.pull-right -->
					  </div>
					</div>
				  </div>
				  <!-- /. box -->
				</div>
				<!-- /.col -->
				<div class="col-xl-4 col-12">
				  <div class="box">
				 

					<div  class="box-body pt-10">
					  <div id="showPosts">
					  
					  </div>
					
					  <!-- /.mailbox-read-message -->
					</div>
				
					<!-- /.box-body -->
					<div class="box-footer">
						<h5><i class="fa fa-paperclip m-r-10 m-b-10"></i> Attachments <span>(3)</span></h5>
					  <ul class="mailbox-attachments clearfix">
						<li>
						  <div class="mailbox-attachment-info">
							<a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Mag.pdf</a>
								<span class="mailbox-attachment-size">
								  5,215 KB
								  <a href="#" class="btn btn-primary btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
								</span>
						  </div>
						</li>
						<li>
						  <div class="mailbox-attachment-info">
							<a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Documents.docx</a>
								<span class="mailbox-attachment-size">
								  2,145 KB
								  <a href="#" class="btn btn-primary btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
								</span>
						  </div>
						</li>
					  </ul>
					</div>
					<!-- /.box-footer -->
					<div class="box-footer">
					  <div class="pull-right">
						<button type="button" class="btn btn-success"><i class="fa fa-reply"></i> Reply</button>
						<button type="button" class="btn btn-info"><i class="fa fa-share"></i> Forward</button>
					  </div>
					  <button id="deleteMessage" type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
					  <button type="button" class="btn btn-warning"><i class="fa fa-print"></i></button>
					</div>
					<!-- /.box-footer -->
				  </div>
				  <!-- /. box -->
				</div>
				<!-- /.col -->
			  </div>
		</section>
		<!-- /.content -->
	  
@endsection
@section('jss')
<script type="text/javascript">
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $(".btn-submit").click(function(e){
  
        e.preventDefault();

		// var voyageId = new Array(); 
		// 	$("input[name='name[]']:checked:enabled").each(function () {
		// 	voyageId.push($(this).val());
		// 	});
		var msg = $(this).val();
        $.ajax({
           type:'GET',
           url:"{{ route('showMessage')}}",
		   data:{msg},
           success:function(data){
			   console.log(data.success);
			$("#showPosts").html(data.success);
			$( "#hit" ).load(window.location.href + " #hit" );
           }
        });
  
    });

	  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    $("#deleteMessage").click(function(e){
  
        e.preventDefault();

		var voyageId = new Array(); 
			$("input[name='name[]']:checked:enabled").each(function () {
			voyageId.push($(this).val());
			});
		
        $.ajax({
           type:'GET',
           url:"{{ route('deleteMessage')}}",
		   data:{voyageId},
           success:function(data){
			   $( ".table-striped" ).load(window.location.href + " .table-striped" );
			   $('#alert').css('display','block').html(data.success).fadeOut(1000);
           }
        });
  
    });
</script>

@endsection