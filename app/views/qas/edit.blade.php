@extends('layouts.master')

@section('content')



	<p class="logo">Edit Your Question</p>

	<div class = 'content form-div'>
	{{ Form::model($qa, array('action' => array('QasController@update', $qa->id), 'method' => 'PUT')) }}

		<div class="form-group {{ ($errors->has('question')) ? 'has-error' : ''}}">
			{{ $errors->first('question', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('question', 'Question') }}
			<input type="text" class="form-control" id="question" name="question" value="{{{ $qa->question }}}">
		</div>

		<div class="form-group {{ ($errors->has('content')) ? 'has-error' : ''}}">
			{{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('content', 'Content') }}
	        {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content', 'value' => '{{{ $qa->content }}}']) }}
		</div>

		<div class="form-group  {{ ($errors->has('image')) ? 'has-error' : ''}}">
			{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
			{{ Form::label('image', 'Image') }}
			<p>Current Image:</p>
			{{{ $qa->image }}}
			{{ Form::file('image') }}
		</div>

		<div class="form-group {{ ($errors->has('video')) ? 'has-error' : '' }}">
	        {{ $errors->first('video', '<div class="alert alert-danger">:message</div>') }}
	        {{ Form::label('video', 'Video') }}
	        <p>Current Video:</p>
	        {{{ $qa->video }}}
	        {{ Form::file('video', null) }}
	    </div>

	  	<button type="submit" class="btn btn-default">Submit Changes</button>

	{{ Form::close() }}

</div>


@stop