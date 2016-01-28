@extends('layouts.master')

@section('content')
<div class="content content-div">
	<div class = "brownheader">
	<h2 class = "font-magneto-item" id="profilebreak">new and noteworthy</h2>
	</div>
	<div class="row">
	<div class="col-md-6">
		<h3>Tutorials</h3>
		<hr>
		<ul>
		@foreach ($user->tags()->get() as $tag)
			@foreach($tag->tutorials()->get() as $tutorial)
				<li><a href="{{{action('TutorialsController@show', $tutorial->id)}}}">{{$tutorial->title}}</a></li>
			@endforeach
		@endforeach
		</ul>
	</div>
	
		<div class="col-md-6 offset-col-md-6">
		    <h3>Q/As</h3>
		    <hr>	
		    <ul>
			@foreach ($user->tags()->get() as $tag)
				@foreach($tag->qas()->get() as $qa)
					<li><a href="{{{action('QasController@show', $qa->id)}}}">{{$qa->question}}</a></li>
				@endforeach
			@endforeach
			</ul>
		</div> 
	</div>
</div>
@stop