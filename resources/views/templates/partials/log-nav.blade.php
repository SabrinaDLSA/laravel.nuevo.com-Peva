<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('home')}}">Welcome <small>{{\Auth::user()->username}}</small></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active"><a href="{{route('profile')}}">Profile<span class="sr-only">(current)</span></a></li>
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
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('logout')}}">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
