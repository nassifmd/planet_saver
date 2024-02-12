@extends('layouts.appdashboard')

@section('content')
    <div class="row">
        <div class="col s6 board">
            <div class="col m4 s12">
                <p class="title text-black text-xl m-10">PlanetSaver</p>
                <img class="rounded-full m-5" src="img/quiz.png" alt="">
                <a href="{{ url('dashboard/index') }}" class="btn btn-light-blue-darken-4 hover:bg-blue-700 m-5">Play Now</a>
            </div>
            <div class="col m4 s12">
                <p class="title text-black text-xl m-10">Forum</p>
                <img class="rounded-full m-5" src="img/forum.png" alt="">
                <a href="{{ url('indexpost') }}" class="btn btn-teal-darken-4 hover:bg-teal-700 m-5">Join</a>
            </div>
        </div>
    </div>
@endsection
