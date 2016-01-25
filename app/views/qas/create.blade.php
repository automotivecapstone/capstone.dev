@extends('layouts.master')

@section('content')

<p class="logo">Post a Question</p>

{{ Form::open(array('action' => 'QasController@store', 'files' => true)) }}

    <div class="form-group {{ ($errors->has('question')) ? 'has-error' : '' }}">
        {{ $errors->first('question', '<div class="alert alert-danger">:message</div>') }}
        {{ Form::label('question', 'Question') }}
        {{ Form::text('question', null, ['class' => 'form-control', 'placeholder' => 'Enter your question']) }}
    </div>

    <div class="form-group {{ ($errors->has('content')) ? 'has-error' : '' }}">
        {{ $errors->first('content', '<div class="alert alert-danger">:message</div>') }}
        {{ Form::label('content', 'Content') }}
        {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
    </div>

    <div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
        {{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
        {{ Form::label('image', 'Image') }}
        {{ Form::file('image') }}
    </div>

    <div class="form-group {{ ($errors->has('video')) ? 'has-error' : '' }}">
        {{ $errors->first('video', '<div class="alert alert-danger">:message</div>') }}
        {{ Form::label('video', 'Video') }}
        {{ Form::file('video', null) }}
    </div>

    <div>
        @foreach($tags as $tag)
            {{ Form::label('qatags[]', $tag->name)}}
            {{ Form::checkbox('qatags[]', $tag->id)}}
        @endforeach 
    </div>

{{ Form::submit('submit') }}    
{{ Form::close() }}

@stop