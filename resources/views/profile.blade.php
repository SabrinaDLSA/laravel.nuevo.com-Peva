@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.log-nav')
<section>
  <div class="row-fluid">
    <div class="container">
      @if(\Session::has('alert'))
            <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">Close</button>
                <strong>{{ Session::get('alert') }}</strong>
            </div>
        @endif
          <div class="col-md-2">
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-2">
      </div>
    </div>
  </div>
</section>
@include('templates.partials.footer')
@stop
