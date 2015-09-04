@extends('templates.main')
@section('title'){{'Register'}}@endsection
@section('content')
@include('templates.partials.header')
<br>
<div class="row-fluid">
  <div class="container">
    <div class="col-md-2">
      <div class="col-md-8"></div>
      <div class="col-md-4">
        <a href="{{route('home')}}"><i class="fa fa-arrow-left fa-3x"></i></a>
      </div>
    </div>
    <div class="col-md-6">
      <form class="form-horizontal" method="POST" action="{{route('register')}}">
      {!! csrf_field() !!}
      <fieldset>
        <legend>Legend</legend>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputUsername" class="col-lg-2 control-label">Username</label>
          <div class="col-lg-10">
            <input type="text" name="username" value="{{ old('username') }}" class="form-control" id="inputUsername" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-lg-2 control-label">Name</label>
          <div class="col-lg-10">
            <input id="inputName" type="name" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control" value="{{ old('name') }}">
          </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
          <label for="ConfirmPassword" class="col-lg-2 control-label">Confirm Password</label>
            <div class="col-lg-10">
            <input id="ConfirmPassword" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
            <div class="checkbox">
              <label>
                <input type="checkbox">Accept<a href="#"> Terms and Conditions</a>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="col-md-2"></div>
</div>
</div>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
