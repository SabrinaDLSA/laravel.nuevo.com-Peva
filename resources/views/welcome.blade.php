@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<section>
  <div class="row-fluid">
    <div class="container">
        <div class="col-md-12">
          <div class="" align="center">
            <h3>Last Series</h3>
          </div>
              @foreach($series as $s)
              <div class="muestra_cuadrada">
                <a href="serie/{{$s->slug}}"><img src="{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
              </div>
              @endforeach
        </div>
        <br>
        <div align="center">
                  {!! $series->render() !!}
      </div>
    </div>
    <div class="container">
        <div class="col-md-12">
          <div class="" align="center">
            <h3>Last Actors</h3>
          </div>
              @foreach($actors as $a)
              <div class="muestra_cuadrada">
                <a href="actor/{{$a->slug}}"><img src="{{$a->Photo}}" alt="{{$a->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
              </div>
              @endforeach
        </div>
        <br>
        <div align="center">
                  {!! $actors->render() !!}
      </div>
    </div>
  </div>
  <br>
  <br>
</section>
@include('templates.partials.footer')
@stop
