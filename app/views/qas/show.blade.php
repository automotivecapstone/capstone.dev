@extends('layouts.master')

@section('top-script')

@stop

@section('content')

<div class = 'content content-div'>

	{{ Form::open(array('action' => array('QasController@destroy', $qa->id, 'files' => true), 'method' => 'DELETE')) }}
		
		<a href="{{{ action('QasController@edit', $qa->id) }}}" class="btn btn-info">Edit Question</a>

		<button class="delete-button btn btn-danger">Delete</button>

	{{ Form::close() }}

	<h3>{{$converter->convertToHtml($qa->question)}}</h3>
	@if (isset($qa->image))
		<img src="{{{ $qa->image }}}" class="col-xs-8qa-image">
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

	<blockquote>
		<p>{{$qa->content}}</p>
		<footer>Created by {{{ $qa->user->username }}}, {{{$qa->created_at->diffForHumans() }}}</footer>
	</blockquote>

	{{ Form::open(array('action' => 'CommentsController@store')) }}
		{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
		{{ Form::label('content', 'Add a Comment') }}
		<div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
			{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Your comments']) }}
		</div>
		<div class="form-group">
			<input type="hidden" name="qa_id" value="{{{ $qa->id }}}">
			<button class="btn btn-default" id="submit">Add</button>
		</div>
	{{ Form::close() }}

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