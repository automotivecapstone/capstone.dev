@extends('layouts.master')

@section('content')


<div class="container">

	@foreach($qas as $qa)
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
        	<a href="{{{ action('QasController@show', $qa->id) }}}">~ {{{ $qa->question }}} </a>
        	<a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $qa->body }}}</a>
        </h2>
        <hr>
    </div>
</div>

	{{ $qas->links() }}


@stop