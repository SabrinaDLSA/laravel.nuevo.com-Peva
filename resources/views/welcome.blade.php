@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<section>
  <div class="row-fluid">
    <div class="container">
        <div class="col-md-12">
        <div align="center">
          <div class="ShowSearch" id="muestro">
            Muestro
          </div>
      </div>
    </div>
    <div class="container">
        <div class="col-md-12">
          <div class="" align="center">
            <h3><a href="/series">Series</a></h3>
          </div>
              @foreach($series as $s)
              <div class="muestra_cuadrada">
                <a href="serie/{{$s->slug}}"><img src="{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
              </div>
              @endforeach
        </div>
        <br>
        <div align="center">
      </div>
    </div>
    <div class="container">
        <div class="col-md-12">
          <div class="" align="center">
            <h3><a href="/actors">Actors</a></h3>
          </div>
          <div class="">
            @foreach($actors as $a)
            <div class="MedioDiv">
              <a href="actor/{{$a->slug}}"><img src="{{$a->Photo}}" alt="{{$a->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
            </div>
            @endforeach
          </div>
        </div>
        <br>
        <div align="center">
      </div>
    </div>
  </div>
  <br>
  <br>
</section>
@include('templates.partials.footer')
@section('js')
<script type="text/javascript">
var timer;
function myFunction() {
  timer = setTimeout(function(){
    var x = $('#fname').val();
    if( x.length > 0 )
    {
        $.post('http://laravel.serie.com/executeSearch',{ x: x }, function(markup){
            $('#muestro').html(markup);
        });
          //$("#muestro").text(x)
    }
  },500);

}
</script>
@endsection
@stop
