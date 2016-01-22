@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS --}}
	<link rel="stylesheet" type="text/css" href="/css/tutorials-create.css">
	
@stop

@section('content')
	<div class="container">
		<div class="header">Create a Tutorial</div>
		<div class="subheader">Do it now!!!!</div>
		<hr>

		{{ Form::open(array('action' => 'TutorialsController@store', 'enctype' => 'multipart/form-data', 'files' => true)) }}

			<div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
				{{ $errors->first('title', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}
			</div>

			<div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
				{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('content', 'Content') }}
				{{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
			</div>

			<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
				{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('image', 'Image') }}
				{{ Form::file('image') }}
			</div>

			<div class="form-group {{ ($errors->has('video')) ? 'has-error' : '' }}">
				{{ $errors->first('video', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('video', 'Video') }}
				{{ Form::file('video', null) }}
			</div>

			<div>
				@foreach($tags as $tag)
					{{ Form::label('usertags[]', $tag->name)}}
					{{ Form::checkbox('usertags[]', $tag->id)}}
				@endforeach 
			</div>

			<button type="submit" class="btn btn-default">Submit</button>
		{{ Form::close() }}
	</div>
@stop