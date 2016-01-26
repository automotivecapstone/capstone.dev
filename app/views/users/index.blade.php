@extends('layouts.master')

@section('content')

	<div class = 'content'>
		<ul>
		@foreach($users as $user)
			<li>{{{$user->username}}}</li>
		@endforeach
		</ul>


	</div>

@stop