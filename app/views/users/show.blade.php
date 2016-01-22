@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS BELOW --}}
	<link href="/css/profile.css" type="text/css" rel="stylesheet">

@stop

@section('content')
	<div>
		<h2>{{{$user->username}}}'s Profile Page</h2>

		<a id="tutajaxlistener">Create a Tutorial</a>
		<div class="modal fade" id = "tut_Modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Tutorial Modal</h4>
		      </div>
		      <div class="modal-body">
		        <p>This is what you need to do to make a tutorial. All the things.</p>
		        <p>Testing out different lines. Test. Test.</p>
		      </div>
		      <div class="modal-footer">
		        <a type="button" id = "tutskipbutton" class="btn btn-default">Continue and don't ask me again</a>
		        <a type="button" href = "{{{action('TutorialsController@create')}}}"class="btn btn-primary">Continue</a>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<a id="qaajaxlistener">Ask a Question</a>
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

		<a href="{{{action('UsersController@edit', $user->id)}}}">Edit Profile</a>

		<a id="userajaxlistener" data-toggle="modal" data-target="#usertag_Modal">User Tags</a>
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

				{{ Form::submit('Add tags')}}
				{{ Form::close()}}
		      </div>
		      <div class="modal-footer">
		        <a type="button" id = "" class="btn btn-default" data-dismiss="modal">Close</a>
		        <a type="button" href = ""class="btn btn-primary">Save</a>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

	</div>




	<div class="container">
	<div class="col-md-12">
		<h1>Tutorials</h1>
		<ul>
		@foreach ($user->tags()->get() as $tag)
			@foreach($tag->tutorials()->get() as $tutorial)
				<li><a href="{{{action('TutorialsController@show', $tutorial->id)}}}">{{$tutorial->title}}</a></li>
			@endforeach
		@endforeach
		</ul>
	    {{-- <h1>Alice in Wonderland, part dos</h1> --}}
	    {{-- <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
	    'Yes, we went to school in the sea, though you mayn't believe it—'
	    'I never said I didn't!' interrupted Alice.
	    'You did,' said the Mock Turtle.</p> --}}
	    <div>
	<span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
	<span class="label label-danger">Danger</span></div>         
	     </div>
	    <hr>
	    <h1>Q/As</h1>
	    <ul>
		@foreach ($user->tags()->get() as $tag)
			@foreach($tag->qas()->get() as $qa)
				<li><a href="{{{action('QasController@show', $qa->id)}}}">{{$qa->question}}</a></li>
			@endforeach
		@endforeach
		</ul>
	        <span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
	<span class="label label-danger">Danger</span></div>
	    </div>     
	    <hr>
	</div>
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

