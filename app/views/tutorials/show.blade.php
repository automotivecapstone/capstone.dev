@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS --}}
	<link rel="stylesheet" type="text/css" href="/css/show_qa_tutorial.css">

@stop

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				{{ Form::open(array('action' => array('TutorialsController@destroy', $tutorial->id, 'files' => true), 'method' => 'DELETE')) }}
				
					<a href="{{{ action('TutorialsController@edit', $tutorial->id) }}}" class="btn btn-info">Edit</a>

					{{-- <a href="{{{ action('TutorialsController@editImage', $tutorial->id) }}}" class="btn btn-info">Edit Image</a> --}}

					<button class="btn btn-danger">Delete</button>

				{{ Form::close() }}

				<h1>{{{ $tutorial->title }}}</h1>

				<img src="{{{ $tutorial->image }}}" class="col-md-offset-2 col-md-8 tutorial-image">

				<blockquote>
					<p>{{{ $tutorial->content }}}</p>
					<footer>Created by {{{ $tutorial->user->username }}}, {{{ $tutorial->updated_at->diffForHumans() }}}</footer>
				</blockquote>

				{{ Form::open(array('action' => 'CommentsController@store')) }}

					<div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
						{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
						{{ Form::label('content', 'Comment') }}
						{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your comment']) }}
					</div>
					<input type="hidden" name="tutorial_id" value="{{{$tutorial->id}}}">

					<button type="submit" class="btn btn-default">Submit</button>
				
				{{ Form::close() }}



				@foreach ($tutorial->comments as $comment)
					<p>{{ $comment->content }}</p>
				@endforeach
				
				
			</div>
		</div>
	</div>

@stop