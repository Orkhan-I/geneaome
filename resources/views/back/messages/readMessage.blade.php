<div class="mailbox-read-info">
						<h4>Your message title goes here</h4>
					  </div>
					  
						<div class="mailbox-read-info clearfix mb-20">
						<div class="float-left mr-10"><a href="#"><img src="/{{$messaj->author_image}}" alt="user" width="40" class="rounded-circle"></a></div>
						<h5 class="no-margin"> {{$messaj->name}}<br>
							 <small>From: {{$messaj->email}}</small>
						  <span class="mailbox-read-time pull-right">{{date('d M. Y H:i',strtotime($messaj->created_at))}}</span></h5>
					  </div>
					  
					  <!-- /.mailbox-read-info -->
					  <div class="mailbox-controls with-border clearfix">                
						<div class="float-left">
						  <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Print">
						  <i class="fa fa-print"></i></button>
						</div>
						<div class="float-right">
						<div class="btn-group">
						  <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
							<i class="fa fa-trash-o"></i></button>
						  <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
							<i class="fa fa-reply"></i></button>
						  <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
							<i class="fa fa-share"></i></button>
						</div>
						</div>
						<!-- /.btn-group -->

					  </div>
					  <!-- /.mailbox-controls -->
					  <div class="mailbox-read-message read-mail-bx">
						<p>Dear USer,</p>
					
						<p>{{$messaj->message}}</p>


						<p>Thanks,<br>Jane</p>
					  </div>