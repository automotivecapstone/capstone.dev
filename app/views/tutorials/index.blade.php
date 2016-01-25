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
    padding: 25px;
    text-align: left;
    border-bottom: 1px solid #BFA799;
	}
	</style>
@stop

@section('content')

<div class = 'content'>

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

</div>

@stop