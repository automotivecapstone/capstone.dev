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

		@foreach($qas as $qa)
			<tr>
				<td><a href="{{{ action('QasController@show', $qa->id) }}}">{{{ $qa->question }}} </a></td>
				<td>{{{ $qa->content }}}</td>
				<td><img src="{{{ $qa->image }}}" class="qa-image"></td>
				<td>{{{ $qa->created_at->diffForHumans() }}}</td>
			</tr>
		@endforeach
	</tbody>
</table>

{{ $qas->links() }}

@stop