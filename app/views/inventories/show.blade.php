@extends('layouts.home')

@section('content')

    <header>
        <div class = 'container'>
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="font-magneto-item">{{{$item->item_name}}}</span>
                        <img class="img-responsive" src="{{{$item->image}}}" alt="GreaseMonkey">
                        <hr class="horizontalrule">
                        <span class="skills">${{{$item->price}}}</span>
                        <p id = "backbutton"><a class ="btn btn-primary btn-lg" href="{{action('InventoriesController@index')}}">Continue Shopping</a></p>
                    </div>
                </div>
            </div>
       </div>
    </header>

@stop