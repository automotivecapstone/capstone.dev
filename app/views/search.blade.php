@extends('layouts.master')


@section('content')

<p class="logo">search results</p>
<div class="content content-div">
	<table>
		<tbody>
			
			@foreach($resultsTutorial as $result)
				<tr>
					<td><img class="commenter-image" src="{{{ $result->user->image }}}"></td>	
					<td><a href="{{{ action('HomeController@searchShow', $result->id) }}}">{{{ $result->title }}}</a></td>
					<td>{{{ $result->created_at->diffForHumans() }}}</td>
					<td>{{{ $result->user->username }}}</td>
				</tr>
			@endforeach

			@foreach($resultsQa as $result)
				<tr>
					<td><img class="commenter-image" src="{{{ $result->user->image }}}"></td>
					<td><a href="{{{ action('HomeController@searchShow', $result->id) }}}">{{{ $result->question }}}</a></td>
					<td>{{{ $result->created_at->diffForHumans() }}}</td>
					<td>{{{ $result->user->username }}}</td>
				</tr>
			@endforeach

		</tbody>
	</table>
</div>

@stop