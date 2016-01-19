@extends('layouts.master')

@section('content')

<div class="text-center" style="padding:50px 0">
	<p class="logo">register</p>

	<div class="login-form-1">
		{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT')) }}
		
			@include('users.create-edit')

		{{ Form::submit('submit')}}	
		{{ Form::close() }}

	</div>
</div>

@stop