@extends('layouts.master')

@section('top-script')

	<style type="text/css">

		.title-qas-tuts {
			padding-top: 0px;
		}

		.vote-container {
			padding-top: 15px;
		}

		.fa-thumbs-up {
			padding-right: 10px;
			padding-left: 10px;
		}

		.fa-thumbs-down {
			padding-right: 10px;
		}

		.text-success {
			font-size: 20px;
			font-weight: bolder;
		}

		.text-danger {
			font-size: 20px;
			font-weight: bolder;
		}

	</style>

@stop

@section('content')

<div class = 'content content-div'>

	@if(Auth::user()== $qa->user)
	{{ Form::open(array('action' => array('QasController@destroy', $qa->id, 'files' => true), 'method' => 'DELETE')) }}
	
	{{ Form::close() }}
	@endif

	<div class="vote-container">

		<span class="text-success">{{ $qa->voteTotal('upVote') }}</span>

		@if(Auth::check())

			<a href="{{{ action('QasController@vote', [$qa->id, 'vote' => '1']) }}}" class="fa fa-thumbs-up fa-2x"></a>
			<a href="{{{ action('QasController@vote', [$qa->id, 'vote' => '-1']) }}}" class="fa fa-thumbs-down fa-2x"></a>
		
		@endif

		@if(!Auth::check())

			<a href="{{{ action('HomeController@getLogin') }}}" class="fa fa-thumbs-up fa-2x"></a>
			<a href="{{{ action('HomeController@getLogin') }}}" class="fa fa-thumbs-down fa-2x"></a>

		@endif

		<span class="text-danger">{{ $qa->voteTotal('downVote') }}</span>

	</div>

	<h3 class="title-qas-tuts">{{$converter->convertToHtml($qa->question)}}</h3>

	<div class="row">
		@if (isset($qa->image))
			<img src="{{{ $qa->image }}}" class="col-xs-8 qa-image">
		@endif

		@if (isset($qa->video))
			<!-- HTML5 video tag -->
			<video controls="controls" poster="img/demo.jpg" width="640" height="360" class="col-md-8 qa-image">
		 		{{-- *******Do we need something like this to control/adjust the sizes of files users may upload? ******* --}}
				{{-- .mp4 file for native playback in IE9+, Firefox, Chrome, Safari and most mobile browsers --}}
				<source src="{{{ $qa->video }}}" type="video/mp4" />
				<source src="{{{ $qa->video }}}" type="video/ogg" />
				<source src="{{{ $qa->video }}}" type="video/webm" />
				<source src="{{{ $qa->video }}}" type="video/m4v" />
				<!-- flash fallback for IE6, IE7, IE8 and Opera -->
				<object type="application/x-shockwave-flash" data="swf/flowplayer-3.2.18.swf" width="640" height="360">
					<param name="movie" value="swf/flowplayer-3.2.18.swf" />
					<param name="allowFullScreen" value="true" />
					<param name="wmode" value="transparent" />
					<!-- note the encoded path to the image and video files, relative to the .swf! -->
					<!-- more on that here: http://en.wikipedia.org/wiki/Percent-encoding -->
					<param name="flashVars" value="config={'playlist':['..%2Fimg%2Fdemo.jpg',{'url':'{{{ $qa->video }}}','autoPlay':false}]}" />
					<!-- fallback image if flash fails -->
					<img src="img/demo.jpg" width="640" height="360" title="No Flash found" />
				</object>
			</video>
		@endif
	</div>
</div>

	<blockquote>
		<p>{{$converter->convertToHtml($qa->content)}}</p>
		<footer>Created by {{{ $qa->user->username }}}, {{{$qa->created_at->diffForHumans() }}}</footer>

		@if(Auth::user()== $qa->user)
		{{ Form::open(array('action' => array('QasController@destroy', $qa->id, 'files' => true), 'method' => 'DELETE')) }}
			
			<a href="{{{ action('QasController@edit', $qa->id) }}}" class="gm-button">Edit Question</a>

			<button class="gm-button">Delete</button>

		{{ Form::close() }}
		@endif

		{{ Form::open(array('action' => 'CommentsController@store')) }}
			{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('content', 'Add a Comment') }}
			<div class="gm-button form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
				{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Your comments']) }}
			</div>
			<div class="form-group">
				<input type="hidden" name="qa_id" value="{{{ $qa->id }}}">
				<button class="gm-button" id="submit">Add</button>
			</div>
		{{ Form::close() }}
	</blockquote>

	<div class="detailBox">
		<div class="titleBox">
			<label>Other Comments</label>
		</div>
		<div class="commentBox">
			<p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>
		<div class="">
			<ul class="list-group">
				@foreach ($qa->comments as $comment)
					<li class="list-group-item">
						<div class="commenterImage">
							<img src="{{{ $comment->user->image }}}" class="commenter-image">
							{{{ $comment->user->username }}}
							<span class="text-success">{{ $comment->voteTotal('upVote') }}</span>
							@if(Auth::check())

								<a href="{{{ action('CommentsController@vote', [$comment->id, 'vote' => '1']) }}}" class="fa fa-thumbs-up fa-2x"></a>
								<a href="{{{ action('CommentsController@vote', [$comment->id, 'vote' => '-1']) }}}" class="fa fa-thumbs-down fa-2x"></a>

							@endif
							@if(!Auth::check())

								<a href="{{{ action('HomeController@getLogin') }}}" class="fa fa-thumbs-up fa-2x"></a>
								<a href="{{{ action('HomeController@getLogin') }}}" class="fa fa-thumbs-down fa-2x"></a>

							@endif
							<span class="text-danger">{{ $comment->voteTotal('downVote') }}</span>
						</div>
						<blockquote>
							<p>{{{ $comment->content }}}</p>
							<footer>Created by {{{ $comment->user->username }}}, {{{ $comment->created_at->diffForHumans() }}}</footer>
						</blockquote>
					</li>
				@endforeach
			</ul>

		</div>
	</div>


@stop