@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS --}}
	<link rel="stylesheet" type="text/css" href="/css/tutorials-index.css">

@stop

@section('content')

	<div class="container">
		<div class="row">
			<h1>
				<span class="demo-heading-note">Tutorials</span>
			</h1>
			{{-- <div class="subheader">Blog Stuffz</div> --}}
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
							@foreach ($tutorials as $tutorial)
								<tr>
									<td><a href="{{{ action('TutorialsController@show', $tutorial->id) }}}">{{{ $tutorial->title }}}</a></td>
									<td>{{{ $tutorial->content }}}</td>
									<td>{{{ $tutorial->created_at->diffForHumans() }}}</td>
								</tr>
							@endforeach
					</tbody>
				</table>
			</div>
			{{ $tutorials->links() }}
		</div>
	</div>

@stop