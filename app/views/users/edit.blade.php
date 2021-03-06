@extends('layouts.master')

@section('top-script')

	<style type="text/css">

		.tags-pad {
			padding-right: 10px;
		}

		.modal-body, .modal-title {
			color: #F2E4DC;
		}

		.add-tag {
			color: black;
		}
	</style>

@stop

@section('content')


	<p class="logo">edit your profile</p>

	<button class = "gm-button" id="userajaxlistener" data-toggle="modal" data-target="#usertag_Modal">Your Interests</button>
 		<div class="modal fade" id = "usertag_Modal" tabindex="-1" role="dialog">
 		  <div class="modal-dialog">
 		    <div class="modal-content">
 		      <div class="modal-header">
 		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 		        <h4 class="modal-title">Interests</h4>
 		      </div>
 		      <div class="modal-body">
 
 		        {{ Form::model($user, array('action' => array('HomeController@addTagsToUser'), 'method' => 'POST')) }}
 				
 				
 				@foreach($tags as $tag)
	 					{{ Form::label('usertags[]', $tag->name)}}
	 					{{ Form::checkbox('usertags[]', $tag->id)}}
	 					<span class="tags-pad"></span>
 				@endforeach 

 				{{ Form::label('addtag', "Don't see a tag? Add it here!")}}
 				<div class="add-tag">
 					{{ Form::text('addtag', null,array('id' => 'addtag', 'placeholder'=>'Add a Tag!'))}}
 				</div>
 
 				
 		      </div>
 		      <div class="modal-footer">
 		        <a type="button" id = "" class="btn btn-default" data-dismiss="modal">Close</a>

 		        {{ Form::submit('Add tags', array('class'=> 'btn btn-primary'))}}
 		        {{ Form::close()}}
 		      </div>
 		    </div><!-- /.modal-content -->
 		  </div><!-- /.modal-dialog -->
 		</div><!-- /.modal -->
 
	<div class = 'content form-div'>
		<div class="login-form-1">
			{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files' => true)) }}

				<div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
					{{ $errors->first('username', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('username', 'Username') }}
					<input type="text" class="form-control" id="username" name="username" value="{{{ $user->username }}}">
				</div>

				<div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
					{{ $errors->first('password', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password', ['class'=>'form-control', 'placeholder'=>'Enter your Password']) }}
				</div>

				<div class="form-group {{ ($errors->has('passwordmatch')) ? 'has-error' : '' }}">
					{{ $errors->first('passwordmatch', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('passwordmatch', 'Password Match') }}
					{{ Form::password('passwordmatch', ['class'=>'form-control', 'placeholder'=>'Enter your Password Again']) }}
				</div>


				<div class="form-group {{ ($errors->has('email')) ? 'has-error' : '' }}">
					{{ $errors->first('email', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('email', 'Email') }}
					{{ Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter your Email', 'value'=>'{{{ $user->username }}}']) }}
				</div>

				<div class="form-group {{ ($errors->has('image')) ? 'has-error' : '' }}">
					{{ $errors->first('image', '<div class="alert alert-danger">:message</div>') }}
					{{ Form::label('image', 'Image') }}
					<p>Current Image:</p>
					{{{ $user->image }}}
					{{ Form::file('image') }}
				</div>

				{{ Form::submit('submit', ['class'=>'gm-button'])}}	
				{{ Form::close() }}
		</div>
	</div>

@stop

@section('bottom-script')
	<script type="text/javascript">
		$('#addtag').autocomplete({
			source: jQuery.parseJSON("{{{action('TagsController@index')}}}"),
			minLength: 2,
			select: function(e, ui){
				console.log(ui);
				$('#addtag').val(ui.item.value);
			}
		});
	</script>
@stop
