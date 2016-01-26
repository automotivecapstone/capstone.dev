@extends('layouts.master')

@section('top-script')

@section('content')

	<p class="logo">log in</p>
	<div class="login-form-1">
		{{ Form::open(array('action' => 'HomeController@postLogin')) }}


		<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
			{{ $errors->first('email', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder'=>'Enter your email']) }}
		</div>

		<div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
			{{ $errors->first('password', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder'=>'Enter your password']) }}
			<br>
			{{ Form::submit('submit') }}
			{{ Form::close() }}

		</div>
	</div>


@stop