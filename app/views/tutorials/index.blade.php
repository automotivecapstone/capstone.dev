@extends('layouts.master')

@section('content')

	<p class="logo">Tutorials</p>
	<table class="table table-nonfluid center-table">
		<thead>
			<tr>
				<th><h4>Title</h4></th>
				<th><h4>Content</h4></th>
				<th><h4>Created</h4></th>
			</tr>
		</thead>
		<tbody>
				@foreach ($tutorials as $tutorial)
					<tr>
						<td><a href="{{{ action('TutorialsController@show', $tutorial->id) }}}">{{{ $tutorial->title }}}</a></td>
						<td>{{{ $tutorial->content }}}</td>
						<td>{{{ $tutorial->created_at->diffForHumans() }}}</td>
					</tr>
				@endforeach
		</tbody>
	</table>
{{ $tutorials->links() }}

@stop