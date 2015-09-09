<nav class="navbar navbar-inverse" id="navi">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if(\Auth::check())
      <a class="navbar-brand" href="{{route('home')}}">{{\Auth::user()->username}}</a>
      @else
      <a class="navbar-brand" href="{{route('home')}}">Series.com</a>
      @endif
  </div>
  <?php $type = Config::get('enums.series_types') ?>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home')}}">Home<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Series <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            @foreach($type as $genre)
              <li><a href="/series/genre/{{$genre}}">{{$genre}}</a></li>
            @endforeach
            <li><a href="/series">All</a></li>
            <li class="divider"></li>
            <li><a href="{{route('actors')}}">Actors</a></li>
            <li><a href="{{route('characters')}}">Characters</a></li>
            <li class="divider"></li>
            <li><a href="/series/genre/popular">Popular Ones</a></li>
          </ul>
        </li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Comics</a></li>
      </ul>
      <div class="navbar-form navbar-left">
        <div class="form-group">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
          <input type="text" class="form-control" id="search-input" name="name" placeholder="Search" onkeydown="down()" onkeyup="up()">
        </div>
      </div>
        @if(Auth::check())
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('logout')}}">Logout</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('profile')}}">Profile</a></li>
            </ul>
          @else
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('login')}}">Login</a></li>
          </ul>
          @endif
    </div>
  </div>
</nav>
