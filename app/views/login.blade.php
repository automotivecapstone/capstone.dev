@extends('layouts.master')

@section('top-script')

@section('content')

<div class="container">

	<p class="logo">Log In</p>
		<div class="login-form-1">
			{{ Form::open(array('action' => 'HomeController@postLogin')) }}

			<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
				{{ $errors->first('email', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('email', 'Email') }}
				{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
			</div>

			<div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
				{{ $errors->first('password', '<div class="alert alert-danger">:message</div>') }}
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password', array('class' => 'form-control')) }}
				<br>
				{{ Form::submit('submit') }}
				{{ Form::close() }}

			</div>

	</div>
@stop