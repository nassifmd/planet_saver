@extends('layouts.app1')
@include('inc.navbar')

@section('content')

<div class="backx">
        <div class="container">
        <div class="section">
    
            <!--   Icon Section   -->
            <div class="row">
            <div class="col s12 m12" style="padding-top: 50px">
                <div class="icon-block">
                <h2 class="new-blue-text center">Our Products</h2>
    
                <p class="new-blue-text center">Explore our innovative products</p>
                </div>
            </div>
            </div>
    
        </div>
        </div>
  </div>

    <div class="backx">
        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image">
                            <img style="width: 100%; padding: 50px;" src="./img/calculator.png">
                            <span class="card-title blue-text">Emission Calculator</span>
                            <a href="{{ route('register') }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">exit_to_app</i></a>
                          </div>
                          <div class="card-content">
                            <p>Calculate, Set goal, Reduce carbon footprint, offset, Advocate and get Approved</p>
                          </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image">
                            <img style="width: 100%; padding: 50px;" src="./img/shopping-cart.png">
                            <span class="card-title blue-text">E-Market</span>
                            <a href="{{ route('register') }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">exit_to_app</i></a>
                          </div>
                          <div class="card-content">
                            <p>Find and trade with commodity producers. You have the option of interacting virtually with your producer to gain more trust.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image">
                            <img style="width: 100%; padding: 50px;" src="./img/console.png">
                            <span class="card-title blue-text">Climate Game</span>
                            <a href="{{ route('register') }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">exit_to_app</i></a>
                          </div>
                          <div class="card-content">
                            <p>Get to play the first climate-smart game that allows you to build you own world and implement our climate curriculum to save it from the adverse effect of climate change.</p>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image">
                            <img style="width: 100%; padding: 50px;" src="./img/profiles.png">
                            <span class="card-title blue-text">Climate Curriculum</span>
                            <a href="{{ route('register') }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                          </div>
                          <div class="card-content">
                            <p>Our climate-smart Curriculum is tailor made to to promote climate resilience among smallholder farmers</p>
                          </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image">
                            <img style="width: 100%; padding: 50px;" src="./img/market-research.png">
                            <span class="card-title blue-text">Research and Analytics</span>
                            <a href="{{ route('register') }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                          </div>
                          <div class="card-content">
                            <p>We conduct research for organisations.</p>
                          </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                          <div class="card-image">
                            <img style="width: 100%; padding: 50px;" src="./img/quiz.png">
                            <span class="card-title blue-text">Climate Quiz</span>
                            <a href="{{ route('register') }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                          </div>
                          <div class="card-content">
                            <p>Learn how to contribute to solving climate issues in your own way and be an advocate now!</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="backx">
        <div class="container">
            <div class="section"> 
                <p class="new-blue-text" style="font-weight: bold; font-size:20px">Frequently Asked Questions</p>
                <ul class="collapsible popout">
                    <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>How do I Access these applications</div>
                    <div class="collapsible-body"><span>We are currently working on making the applications available to the public as soon as possible.</span></div>
                    </li>
                    <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>How do I contribute to these applications</div>
                    <div class="collapsible-body"><span>Contact <a href="nassiff.dev"><b>Nassif Dauda</b></a> for more detail on how to contribute to lunching the apps.</span></div>
                    </li>
                    <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>What do I do to promote this initiative</div>
                    <div class="collapsible-body"><span>We advise that you share our post on social media. <a href="https://facebook.com/agricconnect"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>|<a href="https://twitter.com/agricconnect"><i class="fa-brands fa-square-twitter fa-2xl"></i></a>|<a href="https://linkedin.com/agricconnect"><i class="fa-brands fa-linkedin fa-2xl"></i></a>|<a href="https://instagram.com/agricconnect"><i class="fa-brands fa-square-instagram fa-2xl"></i></a></span></div>
                    </li>
                </ul>
            </div>      
        </div>
    </div>


@endsection