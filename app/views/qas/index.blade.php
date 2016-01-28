@extends('layouts.master')

@section('top-script')
	
@stop

@section('content')


	<p class="logo">questions &amp; answers</p>

	<div class="content content-div">
		<table>
			<tbody>
				@foreach($qas as $qa)
				<tr>
					<td><img class="commenter-image" src="{{{ $qa->user->image}}}"></td>
					<td><a href="{{{ action('QasController@show', $qa->id) }}}">{{{ $qa->question }}} </a></td>
					<td>{{{ $qa->created_at->diffForHumans() }}}</td>
					<td>{{{ $qa->user->username }}}</td>
				@endforeach
			</tbody>
		</table>

	{{ $qas->links() }}

	</div>

@stop