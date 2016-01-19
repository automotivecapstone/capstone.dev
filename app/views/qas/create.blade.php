@extends('layouts.master')

@section('top-script')

	{{-- <link rel="stylesheet" type="text/css" href="/css/posts-create.css"> --}}

@stop


@section('content')

	<div class="container">
		<h2>Post Your Question</h2>

		{{ Form::open(array('action' => 'QasController@store', 'files' => true)) }}

            <div class="form-group {{ ($errors->has('question')) ? 'has-error' : '' }}">
                {{ $errors->first('question', '<div class="alert alert-danger">:message</div>') }}
                {{ Form::label('question', 'Question') }}
                {{ Form::text('question', null, ['class' => 'form-control', 'placeholder' => 'Enter your question']) }}
            </div>

            <div class="form-group {{ ($errors->has('body')) ? 'has-error' : '' }}">
                {{ $errors->first('body', '<div class="alert alert-danger">:message</div>') }}
                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter your body']) }}
            </div>

            <div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
                {{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image') }}
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        {{ Form::close() }}
	</div>

@stop