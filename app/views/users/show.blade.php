@extends('layouts.master')


@section('content')
	<div class='content'>
		<div class = "header">
			<div id = "imageholder">
				<img class = "pull-right"src="{{{$user->image}}}">
			</div>
			<h2>{{{$user->username}}}'s Profile Page</h2>

			<p><a id="tutajaxlistener">Create a Tutorial</a></p>
			<div class="modal fade" id = "tut_Modal" tabindex="-1" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content text-center">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">How to Make a Tutorial</h4>
			      </div>
			      <div class="modal-body">
			        <p>Tutorials are meant to show others how to.</p>
			        <p>Testing out different lines. Test. Test.</p>
			      </div>
			      <div class="modal-footer">
			        <a type="button" id = "tutskipbutton" class="btn btn-default">Continue and don't ask me again</a>
			        <a type="button" href = "{{{action('TutorialsController@create')}}}"class="btn btn-primary">Continue</a>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<p><a id="qaajaxlistener">Ask a Question</a></p>
			<div class="modal fade" id = "qa_Modal" tabindex="-1" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Qa Modal</h4>
			      </div>
			      <div class="modal-body">
			        <p>This is what you need to do to make a Q/A. All the things.</p>
			        <p>Testing out different lines.</p>
			      </div>
			      <div class="modal-footer">
			        <a type="button" id = "qaskipbutton" class="btn btn-default" >Continue and don't ask me again</a>
			        <a type="button" href = "{{{action('QasController@create')}}}"class="btn btn-primary">Continue</a>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<p><a href="{{{action('UsersController@edit', $user->id)}}}">Edit Profile</a></p>

			<p><a id="userajaxlistener" data-toggle="modal" data-target="#usertag_Modal">User Tags</a></p>
			<div class="modal fade" id = "usertag_Modal" tabindex="-1" role="dialog">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">UserTag Modal</h4>
			      </div>
			      <div class="modal-body">

			        {{ Form::model($user, array('action' => array('HomeController@addTagsToUser'), 'method' => 'POST')) }}
					
					
					@foreach($tags as $tag)
						{{ Form::label('usertags[]', $tag->name)}}
						{{ Form::checkbox('usertags[]', $tag->id)}}
					@endforeach 

					{{ Form::label('addtag', "Don't see a tag? Add it here!")}}
					{{ Form::text('addtag', null, array('id' => 'addtag', 'placeholder'=>'Add a Tag!'))}}
			      </div>
			      <div class="modal-footer">
			        <a type="button" id = "" class="btn btn-default" data-dismiss="modal">Close</a>
			        {{ Form::submit('Add tags', array('class'=> 'btn btn-primary'))}}
			        {{ Form::close()}}
			        {{-- <a type="button" href = ""class="btn btn-primary">Save</a> --}}
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<a href="{{{action('UsersController@index')}}}">My Contributions</a>

			

		</div>

		<h1>{{{$user->username}}}'s Content</h1>

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
		</table>

		<table>
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

