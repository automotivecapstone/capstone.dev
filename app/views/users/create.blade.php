@extends('layouts.home')

@section('content')

	<div class = 'form-main'>
		<div class="form-div">
			{{ Form::open(array('action' => 'UsersController@store', 'class' => 'text-left', 'id'=>'register-form', 'method' => 'post', 'files' => true))}}
			
		<p class="font-magneto-item text-center">register</p>

			<div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
				{{ $errors->first('username', '<div class="alert alert-danger">:message</div>') }}
				{{ Form:: text('username', null, ['class' => 'form-control form-input username', 'placeholder'=>'Enter your Username', 'id'=>'username'])}}
			</div>

			<div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
				{{ $errors->first('password', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::password('password', ['class'=>'form-control form-input password', 'placeholder'=>'Enter your Password']) }}
			</div>

			<div class="form-group {{ ($errors->has('passwordmatch')) ? 'has-error' : '' }}">
				{{ $errors->first('passwordmatch', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::password('passwordmatch', ['class'=>'form-control form-input password', 'placeholder'=>'Enter your Password Again']) }}
			</div>


			<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
				{{ $errors->first('email', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::email('email', null, ['class'=>'form-control form-input email', 'placeholder'=>'Enter your Email']) }}
			</div>

			<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
				{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('image', 'Image') }}
				{{ Form::file('image') }}
			</div>

			{{ Form::submit('submit', ['class'=>'button-blue']) }}	
			{{ Form::close() }}
			<br>
			<div class="etc-login-form">
				<p class="text-beige">Already have an account? <a class="text-crm" href="{{ action('HomeController@getLogin') }}">login here</a></p>
			</div>
		</div>

		

	</div>


@stop