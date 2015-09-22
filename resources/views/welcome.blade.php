@extends('templates.main')
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.navig')
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<section>
  <div class="row-fluid">
    <div class="container" >
        <div class="col-md-12">
        <div align="center"><div align="center" id="muestro" class="ShowSearch"></div></div>
        </div>
    </div>
    <div class="welcome">
            @if(!empty($series))
        <div class="container">
            <div class="col-md-1"></div>
            <div class="col-md-10" >
              <div class="" align="center">
                  <h3>Series</h3>
                  @foreach($series as $s)
                  <div class="muestra_cuadrada">
                    <a href="serie/{{$s->slug}}"><img src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
                  </div>
                  @endforeach
              </div>
            </div>
            <div class="col-md-1"></div>
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
        @endif
        @if(!empty($actors))
        <div class="container">
          <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="" align="center">
                <h3>Actors</h3>
              </div>
              <div class="" align="center">
                @foreach($actors as $a)
                <div class="muestra_cuadrada">
                  <a href="actor/{{$a->slug}}"><img src="/storage/{{$a->Photo}}" alt="{{$a->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
                </div>
                @endforeach
              </div>
            </div>
            <div class="col-md-1"></div>
            <br>
            <div align="center"></div>
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
            @endif
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
