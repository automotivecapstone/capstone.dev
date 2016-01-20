@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS BELOW --}}
	<link href="/css/profile.css" type="text/css" rel="stylesheet">

@stop

@section('content')
	<div>
		<h2>{{{$user->username}}}'s Profile Page</h2>
		<a data-toggle="modal" data-target="#tut_Modal">Create a Tutorial</a>
		

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
		        <a type="button" href = "{{{action('UsersController@changeTutModal', $user->id)}}}"class="btn btn-default">Continue and don't ask me again</a>
		        <a type="button" href = "{{{action('TutorialsController@create')}}}"class="btn btn-primary">Continue</a>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<a data-toggle="modal" data-target="#qa_Modal">Ask a Question</a>
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
		        <a type="button" href = "{{{action('QasController@create')}}}"class="btn btn-default" >Continue and don't ask me again</a>
		        <a type="button" href = "{{{action('QasController@create')}}}"class="btn btn-primary">Continue</a>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<a href="{{{action('UsersController@edit', $user->id)}}}">Edit Profile</a>
	</div>
	
	<div class="container">
	<div class="col-md-12">
	    <h1>Alice in Wonderland, part dos</h1>
	    <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
	    'Yes, we went to school in the sea, though you mayn't believe it—'
	    'I never said I didn't!' interrupted Alice.
	    'You did,' said the Mock Turtle.</p>
	    <div>
	<span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
	<span class="label label-danger">Danger</span></div>         
	     </div>
	    <hr>
	    <h1>Revolution has begun!</h1>
	    <p>'I am bound to Tahiti for more men.'
	        'Very good. Let me board you a moment—I come in peace.' With that he leaped from the canoe, swam to the boat; and climbing the gunwale, stood face to face with the captain.
	        'Cross your arms, sir; throw back your head. Now, repeat after me. As soon as Steelkilt leaves me, I swear to beach this boat on yonder island, and remain there six days. If I do not, may lightning strike me!'A pretty scholar,' laughed the Lakeman. 'Adios, Senor!' and leaping into the sea, he swam back to his comrades.</p>
	    <div>
	        <span class="badge">Posted 2012-08-02 20:47:04</span><div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span> <span class="label label-success">blog</span> <span class="label label-info">personal</span> <span class="label label-warning">Warning</span>
	<span class="label label-danger">Danger</span></div>
	    </div>     
	    <hr>
	</div>
	</div>

	

@stop

@section('top-script')

	{{-- CUSTOM JS BELOW --}}
	<script src="/js/profile.js"></script>
	<script type="text/javascript">

	</script>

@stop

