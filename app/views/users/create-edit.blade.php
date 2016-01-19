{{ Form::label('username', 'Username') }}
<br>
{{ Form::text('username', null, ['class'=>'form-control', 'placeholder'=>'Enter your Username']) }}
<br>
{{ Form::label('password', 'Password') }}
<br>

{{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Enter your Password']) }}
<br>
{{ Form::label('passwordmatch', 'Matching Password') }}
<br>

{{ Form::password('passwordmatch', ['class'=>'form-control', 'placeholder'=>'Enter your Password Again']) }}
<br>
{{ Form::label('email', 'Email') }}
<br>

{{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your Email']) }}
<br>