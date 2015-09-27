@extends('templates.main')
@section('title'){{''}}@endsection
@section('header')
  @include('templates.partials.header')
@endsection
@section('content')
@include('templates.partials.navig')
  <div class="row-fluid">
    <div class="container">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="" align="center">
          {!! Form::open(['route'=>'mail.store', 'method' => 'POST']) !!}
          <fieldset>
              {!! Form::text('Name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
              <br>
              {!! Form::text('Email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
              <br>
              {!! Form::textarea('Message', null, ['placeholder' => 'Message', 'class' => 'form-control'])!!}
              <br>
              {!! Form::submit('Save Changes' , array('class' => 'btn btn-lg btn-block')) !!}
          </fieldset>
          {!! Form::close() !!}
        </div>
    </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
