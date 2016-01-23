@extends('layouts.master');

@section('top-script')

	{{-- CUSTOM CSS --}}
	<link rel="stylesheet" type="text/css" href="/css/tutorials-index.css">

@stop

@section('content');

<div class="container">
	<div class="row">
		<h1>
			<span class="demo-haeding-note">Search Results</span>
		</h1>
		<hr>
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-nonfluid center-table">
				<thead>
					<tr>
						<th><h4>Title</h4></th>
						<th><h4>Content</h4></th>
						<th><h4>Created</h4></th>
					</tr>
				</thead>
				<tbody>
					@foreach($results as $result)
						<tr>
							<td><a href="{{{ action('HomeController@searchShow', $result->id) }}}">{{{ $result->title }}}</a></td>
							<td>{{{ $result->content }}}</td>
							<td>{{{ $result->created_at->diffForHumans() }}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop