@extends('layouts.master')

@section('content')

<body>
	<div class="container">
			<p class="logo">Edit Your Question</p>

		{{ Form::model($qa, array('action' => array('QasController@update', $qa->id), 'method' => 'PUT')) }}
			<div class="form-group {{ ($errors->has('question')) ? 'has-error' : ''}}">
				{{ Form::label('question', 'Question') }}
				{{ Form::text('question', null, ['class' => 'form-control', 'placeholder' => 'Enter your blog question']) }}
			</div>

			<div class="form-group {{ ($errors->has('content')) ? 'has-error' : ''}}">
				{{ Form::label('content', 'Content') }}
				{{ Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'Enter your content']) }}
			</div>

			<div class="form-group  {{ ($errors->has('image')) ? 'has-error' : ''}}">
				{{ Form::label('image', 'Image') }}
				{{ Form::textarea('image', null, ['class' => 'form-control', 'placeholder' => 'Enter your image']) }}
			</div>

		  	<button type="submit" class="btn btn-default">Submit Changes</button>
		{{ Form::close() }}
	</div>
</body>
	



	
@stop