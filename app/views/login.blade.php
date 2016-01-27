@extends('layouts.master')

@section('top-script')

@section('content')

	
	<div class="form-main">
		<div class ="form-div">
			{{ Form::open(array('action' => 'HomeController@postLogin'), ['class'=>'form', 'id'=>'form1']) }}

			<p class = 'font-magneto text-center'>log in</p>

			<div class="{{ ($errors->has('email')) ? 'has-error' : '' }}">
				{{ $errors->first('email', '<div class="alert alert-danger">:message</div>') }}
				{{-- {{ Form::label('email', 'Email') }} --}}
				{{ Form::text('email', Input::old('email'), ['class' => 'form-control form-input email', 'placeholder'=>'Enter your email']) }}
			</div>

			<div class="{{ ($errors->has('password')) ? 'has-error' : '' }}">
				{{ $errors->first('password', '<div class="alert alert-danger">:message</div>') }}
				{{-- {{ Form::label('password', 'Password') }} --}}
				{{ Form::password('password', ['class' => 'password form-control form-input', 'placeholder'=>'Enter your password']) }}
				<br>
				{{ Form::submit('submit', ['id'=>'button-blue']) }}
				{{ Form::close() }}

			</div>
		</div>
	</div>


@stop