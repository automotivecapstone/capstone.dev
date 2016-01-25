<nav class="nav-color navbar  " role="navigation">
	
	<div class="nav-color navbar-inverse navbar-header">
		<a class="navbar-brand" href="{{ action('HomeController@showWelcome') }}">Grease Monkey</a>
	</div>
	
	<div class="nav-color navbar-inverse collapse navbar-collapse" id="navbar-collapse-01">
	    <ul class="nav navbar-nav navbar-left">
	     	<li><a href="{{ action('TutorialsController@index') }}">Tutorials</a></li>
	     	<li><a href="{{ action('QasController@index') }}">Q &amp; A</a></li>
	    </ul>

		<div >
			{{ Form::open(array('action' => array('HomeController@search'), 'method' => 'GET', 'class' => ' ')) }}
				<div class="form-group">
					<div class="input-group home-search">
						{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search a Topic']) }}
							<span class="input-group-btn">
								<button type="submit" class="btn"><span class="fa fa-search"></span></button>
							</span>
						{{ Form::close() }}
					</div>
				</div>
		</div>
		
		{{-- <div class="nav-color  navbar-collapse" id=""> --}}
	    	<ul class="nav navbar-nav navbar-right">
	        {{-- CHECK IF LOGGED IN AND SHOW LOGOUT BUTTON --}}
		       	@if (Auth::check())
		        	<li><a class="page-scroll" href="{{action('UsersController@show', Auth::user()->id)}}">Profile</a></li>
			    	<li><a class="page-scroll" href="{{ action('HomeController@getLogout') }}">Logout</a></li>
		        @else
			        <li><a class="page-scroll" href="{{ action('HomeController@getLogin') }}">Login</a></li>
			        <li><a class="page-scroll" href="{{ action('UsersController@create') }}">Sign Up</a></li>
		        @endif
	    	</ul>
		{{-- </div>< --}}!{{-- -- /.navbar-collapse --> --}}
	          
	</div>
</nav>

