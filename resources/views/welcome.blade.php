@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<section>

  <div class="row-fluid">
    <div class="container">
        <div class="col-md-12">
              @foreach($series as $s)
              <div class="muestra_cuadrada">
                <a href="series/{{$s->slug}}"><img src="{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
              </div>
              @endforeach
        </div>
        <br>
        <div align="center">
                  {!! $series->render() !!}
      </div>
    </div>
  </div>
  <br>
  <br>
</section>
@include('templates.partials.footer')
@stop
