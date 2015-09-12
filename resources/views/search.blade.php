
<div class="" id="subtitle" align="center">
  Searching.....
</div>
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
Sorry but...<small><br>There are no results to what you are looking for!</small>
</div>
@endif
