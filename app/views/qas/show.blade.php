@extends('layouts.master')

@section('top-script')

@stop

@section('content')

<div class="container">
	<div class="header">QA Show</div>

	<hr>

	{{ Form::open(array('action' => array('QasController@destroy', $qa->id, 'files' => true), 'method' => 'DELETE')) }}
		<button class="delete-button btn btn-danger">Delete Post</button>
	{{ Form::close() }}
	
	<h1>{{$qa->question}}</h1>
	<h3>{{$qa->content}}</h3>
	<p>{{$qa->image}}</p>

	<p>Created: {{{$qa->created_at->diffForHumans() }}}</p>
	<button type="submit" class="btn btn-default">	
		<a href="{{{ action('QasController@edit', $qa->id) }}}">Edit this Question</a>
	</button>
	
</div>

@stop