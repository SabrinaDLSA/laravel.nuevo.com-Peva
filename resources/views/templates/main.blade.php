<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cyborg/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('trumbowyg.min.css')}}">
    <script src="{{asset('js/animatescroll.min.js')}}"></script>
    <script src="{{asset('js/trumbowyg.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/data.css')}}">
    <link rel="stylesheet" href="{{asset('css/notes.css')}}">
    <script src="{{asset('js/search.js')}}"></script>
    <script src="{{asset('js/seasons.js')}}"></script>
  </head>
  @yield('header')
  @yield('navigation')
  <body>
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div align="center" class="Heid">
          @if(\Session::has('alert'))
              <div class="alert alert-dismissible alert-warning">
                  <button type="button" class="close" data-dismiss="alert">Close</button>
                  <strong>{{ Session::get('alert') }}</strong>
              </div>
          @endif
          @if(\Session::has('success'))
              <div class="alert alert-dismissible alert-success">
                  <button type="button" class="close" data-dismiss="alert">Close</button>
                  <strong>{{ Session::get('success') }}</strong>
              </div>
          @endif
      </div>
    </div>
    <div class="col-md-4"></div>
    @yield('content')
  </body>
  @yield('js')
  @yield('footer')
</html>
