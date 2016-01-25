@extends('layouts.master')

@section('content')

	<h1>{{{$user->username}}}'s Content</h1>

	<table>
		@foreach($user->tutorials()->get() as $tutorial)
			<tr>
				<td><a href="{{{action('TutorialsController@show', $tutorial->id)}}}">{{{$tutorial->title}}}</a></td>
				<td><button class = "btn btn-warning btn-small">Edit</button></td>
				<td><button class = "btn btn-danger btn-small">Delete</button></td>
			</tr>
		@endforeach
	</table>

	<table>
		@foreach($user->qas()->get() as $qa)
			<tr>
				<td><a href="{{{action('QasController@show', $qa->id)}}}">{{{$qa->question}}}</a></td>
				<td><button class = "btn btn-warning btn-small">Edit</button></td>
				<td><button class = "btn btn-danger btn-small">Delete</button></td>
			</tr>
		@endforeach
	</table>

@stop