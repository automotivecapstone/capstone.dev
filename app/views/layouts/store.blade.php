<!DOCTYPE html>
<html>
	<head>	
		<title>Capstone</title>
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

	</head>

	<body>
		@include('partials.navbar')

		
		
		@yield('content')

		@include('partials.footer')

		<!-- JQUERY -->
		<script src="/js/jquery-2.1.4.min.js"></script>
		<!-- BOOTSTRAP JS -->
		<script src="/js/bootstrap.min.js"></script>
		<!-- CUSTOM JS BELOW -->
		@yield('bottom-script')

	</body>
</html>