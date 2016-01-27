@extends('layouts.store')

@section('content')
	<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="font-magneto-item">Go On.</span>
                        <img class="img-responsive" src="/css/monkey-transparent.png" alt="GreaseMonkey">
                        <hr class="horizontalrule">
                        <span class="skills">Get your monkey on.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Shop</h2>
                    <hr class="horizontalrule">
                </div>
            </div>
            <div class="row">
                @foreach($items as $item)
                <div class="col-sm-4 portfolio-item">
                    <a href="{{{action('InventoriesController@show', $item->id)}}}" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{{$item->image}}}" class="img-responsive" alt="{{{$item->name}}}">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop