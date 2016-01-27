@extends('layouts.master')

@section('top-script')
	
@stop

@section('content')

<div class = 'content'>

	<p class="logo">Questions &amp; Answers</p>
		<table>
			<tbody>
				@foreach($qas as $qa)
				<tr>
					<td>{{{ $qa->user->image}}}</td>
					<td><a href="{{{ action('QasController@show', $qa->id) }}}">{{{ $qa->question }}} </a></td>
					<td>{{{ $qa->created_at->diffForHumans() }}}</td>
					<td>{{{ $qa->user->username }}}</td>
				@endforeach
			</tbody>
		</table>

	{{ $qas->links() }}

</div>

@stop