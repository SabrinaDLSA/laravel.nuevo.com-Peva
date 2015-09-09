<h3>Resultados de la búsqueda....</h3>
@if ( $searchActors->first() || $searchSeries->first() )
  @foreach($searchSeries as $s)
    {{$s->Name}}
    <br>
  @endforeach
  @foreach($searchActors as $a)
    {{$a->Name}}
    <br>
  @endforeach
  {!! $searchActors->render() !!}
@else

  <h3>There are no results!</h3>

@endif
