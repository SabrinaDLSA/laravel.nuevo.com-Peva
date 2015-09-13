@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
    <div class="container">
      <div class="col-md-12">
        <div class="" align="center">
          @foreach($series as $s)
          <div class="muestra_cuadrada">
            <a href="/serie/{{$s->slug}}"><img src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-12">
        <div class="" align="center">
          {!! $series->render() !!}
        </div>
      </div>
    </div>
<br>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
