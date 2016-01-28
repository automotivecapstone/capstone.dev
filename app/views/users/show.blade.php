@extends('layouts.master')

@section('top-script')


@stop


@section('content')

	<h2 class="title">Let's twist this, {{{$user->username}}}!</h2>
	<div class="profile-div">
		<div>
			<div class="row">
				 <div class="col-lg-10 col-lg-offset-1 text-center">
					<img class = "profile-image imageholder" src="{{{$user->image}}}">
					<hr class = "horizontalrule">
                </div>
			</div>


			<div id="portfolio-profile" class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="service-item">
		                <span class="fa-stack fa-4x">
		                <i class="fa fa-circle fa-stack-2x"></i>
		                <i class="fa fa-wrench fa-stack-1x iconcolor"></i></span>

						<p><a id="tutajaxlistener">Create a Tutorial</a></p>
				</div>
					
						<div class="modal fade" id = "tut_Modal" tabindex="-1" role="dialog">
					  		<div class="modal-dialog">
					    		<div class="modal-content text-center">
					      			<div class="modal-header">
					        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        			<h4 class="modal-title">Make Your First Tutorial!</h4>
					      			</div>
					      			<div class="modal-body">
					        			<p>Users will navigate to the tutorials section of Grease Monkey in order to find descriptive solutions to problems they may be having with their automobile.</p>
					        			<p>Tutorials may or may not have a detailed picture and/or how-to video.</p>
					        			<p>As a user you have the option to:</p>
				        				<li>Upload images</li>
				        				<li>Upload videos</li>
				        				<li>Post a title</li>
				        				<li>Post content</li>
				        				<li>Post a description</li>
					        			<p>Other users among Grease Monkey will also have access to view and comment on your tutorial.</p>
				        				<p><strong>Remember:</strong> Grease Monkey is a friendly environment intended for automotive solutions, so please keep all posts relevant to automotive and automotive accessories.</p>
					        			<p>Happy posting!</p>
					      			</div>
					      			<div class="modal-footer">
					        			<a type="button" id = "tutskipbutton" class="btn btn-default">Continue and don't ask me again</a>
					        			<a type="button" href = "{{{action('TutorialsController@create')}}}"class="btn btn-primary">Continue</a>
					      			</div>
					    		</div><!-- /.modal-content -->
					  		</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					</div>
			
				<div class="col-md-4 col-sm-4 text-center">
					<div class="service-item">
	                	<span class="fa-stack fa-4x">
	                	<i class="fa fa-circle fa-stack-2x"></i>
	                	<i class="fa fa-wrench fa-stack-1x iconcolor"></i></span>
					
						<p><a id="qaajaxlistener">Ask a Question</a></p>
						<div class="modal fade" id = "qa_Modal" tabindex="-1" role="dialog">
				  			<div class="modal-dialog">
				    			<div class="modal-content">
				      				<div class="modal-header">
				        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        				<h4 class="modal-title">Ask and You Shall Receive!</h4>
				      				</div>
					      			<div class="modal-body">
					        			<p>Users will navigate to the Q & A section of Grease Monkey in order to ask and answer questions related to automobiles.</p>
					        			<p>Questions may or may not have a detailed picture and/or how-to video.</p>
					        			<p>As a user you have the option to:</p>
				        				<li>Upload images</li>
				        				<li>Upload videos</li>
				        				<li>Post a question</li>
				        				<li>Post content</li>
					        			<p>Other users among Grease Monkey will also have access to view and answer your question.</p>
					        			<p><strong>Remember:</strong> Grease Monkey is a friendly environment intended for automotive solutions, so please keep all posts relevant to automotive and automotive accessories.</p>
					        			<p>Happy posting!</p>
					      			</div>
					      			<div class="modal-footer">
					        			<a type="button" id = "qaskipbutton" class="btn btn-default" >Continue and don't ask me again</a>
					        			<a type="button" href = "{{{action('QasController@create')}}}"class="btn btn-primary">Continue</a>
					      			</div>
				    			</div><!-- /.modal-content -->
				  			</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					</div>
				</div>

				<div class="col-md-4 col-sm-4 text-center">
					<div class="service-item">
	                	<span class="fa-stack fa-4x">
	                	<i class="fa fa-circle fa-stack-2x"></i>
	                	<i class="fa fa-wrench fa-stack-1x iconcolor"></i></span>
				
						<p><a href="{{{ action('UsersController@edit', $user->id) }}}">Edit Profile</a></p>

			      				</div>
			    			</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>


	<div class="content content-div">
		<h1 class="title">{{{$user->username}}}'s Content</h1>

		<table>
			@foreach($user->tutorials()->get() as $tutorial)
				<tr>
					<td><a href="{{{action('TutorialsController@show', $tutorial->id)}}}">{{{$tutorial->title}}}</a></td>

					@if(Auth::id()== $user->id)
					<td><button class = "btn btn-warning btn-small">Edit</button></td>
					<td><button class = "btn btn-danger btn-small">Delete</button></td>
					@endif
				</tr>
			@endforeach
	
			@foreach($user->qas()->get() as $qa)
				<tr>
					<td><a href="{{{action('QasController@show', $qa->id)}}}">{{{$qa->question}}}</a></td>
					@if(Auth::id()==$user->id)
					<td><button class = "btn btn-warning btn-small">Edit</button></td>
					<td><button class = "btn btn-danger btn-small">Delete</button></td>
					@endif
				</tr>
			@endforeach
		</table>
	</div>


	

@stop

@section('bottom-script')

	{{-- CUSTOM JS BELOW --}}
	<script src="/js/profile.js"></script>
	<script src="/js/jquery-ui.js"></script>

	<script type="text/javascript">
		$("#tutajaxlistener").click(function(e){
			var request = $.ajax("/tutcheck/{{{Auth::id()}}}");

			request.fail(function(data){
				console.log("Good Try. Try again");
			});

			request.done(function(data){
				if(data.check == 1){
					$('#tut_Modal').modal('show');
				} else {
					window.location.href = "/tutorials/create";
				}
			});
		});

		$("#tutskipbutton").click(function(e){
			var request = $.ajax("/tutupdate/{{{Auth::id()}}}");

			request.fail(function(data){
				console.log("Good Try. Try again");
			});

			request.done(function(data){
				if(data.save == true){
					window.location.href = "/tutorials/create";
				}
			});
		});

		$("#qaajaxlistener").click(function(e){
			var request = $.ajax("/qacheck/{{{Auth::id()}}}");

			request.fail(function(data){
				console.log("Good Try. Try again");
			})

			request.done(function(data){
				if(data.check == 1){
					$('#qa_Modal').modal('show');
				} else {
					window.location.href = "/qas/create";
				}
			})
		});

		$("#qaskipbutton").click(function(e){
			var request = $.ajax("/qaupdate/{{{Auth::id()}}}");

			request.fail(function(data){
				console.log("Good Try. Try again");
			});

			request.done(function(data){
				if(data.save == true){
					window.location.href = "/qas/create";
				}
			});
		});

		$('#addtag').autocomplete({
			source: jQuery.parseJSON("{{{action('TagsController@index')}}}"),
			minLength: 2,
			select: function(e, ui){
				console.log(ui);
				$('#addtag').val(ui.item.value);
			}
		});
	</script>

@stop

