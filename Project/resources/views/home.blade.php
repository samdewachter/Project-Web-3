@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <div class="box"><h1><span>Welcome to GameTrader!</span></h1></div>
            <div class="box-text"><p><span>Upload your games and trade them for other games you want to play!</span></p></div>
        </div>
    </div>

    <div class="container">
    
        <div class="row row-center">        
            <a class="hvr-grow" @if(!Auth::check()) href="{{ url('/register') }}" @endif>
            <div class="col-md-2 link col-center">
                    <h2>Register</h2><br>
                    <i class="fa fa-user-plus info-icon" aria-hidden="true"></i>
            </div>
            </a>
            @if (!Auth::guest())
                <a class="hvr-grow" href="account/addGame/{{ Auth::user()->id }}">
            @else
                <a class="hvr-grow" href="{{ url('/register') }}">
            @endif
                <div class="col-md-2 link col-center">
                        <h2>Add a game</h2><br>
                        <i class="fa fa-plus-square info-icon" aria-hidden="true"></i>
                </div>
                </a>
            <a class="hvr-grow" href="{{ url('/browse') }}">
            <div class="col-md-2 link col-center">
                    <h2>Browse</h2><br>
                    <i class="fa fa-search info-icon" aria-hidden="true"></i>
            </div>
            </a>
            <a class="hvr-grow" href="{{ url('/contact') }}">
            <div class="col-md-2 link col-center">
                    <h2>Contact</h2><br>
                    <i class="fa fa-envelope info-icon" aria-hidden="true"></i>
            </div>
            </a>
        </div>

    </div>

@endsection