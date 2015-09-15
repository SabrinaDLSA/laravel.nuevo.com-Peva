@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
    <div class="container">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="" align="center">
          @foreach($characters as $s)
          <div class="muestra_cuadrada">
            <a href="character/{{$s->slug}}"><img src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="container">
      <div class="col-md-12">
        <br>
        <div class="" align="center">
          {!! $characters->render() !!}
        </div>
      </div>
    </div>
<br>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
