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
	@if(Auth::user())
		{{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your Email', 'value'=>'{{{ $user->username }}}']) }}
	@elseif(!Auth::user())
		{{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your Email']) }}
	@endif
</div>

<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
	{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
	{{ Form::label('image', 'Image') }}
	@if(Auth::user())
		<p>Current Image:</p>
		{{{ $user->image }}}
	@endif
	{{ Form::file('image') }}
</div>