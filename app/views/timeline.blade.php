@extends('layouts.master')

@section('content')
<div class="content content-div">
	<div class = "brownheader">
	<h2 class = "font-magneto-item" id="profilebreak">new and noteworthy</h2>
	</div>
	<div class="row">
	<div class="col-md-6">
		<h3 class="title-qas-tuts">Tutorials</h3>
		<hr>
		<table>
			<tbody>
				@foreach ($user->tags()->get() as $tag)
					@foreach($tag->tutorials()->get() as $tutorial)
						<tr>
							<td><img class="commenter-image" src="{{{ $tutorial->user->image }}}"></td>	
						 	<td class="newsfeed"><a href="{{{action('TutorialsController@show', $tutorial->id)}}}">{{$tutorial->title}}</a></td>
						</tr>
			@endforeach
		@endforeach
	
			</tbody>
		</table>
	</div>
	
	<div class="col-md-6 offset-col-md-6">
		   <h3 class="title-qas-tuts">Q/As</h3>
		   <hr>
		   	<table>
		    	<tbody>
				@foreach ($user->tags()->get() as $tag)
					@foreach($tag->qas()->get() as $qa)
		    		<tr>
						<td><img class="commenter-image" src="{{{ $tutorial->user->image }}}"></td>	
						<td class="newsfeed"><a href="{{{action('QasController@show', $qa->id)}}}">{{$qa->question}}</a></td>
					</tr>
					@endforeach
				@endforeach
		    	</tbody>
		   </table>	
		</div> 
	</div>
</div>
@stop