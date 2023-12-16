<nav>
  <div class="nav-wrapper">
    <a href="{{ url('index')}}" class="brand-log">
      <img class="logo white" src="/img/logo.png" alt="logo">
    </a>
    <a href="#" class="sidenav-trigger blue-text text-darken-2 right" data-target="mobile-links">
      <i class="material-icons">menu</i>
    </a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
		<li><a class="new-blue-text" style="font-weight: 800;" href="{{ url('indexpost')}}">Posts</a></li>
	    <li><a class="new-blue-text" style="font-weight: 800;" href="{{ url('create')}}">Create</a></li>
      <!-- LogIn and Register -->
      @if (Route::has('login'))
						@auth
							<li><a href="{{ url('/dashboard') }}" class="waves-effect waves-light btn blue darken-1">Dashboard</a></li>
						@else
						<li><a href="{{ route('login') }}" class="waves-effect waves-light btn blue darken-1">Manage your emissions</a></li>

							{{-- @if (Route::has('register'))
								<li><a href="{{ route('register') }}" class="waves-effect waves-light btn blue darken-1">Register</a></li>
							@endif --}}
						@endauth

					@endif
<!-- LogIn and Register End -->
    </ul>
  </div>

</nav>

<!-- Sidenav -->
<ul class="sidenav" id="mobile-links">
  <ul><li><a href="#"><img class="responsive-img size" src="./img/logo.png"></a></li></ul>
    <li><a class="navtxt" href="{{ url('forum.create')}}">Create</a></li>
    <!-- LogIn and Register -->
    @if (Route::has('login'))
						@auth
							<li><a href="{{ url('/dashboard') }}" class="waves-effect waves-light btn blue darken-1">Dashboard</a></li>
						@else
						<li><a href="{{ route('login') }}" class="waves-effect waves-light btn blue darken-1">Manage your emissions</a></li>

							{{-- @if (Route::has('register'))
								<li><a href="{{ route('register') }}" class="waves-effect waves-light btn blue darken-1">Register</a></li>
							@endif --}}
						@endauth

					@endif
<!-- LogIn and Register End -->
</ul>