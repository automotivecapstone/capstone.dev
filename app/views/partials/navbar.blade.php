<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
			<span class="fa fa-bars"></span>
		</button>
		<a class="navbar-brand" href="{{ action('HomeController@showWelcome') }}">Grease Monkey</a>
	</div>
	<div class="collapse navbar-collapse" id="navbar-collapse-01">
		<ul class="nav navbar-nav navbar-left">
			@if(!Auth::check())
				<li><a href="{{ action('HomeController@getLogin') }}">Log In</a></li>
				<li><a href="{{ action('UsersController@create') }}">Sign Up</a></li>
				<li><a href="{{ action('TutorialsController@index') }}">Tutorials</a></li>
				<li><a href="{{ action('QasController@index') }}">Q & A</a></li>
			@endif
			@if(Auth::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
					<span class="dropdown-arrow"></span>
					<ul class="dropdown-menu">
						<li><a href="{{ action('UsersController@show', Auth::user()->id) }}">Profile</a></li>
						<li><a href="{{ action('UsersController@index') }}">Your Stuff!</a></li>
						<li><a href="">Account Settings</a></li>
						<li class="divider"></li>
						<li><a href="{{ action('HomeController@getLogout') }}">Log Out</a></li>
					</ul>
				</li>
				<li><a href="{{ action('TutorialsController@create') }}">Tutorials +</a></li>
				<li><a href="{{ action('QasController@create') }}">Q & A +</a></li>
			@endif
		</ul>
		{{ Form::open(array('action' => array('HomeController@search'), 'method' => 'GET', 'class' => 'navbar-form navbar-right')) }}
			<div class="form-group">
				<div class="input-group">
					{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search']) }}
					<span class="input-group-btn">
						<button type="submit" class="btn"><span class="fa fa-search"></span></button>
					</span>
				</div>

			</div>
		{{ Form::close() }}
	</div>
</nav>
