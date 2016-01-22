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
									<div class="media">
										<div class="media-body">
											<iframe width="560" height="315" src="{{{ $tutorial->video }}}" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
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