@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS --}}
	{{-- <link rel="stylesheet" type="text/css" href="/css/tutorials-index.css"> --}}

@stop

@section('content')

	<div class="container">
		<div class="row">
			<div class="header">Tutorial Index</div>
			{{-- <div class="subheader">Blog Stuffz</div> --}}
			<hr>
			<table class="table table-nonfluid center-table">
				<thead>
					<tr>
						<th>Title</th>
						<th>Content</th>
						<th>Image</th>
						<th>Video</th>
						<th>Created</th>
					</tr>
				</thead>
				<tbody>
						@foreach ($tutorials as $tutorial)
							<tr>
								<td><a href="{{{ action('TutorialsController@show', $tutorial->id) }}}" class="tutorials-title">{{{ $tutorial->title }}}</a></td>
								<td>{{{ $tutorial->content }}}</td>
								<td><img src="{{{ $tutorial->image }}}" class="tutorial-image"></td>
								<td>
									<video width="400" controls>
										<source src="{{{ $tutorial->video }}}" type="video/mp4">
										Your browser does not support HTML5 video.
									</video>
								</td>
								<td>{{{ $tutorial->created_at->diffForHumans() }}}</td>
							</tr>
						@endforeach
				</tbody>
			</table>
			{{ $tutorials->links() }}
		</div>
	</div>

@stop