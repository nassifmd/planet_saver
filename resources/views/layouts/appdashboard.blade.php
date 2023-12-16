<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>AgricConnect</title>

  <!-- CSS  -->
  <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
  <link href="{{ asset('/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
  <link href=".{{ asset('/fontawesome/css/brands.css')}}" rel="stylesheet">
  <link href="{{ asset('fontawesome/css/solid.css')}}" rel="stylesheet">
  <link href="{{ asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>

    @yield('content')

</body>

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
