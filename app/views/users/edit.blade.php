@extends('layouts.master')

@section('content')

	<div class = 'content'>

		<p class="logo">Edit Profile</p>
		<div class="login-form-1">
			{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files' => true)) }}

				<div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
					{{ $errors->first('username', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('username', 'Username') }}
					<input type="text" class="form-control" id="username" name="username" value="{{{ $user->username }}}">
				</div>

				<div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
					{{ $errors->first('password', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Enter your Password']) }}
				</div>

				<div class="form-group {{ ($errors->has('passwordmatch')) ? 'has-error' : '' }}">
					{{ $errors->first('passwordmatch', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('passwordmatch', 'Password Match') }}
					{{ Form::password('passwordmatch', ['class'=>'form-control', 'placeholder'=>'Enter your Password Again']) }}
				</div>


				<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
					{{ $errors->first('email', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('email', 'Email') }}
					{{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your Email', 'value'=>'{{{ $user->username }}}']) }}
				</div>

				<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
					{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('image', 'Image') }}
					<p>Current Image:</p>
					{{{ $user->image }}}
					{{ Form::file('image') }}
				</div>

				{{ Form::submit('submit')}}	
				{{ Form::close() }}
		</div>
	</div>

@stop