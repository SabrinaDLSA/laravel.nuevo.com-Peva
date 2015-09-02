@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
    <div class="container">
      <div class="col-md-8">
        <div class="" align="center">
          @foreach($characters as $s)
          <div class="muestra_cuadrada">
            <a href="series/{{$s->slug}}"><img src="{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
          </div>
          @endforeach
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
