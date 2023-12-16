@extends('layouts.appdashboard')

@section('content')
<style>
    .title {
        margin: 50px auto;
        font-size: 50px;
    }
    .round {
        margin: 20px auto;
        border-radius: 25px;
            }
    .space {
        margin: 30px 0;
    }
    /* .board {
        margin: 0 0 10px 0;
        border: 5px solid #0091ea;
    } */
    .board1 {
        border: 5px solid #004d40;
    }
</style>
    <div class="row ">
      <div class="col s12 board">
            <div class="col m4 s12">
                <p class="title black-text">Climate Quiz</p>
                <img class="round" src="img/quiz.png" alt="">
                <a href="{{ url('dashboard/index')}}" class="waves-effect waves-light btn light-blue darken-4 hoverable space">Play Now</a>
            </div>
            <div class="col m4 s12">
                <p class="title black-text">E-Calculator</p>
                <img class="round" src="img/calculator.png" alt="">
                <a href="{{ url('#')}}" class="waves-effect waves-light btn light-blue darken-4 hoverable space">Join the waitlist</a>
            </div>
            <div class="col m4 s12">
                <p class="title black-text">AI Detector</p>
                <img class="round" src="img/profiles.png" alt="">
                <a class="waves-effect waves-light btn light-blue darken-4 hoverable space">Join the waitlist</a>
            </div>
            <div class="col m4 s12">
                <p class="title black-text">Research Tool</p>
                <img class="round" src="img/market-research.png" alt="">
                <a class="waves-effect waves-light btn light-blue darken-4 hoverable space">Join the waitlist</a>
                
            </div>
            <div class="col m4 s12">
                <p class="title black-text">Market Place</p>
                <img class="round" src="img/shopping-online.png" alt="">
                <a class="waves-effect waves-light btn teal darken-4 hoverable space">Join the waitlist</a>
                
            </div>
            <div class="col m4 s12">
                <p class="title black-text">Forum</p>
                <img class="round" src="img/forum.png" alt="">
                <a href="{{ url('indexpost')}}" class="waves-effect waves-light btn teal darken-4 hoverable space">Join the conversation</a>
                
            </div>
        </div>
    </div>

@endsection