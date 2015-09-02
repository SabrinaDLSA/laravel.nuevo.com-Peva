@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
    <div class="container">
      <div class="col-md-8">
        <div class="" align="center">
          @foreach($actor as $s)
          <div class="muestra_cuadrada">
            <a href="actor/{{$s->slug}}"><img src="{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
          </div>
          @endforeach
          {!! $actor->render() !!}
        </div>
      </div>
    </div>
<br>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
