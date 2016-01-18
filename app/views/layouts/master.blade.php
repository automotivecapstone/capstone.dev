<!DOCTYPE html>
<html>
	<head>	
		<title>Capstone</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		{{-- BOOTSTRAP CSS --}}
		<link href="/css/bootstrap.min.css" rel="stylesheet">

		{{-- CUSTOM CSS BELOW --}}

		{{-- CUSTOM FONT BELOW --}}

		{{-- FONT AWESOME BELOW --}}
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		
		@yield('top-script')
	</head>
	<body>
		@include('partials.navbar')
		@yield('content')
		
		<div class="message">
		    @if (Session::has('successMessage'))
			    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
			@endif
			@if (Session::has('errorMessage'))
			    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
			@endif
		</div>
		@yield('content')
		<!-- JQUERY -->
		<script src="/js/jquery-2.1.4.min.js"></script>
		<!-- BOOTSTRAP JS -->
		<script src="/js/bootstrap.min.js"></script>
		<!-- CUSTOM JS BELOW -->
		@include('partials.footer')
		@yield('bottom-script')
	</body>
</html>
