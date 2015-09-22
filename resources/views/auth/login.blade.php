@extends('templates.main')
@section('title'){{'Login'}}@endsection
@section('header')
@include('templates.partials.header')
@endsection
@section('navigation')
@include('templates.partials.navig')
@endsection
@section('content')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="col-md-2"></div>
          <div class="col-md-8">
            <form class="form-horizontal" method="POST" action="{{route('login')}}">
              {!! csrf_field() !!}
                  @if ($errors->has('email'))<p style="color:red;">Sorry but...{!!$errors->first('email')!!}</p>@endif
              <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                  <label for="inputEmail" class="col-lg-2 control-label">@lang('validation.attributes.email')</label>
                  <div class="col-lg-6">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-6">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember"> Remember Me
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-6 col-lg-offset-2">
                    <a href="{{route('register')}}">Wanna create an account?</a>
                    <br>
                    <a href="#">Lost your password?</a>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <div class="col-md-2">

          </div>
      <div class=""></div>
    </div>
    <div class="col-md-2">

    </div>
  </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
