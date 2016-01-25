@extends('layouts.master')

@section('top-script')
	<style type="text/css">
	table {
    border-collapse: collapse;
    width: 100%;
	}

	th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #BFA799;
	}
	</style>
@stop

@section('content')

	<p class="logo">Tutorials</p>
		<table>
			<tbody>
				@foreach ($tutorials as $tutorial)
					<tr>
						<td><a href="{{{ action('TutorialsController@show', $tutorial->id) }}}">{{{ $tutorial->title }}}</a></td>
						<td>{{{ $tutorial->created_at->diffForHumans() }}}</td>
						<td>{{{ $tutorial->user->username}}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
{{ $tutorials->links() }}

@stop