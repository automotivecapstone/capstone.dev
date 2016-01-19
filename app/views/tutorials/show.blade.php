@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS --}}
	{{-- <link rel="stylesheet" type="text/css" href="/css/posts-show.css"> --}}

@stop

@section('content')
	<div class="container">
		<div class="header">Tutorial Show</div>
		{{-- <div class="subheader">Blog Stuffz</div> --}}
		<hr>

		{{ Form::open(array('action' => array('TutorialsController@destroy', $tutorial->id, 'files' => true), 'method' => 'DELETE')) }}
		
			<a href="{{{ action('TutorialsController@edit', $tutorial->id) }}}" class="btn btn-info">Edit tutorial</a>

			{{-- <a href="{{{ action('TutorialsController@editImage', $tutorial->id) }}}" class="btn btn-info">Edit Image</a> --}}

			<button class="btn btn-danger">Delete</button>

		{{ Form::close() }}

		<h1>{{{ $tutorial->title }}}</h1>
		<p>{{{ $tutorial->content }}}</p>
		<img src="{{{ $tutorial->image }}}" class="tutorial-image">
	</div>
@stop