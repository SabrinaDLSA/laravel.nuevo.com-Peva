<nav class="menu navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if(\Auth::check())
      <a class="navbar-brand" href="{{route('home')}}">Welcome <small>{{\Auth::user()->username}}</small></a>
      @else
      <a class="navbar-brand" href="{{route('home')}}">Welcome</a>
      @endif
    </div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home')}}">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Music</a></li>
        <li><a href="#">Comics</a></li>
        @if(\Auth::check())
        <li><a href="{{route('profile')}}">Profile</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">List<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('profile')}}">Profile</a></li>
            <li class="divider"></li>
            <li><a href="/list/series">Series</a></li>
            <li><a href="/list/music">Music</a></li>
            <li><a href="/list/comics">Comics</a></li>
            <li class="divider"></li>
            <li><a href="/list/actors">Actors</a></li>
            <li><a href="/list/characters">Characters</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Insert<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/insert/serie">Serie</a></li>
            <li><a href="/insert/music">Music</a></li>
            <li><a href="/insert/comic">Comic</a></li>
            <li><a href="/insert/actor">Actor</a></li>
            <li><a href="/insert/character">Character</a></li>
          </ul>
        </li>
        @endif
        <?php $type = Config::get('enums.series_types') ?>
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
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
          <input type="text" class="form-control" id="fname" name="name" placeholder="Search" onkeydown="down()" onkeyup="myFunction()">
        </div>
      </form>
      @if(\Auth::check())
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('logout')}}">Logout</a></li>
      </ul>
      @else
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('login')}}">Login</a></li>
      </ul>
      @endif
    </div>
  </div>
</nav>
