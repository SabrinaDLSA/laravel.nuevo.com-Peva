
<div class="" id="subtitle" align="center">
  Searching.....
</div>
<button id="close" onclick="showWelcome()" class="btn btn-default">Close</button>
@if ( $searchActors->first() || $searchSeries->first() )
@foreach($searchSeries as $s)
  <div class="muestra_cuadrada">
    <a href="serie/{{$s->slug}}"><img src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
  </div>
  @endforeach
@foreach($searchActors as $a)
  <div class="muestra_cuadrada">
    <a href="serie/{{$a->slug}}"><img src="/storage/{{$a->Photo}}" alt="{{$a->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
  </div>
  @endforeach
  {!! $searchActors->render() !!}
@else
<div class="" id="SemiSubtitle" align="center">
Sorry but...<small><br>There are no results for what you are searching!</small>
</div>
@endif
