@extends('templates.main')
@section('title'){{'Register'}}@endsection
@section('header')
  @include('templates.partials.header')
@endsection
@section('content')
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
        {!! Form::open(array('class' => 'Form', 'route' => 'register', 'onSubmit' => 'validate()', 'method' => 'post')) !!}
      {!! csrf_field() !!}
      <fieldset>
        <legend>Legend</legend>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" placeholder="Email">
             @if ($errors->has('email'))<p style="color:red;">{!!$errors->first('email')!!}</p>@endif
             <br>
          </div>
        </div>
        <div class="form-group">
          <label for="inputUsername" class="col-lg-2 control-label">Username</label>
          <div class="col-lg-10">
            <input type="text" name="username" value="{{ old('username') }}" class="form-control" id="inputUsername" placeholder="Username">
          @if ($errors->has('username'))<p style="color:red;">{!!$errors->first('username')!!}</p>@endif
          <br>
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-lg-2 control-label">Name</label>
          <div class="col-lg-10">
            <input id="inputName" type="name" name="name" value="{{ old('name') }}" placeholder="Name" class="form-control" value="{{ old('name') }}">
            @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
            <br>
          </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
              @if ($errors->has('password'))<p style="color:red;">{!!$errors->first('password')!!}</p>@endif
            <br>
            </div>
          </div>
          <div class="form-group">
          <label for="ConfirmPassword" class="col-lg-2 control-label">Confirm Password</label>
            <div class="col-lg-10">
            <input id="ConfirmPassword" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
              @if ($errors->has('password_confirmation'))<p style="color:red;">{!!$errors->first('password_confirmation')!!}</p>@endif
              <br>
            <div class="checkbox">
              <label>
                <input name="terms" id="terms" type="checkbox">Accept<a href="#"> Terms and Conditions</a>
                @if ($errors->has('terms'))<p style="color:red;">{!!$errors->first('terms')!!}</p>@endif
                <br>
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button id="Form" type="submit" class="btn btn-primary">Register</button>
          </div>
        </div>
      </fieldset>
      {!! Form::close() !!}
  </div>
  <div class="col-md-2"></div>
</div>
</div>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
