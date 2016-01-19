@extends('layouts.master')

@section('top-script')

@stop

@section('content')

<div class="container">
	<div class="header">QA Show</div>

	<hr>

	{{ Form::open(array('action' => array('QasController@destroy', $qa->id, 'files' => true), 'method' => 'DELETE')) }}

		<a href="{{{ action('QasController@edit', $qa->id) }}}" class="btn btn-info">Edit question</a>

		<button class="delete-button btn btn-danger">Delete</button>
	{{ Form::close() }}
	
	<h1>{{$qa->question}}</h1>
	<p>{{$qa->content}}</p>
	<img src="{{{ $qa->image }}}" class="qa-image">

	<p>Created: {{{$qa->created_at->diffForHumans() }}}</p>

	
</div>

@stop