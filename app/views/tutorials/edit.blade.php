@extends('layouts.master')

@section('content')


<p class="logo">Edit Tutorial</p>

<div class = 'content form-div'>
{{ Form::model($tutorial, array('action' => array('TutorialsController@update', $tutorial->id), 'method' => 'PUT', 'files' => true)) }}

	<div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
		{{ $errors->first('title', '<div class="alert alert-danger">:message</div>') }}
		{{ Form::label('title', 'Title') }}
		<input type="text" class="form-control" id="title" name="title" value="{{{ $tutorial->title }}}">
	</div>

	<div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
		{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
		{{ Form::label('content', 'Content') }}
        {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content', 'value' => '{{{ $tutorial->content }}}']) }}
	</div>

	<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
		{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
		{{ Form::label('image', 'Image') }}
		<p>Current Image:</p>
		{{{ $tutorial->image }}}
		{{ Form::file('image') }}
	</div>

	<div class="form-group {{ ($errors->has('video')) ? 'has-error' : '' }}">
        {{ $errors->first('video', '<div class="alert alert-danger">:message</div>') }}
        {{ Form::label('video', 'Video') }}
        <p>Current Video:</p>
        {{{ $tutorial->video }}}
        {{ Form::file('video', null) }}
    </div>

	<button type="submit" class="btn btn-default">Submit</button>
	
{{ Form::close() }}

</div>
		
@stop