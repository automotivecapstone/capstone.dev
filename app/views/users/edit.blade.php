@extends('layouts.master')

@section('content')

<div class="text-center" style="padding:50px 0">
	<div class="logo">register</div>
	<div class="login-form-1">
		{{ Form::open(array('action' => array('UsersController@update', $user->id), 'class' => 'text-left', 'id'=>'register-form'))}}
		
			@include('users.create-edit');

		{{ Form::submit('submit') }}	
		{{ Form::close() }}

	</div>
</div>

@stop