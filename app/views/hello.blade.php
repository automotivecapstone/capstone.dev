@extends('layouts.home')



@section('content')
{{-- 
	<header>

		<div class="title">
			<h1><span class="font-magneto">Grease Monkey</span></h1>
			<img src="/css/monkey-transparent.png" alt="GreaseMonkey">
		</div>

	</header> --}}


<body>
	<header>
        <div class = 'container'>
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="font-magneto">Grease Monkey</span>
                        <img class="img-responsive" src="/css/monkey-transparent.png" alt="GreaseMonkey">
                        <hr class="horizontalrule">
                        <span class="skills">An Automotive Resource for the Rest of Us</span>
                    </div>
                </div>
            </div>
       </div>
    </header>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>What We Do</h2>
                    <hr class = "horizontalrule">
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-4 col-sm-4 text-center">
                    <div class="service-item">
                        <a href="{{ action('TutorialsController@index') }}">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-wrench fa-stack-1x iconcolor"></i>
                            </span>
                        </a>
                        <h4>
                            <strong>Tutorials</strong>
                        </h4>
                        <p>Share your knowledge.</p>
                        <p> Post a tutorial.</p>
                        <a href="{{ action('TutorialsController@index') }}" class="btn ">Learn More</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 text-center">
                    <div class="service-item">
                        <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-users fa-stack-1x iconcolor"></i>
                    </span>
                        <h4>
                            <strong>Ask a Question</strong>
                        </h4>
                        <p>Stuck in a rut?</p>
                        <p> Someone here can help.</p>
                        <a href="#" class="btn ">Learn More</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 text-center">
                    <div class="service-item">
                        <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-wrench fa-stack-1x iconcolor"></i>
                    </span>
                        <h4>
                            <strong>Need a pro?</strong>
                        </h4>
                        <p>Chat with one of our mechanics</p>
                        <a href="#" class="btn ">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Us</h2>
                    <hr class="horizontalrule">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>GreaseMonkey started as a group of people wanting to find a comminunity of fellow DIY mechanics, and experts who knew what they were doing under the hood.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a professional looking to show off your skills or a n00b who has never picked up a wrench, this site is for you.</p>
                </div>
            </div>
        </div>
    </section>

</body>
@stop