<nav class="navbar navbar-inverse navbar-embossed" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
			<span class="fa fa-bars"></span>
		</button>

		<a class="nav-text navbar-brand" href="{{ action('HomeController@showWelcome') }}"><img class="icon" src="/css/monkey-icon-taupe-on-cream.png">Grease Monkey</a>

	</div>
	<div class="collapse navbar-collapse" id="navbar-collapse-01">
		<ul class="nav navbar-nav navbar-left">
			@if(!Auth::check())
				<li data-step="1" data-intro = "Start by logging in or creating a new account. Once that is done, you'll have full access to the site and be able to not only view our tutorials and question, but also comment on them or post your own. Not ready for that kind of commitment? Totally fine. You can always browse our content without being a registered user."><a href="{{ action('HomeController@getLogin') }}">Log In</a></li>
				<li><a href="{{ action('UsersController@create') }}">Sign Up</a></li>
				<li data-step="2" data-intro="Browse through our tutorials and questions with these two buttons!"><a href="{{ action('TutorialsController@index') }}">Tutorials</a></li>
				<li><a href="{{ action('QasController@index') }}">Q &amp; A</a></li>

		</ul>
		<ul class = "nav navbar-nav navbar-right">
			<li data-step="3" data-intro="Shop for some sweet Frank the Greasemonkey swag.">
				<a href="{{action('InventoriesController@index')}}">Merch</a>
			</li>
		{{ Form::open(array('action' => array('HomeController@search'), 'method' => 'GET', 'class' => 'navbar-form navbar-right')) }}
			<div class="form-group">
				<div class="input-group" data-step="4" data-intro="Search our site for topics you're interested in.">
					{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search']) }}
					<span class="input-group-btn">
						<button type="submit" class="btn"><span class="fa fa-search"></span></button>
					</span>
				</div>

			</div>
		{{ Form::close() }}
		</ul>
			@endif
			@if(Auth::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-step="1" data-intro="Here is where you can quickly any account information. View your profile and your content, checkout any new items related to your interests, and edit your profile information and your interests. Easy as pie.">Account <i class="fa fa-user"></i><b class="caret"></b></a>
					<span class="dropdown-arrow"></span>
					<ul class="dropdown-menu">
						<li><a href="{{ action('UsersController@show', Auth::user()->id) }}">Profile</a></li>
						<li><a href="{{ action('HomeController@usersHome') }}">Newsfeed</a></li>
						<li><a href="{{action('UsersController@edit', Auth::id())}}">Account Settings</a></li>
						<li class="divider"></li>
						<li><a href="{{ action('HomeController@getLogout') }}">Log Out</a></li>
					</ul>
				</li>
				<li><a href="{{ action('TutorialsController@index') }}" data-step="2" data-intro="Browse through our tutorials and questions with these two buttons!">Tutorials</a></li>
				<li><a href="{{ action('QasController@index') }}">Q &amp; A</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus-circle"></i>
						<b class="caret"></b></a>
					<span class="dropdown-arrow"></span>
					<ul class="dropdown-menu">
						<li><a href="{{ action('TutorialsController@create') }}">New Tutorial</a></li>
						<li><a href="{{ action('QasController@create') }}">New Q &amp; A</a></li>
					</ul>
				</li>
			
		</ul>
		<ul class = "nav navbar-nav navbar-right">
			<li data-step="3" data-intro="Shop for some sweet Frank the Greasemonkey swag.">
				<a href="{{action('InventoriesController@index')}}">Merch</a>
			</li>
		{{ Form::open(array('action' => array('HomeController@search'), 'method' => 'GET', 'class' => 'navbar-form navbar-right')) }}
			<div class="form-group">
				<div class="input-group" data-step="4" data-intro="Search our site for topics you're interested in.">
					{{ Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Search']) }}
					<span class="input-group-btn">
						<button type="submit" class="btn"><span class="fa fa-search"></span></button>
					</span>
				</div>

			</div>
		{{ Form::close() }}
		</ul>
		@endif
	</div>
</nav>
