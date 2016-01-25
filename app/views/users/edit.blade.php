@extends('layouts.master')

@section('content')

<p class="logo">Edit Profile</p>

{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'method' => 'PUT', 'files' => true)) }}

	@include('users.create-edit')

{{ Form::submit('submit')}}	
{{ Form::close() }}

@stop