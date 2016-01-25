@extends('layouts.master')

@section('content')

<p class="logo">Questions & Answers</p>
<table class="table table-nonfluid center-table">
	<thead>
		<tr>
			<th>Question</th>
			<th>Content</th>
			<th>Image</th>
			<th>Created</th>
		</tr>
	</thead>
	<tbody>


@section('content')
<body>
	<div class="container">
        <p class="logo">Questions &amp; Answers</p>
			<hr>
			{{-- <table class="table table-nonfluid center-table"> --}}
				
			<table>
				<tbody>

					@foreach($qas as $qa)
    					<tr>
        					<td><a href="{{{ action('QasController@show', $qa->id) }}}">{{{ $qa->question }}} </a></td>
        					<td>{{{ $qa->created_at->diffForHumans() }}}</td>
        					<td>{{{ $qa->user->username }}}</td>
    				@endforeach
				</tbody>
			</table>
    	
			{{ $qas->links() }}
		</div>
    </div>
</body>


@stop