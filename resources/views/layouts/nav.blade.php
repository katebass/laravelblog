<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="{{ url('/') }}">Home</a>
      <a class="nav-link" href="#">New features</a>
      <a class="nav-link" href="#">Press</a>
      <a class="nav-link" href="#">New hires</a>
      <a class="nav-link" href="{{ url('/about') }}">About</a>
      
      @if(Auth::check())
      <a class="nav-link ml-auto" href="#">Hello, {{ Auth::user()->name }}!</a>
      <a class="nav-link ml-auto" href="{{ route('logout') }}">Logout</a>
      @else
      <a class="nav-link ml-auto" href="register">Sign up</a>
      <a class="nav-link ml-auto" href="{{ route('login') }}">Login</a>
      @endif
    </nav>
  </div>
</div>

<div class="blog-header">
  <div class="container">
    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">An example blog template built with Bootstrap.</p>
  </div>
</div>