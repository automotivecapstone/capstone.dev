@section('content')

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
		<div class="container-fluid">
			<div class="navbar-header">
	   			<a class="navbar-brand page-scroll" href="{{ action('HomeController@showWelcome') }}">Captain Capstone</a>
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
	            	<ul class="nav navbar-nav navbar-left">
	            		<li>
	            			<a href="{{ action('TutorialsController@index') }}">Tutorials</a>
	            		</li>
	            		<li>
	            			<a href="{{ action('QasController@index') }}">Q/A</a>
	            		</li>
	            	</ul>
	                <ul class="nav navbar-nav navbar-right">

	                    {{-- CHECK IF LOGGED IN AND SHOW LOGOUT BUTTON --}}
	                    @if (Auth::check())
		                    <li class="">
		                        <a class="page-scroll" href="{{ action('HomeController@getLogout') }}">Logout</a>
		                    </li>
	                    @else
		                    <li class="">
		                        <a class="page-scroll" href="{{ action('HomeController@getLogin') }}">Login</a>
		                    </li>
		                    <li class="">
		                        <a class="page-scroll" href="{{ action('UsersController@create') }}">Sign Up</a>
		                    </li>
	                    @endif
	                </ul>
	            </div>
	        </div>
	    </nav>