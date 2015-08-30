@extends('templates.main')
@section('title'){{'Login'}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navigate')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form class="form-horizontal" method="POST" action="{{route('login')}}">
        {!! csrf_field() !!}
        <fieldset>
          <legend>Login</legend>
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="remember"> Remember Me
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <a href="{{route('register')}}">Wanna create an account?</a>
              <br>
              <a href="#">Lost your password?</a>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
