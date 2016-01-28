@extends('layouts.master')

@section('top-script')
	
@stop

@section('content')


	<p class="logo">tutorials</p>
	<div class="content content-div">
		<table>
			<tbody>
				@foreach ($tutorials as $tutorial)
					<tr>
						<td><img class="commenter-image" src="{{{ $tutorial->user->image }}}"></td>	
						<td><a href="{{{ action('TutorialsController@show', $tutorial->id) }}}">{{{ $tutorial->title }}}</a></td>
						<td>{{{ $tutorial->created_at->diffForHumans() }}}</td>
						<td><a href="{{{ action('UsersController@show', $tutorial->user->id)}}}">{{{ $tutorial->user->username}}}</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	{{ $tutorials->links() }}

	</div>

@stop