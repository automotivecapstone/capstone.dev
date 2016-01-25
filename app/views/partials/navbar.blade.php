<nav class="nav-color navbar  navbar-embossed" role="navigation">
	
	<div class="nav-color navbar-inverse navbar-header">
		<a class="navbar-brand" href="{{ action('HomeController@showWelcome') }}">Grease Monkey</a>
	</div>
	
	<div class="nav-color navbar-inverse collapse navbar-collapse" id="navbar-collapse-01">
	    <ul class="nav navbar-nav navbar-left">
	     	<li><a href="{{ action('TutorialsController@index') }}">Tutorials</a></li>
	     	<li><a href="{{ action('QasController@index') }}">Q & A</a></li>
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
		{{ Form::close() }}
	</div>
</nav>
