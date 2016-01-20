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
							{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
							{{ Form::label('content', 'Comment') }}
						<div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
							{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Your comments']) }}
						</div>
						<div class="form-group">
							<input type="hidden" name="tutorial_id" value="{{{$tutorial->id}}}">
							<button class="btn btn-default">Add</button>
						</div>
					{{ Form::close() }}

				<div class="detailBox">
					<div class="titleBox">
						<label>Comments</label>
					</div>
					<div class="commentBox">
						<p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					</div>
					<div class="">
						<ul class="list-group">
							@foreach ($tutorial->comments as $comment)
							<li class="list-group-item">
								<div class="commenterImage">
									<img src="http://lorempixel.com/50/50/people/6" />
									{{{ $comment->user->username }}}
								</div>
								<div class="commentText">
									<blockquote>
										<p>{{{ $comment->content }}}</p>
										<footer>{{{ $comment->created_at->diffForHumans() }}}</footer>
									</blockquote>
								</div>
							</li>
							@endforeach
						</ul>

					</div>
				</div>
				
			</div>
		</div>
	</div>

@stop