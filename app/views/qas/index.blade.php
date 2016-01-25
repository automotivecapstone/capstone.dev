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
    padding:25px;
    text-align: left;
    border-bottom: 1px solid #BFA799;
	}
	</style>
@stop

@section('content')

    <p class="logo">Questions &amp; Answers</p>
		<table>
			<tbody>
				@foreach($qas as $qa)
    				<tr>
       					<td><a href="{{{ action('QasController@show', $qa->id) }}}">{{{ $qa->question }}} </a></td>
       					<td>{{{ $qa->created_at->diffForHumans() }}}</td>
        				<td>{{{ $qa->user->username}}}</td>
        			</tr>
    			@endforeach
			</tbody>
		</table>
{{ $qas->links() }}

@stop