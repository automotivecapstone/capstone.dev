<!DOCTYPE html>
<html>
	<head>	
		<title>GreaseMonkey | An Online DIY Automotive Community</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- {{-- BOOTSTRAP CSS --}} -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">

		<!-- {{-- CUSTOM CSS BELOW --}} -->
		<link href="/css/landingpage.css" type="text/css" rel="stylesheet">

		<!-- {{-- CUSTOM FONT BELOW --}} -->
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

		<!-- {{-- FONT AWESOME BELOW --}} -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="/css/introjs.css">

		@yield('top-script')

	</head>
	<body>

		@include('partials.navbar')

		
		
		@yield('content')

		<div class="col-xs-8 col-xs-offset-2">
			<div class="message">
			    @if (Session::has('successMessage'))
				    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
				@endif
				@if (Session::has('errorMessage'))
				    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
				@endif
			</div>
		</div>	
	

		@include('partials.footer')

		<!-- JQUERY -->
		<script src="/js/jquery-2.1.4.min.js"></script>
		<!-- BOOTSTRAP JS -->
		<script src="/js/bootstrap.min.js"></script>
		<!-- CUSTOM JS BELOW -->
		<script src="/js/intro.js"></script>

		
		@yield('bottom-script')
	</body>
</html>