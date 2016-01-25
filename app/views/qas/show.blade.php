@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => array('QasController@destroy', $qa->id, 'files' => true), 'method' => 'DELETE')) }}
	
	<a href="{{{ action('QasController@edit', $qa->id) }}}" class="btn btn-info">Edit Question</a>

	<button class="delete-button btn btn-danger">Delete</button>
{{ Form::close() }}

<h3 class="logo">{{$qa->question}}</h3>
<img src="{{{ $qa->image }}}" class="qa-image">
<p>{{$qa->content}}</p>
<p>Created: {{{$qa->created_at->diffForHumans() }}}</p>

@stop