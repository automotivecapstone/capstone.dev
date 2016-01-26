@extends('layouts.master')

@section('top-script')
	
@stop

@section('content')

<div class = 'content'>

	<p class="logo">Tutorials</p>
		<table>
			<tbody>
				@foreach ($tutorials as $tutorial)
					<tr>
						<td><img  class="commenter-image" src="{{{ $tutorial->user->image }}}"></td>	
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