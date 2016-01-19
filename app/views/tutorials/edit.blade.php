@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS --}}
	<link rel="stylesheet" type="text/css" href="/css/tutorials-edit.css">
	
@stop

@section('content')
	<div class="container">
		<div class="header">Edit Tutorial</div>
		{{-- <div class="subheader">Blog Stuffz</div> --}}
		<hr>

		{{ Form::model($tutorial, array('action' => array('TutorialsController@update', $tutorial->id), 'method' => 'PUT')) }}

			<div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
				{{ $errors->first('title', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('title', 'Title') }}
				<input type="text" class="form-control" id="title" name="title" value="{{{ $tutorial->title }}}">
			</div>

			<div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
				{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('content', 'Content') }}
				<input type="text" class="form-control" id="content" name="content" value="{{{ $tutorial->content }}}"></input>
			</div>

			<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
				{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('image', 'Image') }}
				<input type="text" class="form-control" id="image" name="image" value="{{{ $tutorial->image }}}"></input>
			</div>

			<button type="submit" class="btn btn-default">Submit</button>
			
		{{ Form::close() }}
	</div>
@stop