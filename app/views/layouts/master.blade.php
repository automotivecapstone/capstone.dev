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
		
		@yield('top-script')
	</head>
	<body>
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
	        <div class="container-fluid">
	            <div class="navbar-header">
	                <a class="navbar-brand page-scroll" href="">Captain Capstone</a>
	            </div>
				<div class="col-sm-3 col-md-3 pull-left">

					{{-- CHECK IF LOGGED IN AND SHOW SEARCH BAR --}}
					@if (Auth::check() && Request::is('tags'))

						{{ Form::open(array('action' => array('TagsController@index'), 'method' => 'GET')) }}

							<div class="input-group">
								{{ Form::text('search', $search, ['class' => 'form-control', 'placeholder' => 'Search']) }}
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</div>
							</div>

						{{ Form::close() }}

					@endif
				</div>
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="">
	                    	<a class="page-scroll" href="">Create A Post</a>
	                    </li>

	                    {{-- CHECK IF LOGGED IN AND SHOW LOGOUT BUTTON --}}
	                    @if (Auth::check())

		                    <li class="">
		                        <a class="page-scroll" href="{{ action('HomeController@getLogout') }}">Logout</a>
		                    </li>

	                    @else

		                    <li class="">
		                        <a class="page-scroll" href="">Login</a>
		                    </li>
		                    <li class="">
		                        <a class="page-scroll" href="">Sign Up</a>
		                    </li>

	                    @endif
	                </ul>
	            </div>
	        </div>
	    </nav>
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

		@yield('bottom-script')
	</body>
</html>
