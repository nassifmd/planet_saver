<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>AgricConnect</title>

  <!-- CSS  -->
  <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
  <link href="{{ asset('fontawesome/css/fontawesome.css')}}" rel="stylesheet">
  <link href="{{ asset('fontawesome/css/brands.css')}}" rel="stylesheet">
  <link href="{{ asset('fontawesome/css/solid.css')}}" rel="stylesheet">
  <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    @yield('content')


</body>

<footer class="page-footer new-blue">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">AgricConnect</h5>
            <p class="grey-text text-lighten-4">AgricConnect International is a social venture working to eradicate poverty and improve food security by leveraging technology to connect smallholder farmers to ready markets while promoting climate-smart and sustainable agriculture. Our international agri-business community and platform supports rural and agri-market development in Ghana and beyond. 
            </p>
  
  
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Navigation</h5>
            <ul>
              <li><a class="white-text" href="{{ url('index')}}">Home</a></li>
              <li><a class="white-text" href="{{ url('about')}}">About</a></li>
              <li><a class="white-text" href="{{ url('product')}}">Products</a></li>
              <li><a class="white-text" href="{{ url('project')}}">Projects</a></li>
              <li><a class="white-text" href="{{ url('contact')}}">Contact</a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Sign Up</h5>
            <a href="#" class="waves-effect waves-light btn blue darken-1">Get updated</a>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        <a class="brown-text text-lighten-3" href="http://agricconnect.org">&#169; 2023 AgricConnect</a>
        </div>
      </div>
    </footer>

  <!--  Scripts-->
  <script src="{{ asset('https://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
  <script src="{{ asset('js/materialize.js')}}"></script>
  <script src="{{ asset('js/init.js')}}"></script>
  <script>
    $(document).ready(function(){

      $(window).scroll(function(){

        if($(window).scrollTop()>300){
          $('nav').addClass('white');
        }else{
          $('nav').removeClass('white');
        }
      })
    })

  $(document).ready(function(){
    $('.slider').slider();
  });

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>
  
  </body>
</html>
