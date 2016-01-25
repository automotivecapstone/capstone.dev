@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => array('QasController@destroy', $qa->id, 'files' => true), 'method' => 'DELETE')) }}
	
	<a href="{{{ action('QasController@edit', $qa->id) }}}" class="btn btn-info">Edit Question</a>

	<button class="delete-button btn btn-danger">Delete</button>
{{ Form::close() }}

<h3>{{$qa->question}}</h3>
<img src="{{{ $qa->image }}}" class="col-xs-8 col-xs-offset-2 qa-image">
<blockquote>
	<p>{{$qa->content}}</p>
	<footer>Created by {{{ $qa->user->username }}}, {{{$qa->created_at->diffForHumans() }}}</footer>
</blockquote>

@stop