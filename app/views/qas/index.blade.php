@extends('layouts.master')

@section('top-script')
	<style type="text/css">
	table {
    border-collapse: collapse;
    width: 100%;
	}
	tr:hover {
		background-color: #f5f5f5
	}
	th, td {
    padding:25px;
    text-align: left;
    border-bottom: 1px solid #BFA799;
	}
	</style>
@stop

@section('content')

<div class = 'content'>


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
		<p class="logo">Questions &amp; Answers</p>
		<hr>
	{{-- <table class="table table-nonfluid center-table"> --}}

		@foreach($qas as $qa)
			<tr>
				<td><a href="{{{ action('QasController@show', $qa->id) }}}">{{{ $qa->question }}} </a></td>
				<td>{{{ $qa->created_at->diffForHumans() }}}</td>
				<td>{{{ $qa->user->username }}}</td>
		@endforeach
		</tbody>
	</table>

	{{ $qas->links() }}

    <p class="logo">Questions &amp; Answers</p>
		<table>
			<tbody>
				@foreach($qas as $qa)
    				<tr>
       					<td><a href="{{{ action('QasController@show', $qa->id) }}}">{{{ $qa->question }}} </a></td>
       					<td>{{{ $qa->created_at->diffForHumans() }}}</td>
        				<td>{{{ $qa->user->username}}}</td>
        			</tr>
    			@endforeach
			</tbody>
		</table>
{{ $qas->links() }}

</div>

@stop