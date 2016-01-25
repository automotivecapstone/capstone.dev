@extends('layouts.master')

@section('content')

	<div class = 'content'>

		<p class="logo">register</p>

		<div class="login-form-1">
			{{ Form::open(array('action' => 'UsersController@store', 'class' => 'text-left', 'id'=>'register-form'))}}
			
				@include('users.create-edit')

			{{ Form::submit('submit') }}	
			{{ Form::close() }}
			<br>

		</div>

		<div class="etc-login-form">
			<p>Already have an account? <a href="{{ action('HomeController@getLogin') }}">login here</a></p>
		</div>

	</div>


@stop