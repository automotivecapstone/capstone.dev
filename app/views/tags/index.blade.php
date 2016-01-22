@extends('layouts.master');

@section('content');

<ul>
	@foreach($tags as $tag)
		@foreach($tag->tutorials()->get() as $tutorial)
			<li>{{$tutorial->title}}</li>
		@endforeach
	@endforeach
</ul>

@stop