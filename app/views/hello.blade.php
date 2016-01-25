@extends('layouts.master')

@section('top-script')

	{{-- CUSTOM CSS BELOW --}}
	<link href="/css/hello.css" type="text/css" rel="stylesheet">
	<link href="/css/general-site.css" type="text/css" rel="stylesheet">

@stop

@section('content')
<body>

	<div class="title">
		<h1><span class="font-magneto">Grease Monkey</span></h1>
		<img src="/css/monkey-transparent.png">
	</div>

</body>

@stop

@section('top-script')

	{{-- CUSTOM JS BELOW --}}
	<script src="/js/hello.js"></script>

@stop