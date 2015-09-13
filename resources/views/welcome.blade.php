@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<section>
  <div class="row-fluid">
    <div class="container" id="muestro">
        <div class="col-md-12">
        <div align="center"><div align="center" class="ShowSearch"></div></div>
    </div>
    <div class="container">
        <div class="col-md-12" >
          <div class="" align="center">
            <h3>Series</h3>
          </div>
          <div class="" align="center">
            @foreach($series as $s)
            <div class="muestra_cuadrada">
              <a href="serie/{{$s->slug}}"><img src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
            </div>
            @endforeach
          </div>
        </div>
    </div>
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-8"><hr class="lineaBordeada"></div>
        <div class="col-md-2"></div>
        <div class="col-md-12">
        <div align="center">
              <br><a href="/series" class="btn btn-default">Wanna See more Series?</a>
          </div>
          </div>
      </div>
    </div>
    <div class="container">
        <div class="col-md-12">
          <div class="" align="center">
            <h3>Actors</h3>
          </div>
          <div class="" align="center">
            @foreach($actors as $a)
            <div class="MedioDiv">
              <a href="actor/{{$a->slug}}"><img src="/storage/{{$a->Photo}}" alt="{{$a->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
            </div>
            @endforeach
          </div>
        </div>
        <br><div align="center"></div>
    </div>
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-8"><hr class="lineaBordeada"></div>
        <div class="col-md-2"></div>
        <div class="col-md-12">
          <div align="center">
                <br>
                <a href="/actors" class="btn btn-default">Wanna See more Actors?</a>
            </div>
        </div>
        </div>
    </div>
  </div>
  <br>
  <br>
</section>
@include('templates.partials.footer')
@section('js')
<script type="text/javascript">
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
</script>
@endsection
@stop
