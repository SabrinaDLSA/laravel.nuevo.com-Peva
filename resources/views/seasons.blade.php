@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
    <div class="container">
            <div class="col-md-8">
                <div class="" align="center">
                  <h2>{{$season->Name}}</h2>
                  <hr>
                  <img src="/storage/{{$season->Photo}}" alt="{{$season->Name}} " class="img-responsive img-thumbnail" />
                  <hr>
              </div>
            </div>
            <div class="col-md-4"></div>
      </div>
      <div class="container">
        <div class="text-align" align="center">
          <div class="col-md-8"><p>{{$season->Description}}</p>
            <div class="" align="center">
              @foreach($episodes as $s)
                @if(!empty($s->Name) )
                  <div class="muestra_cuadrada">
                    Episode {{$s->Episode}}
                    <img src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/>
                  </div>
                  @endif
              @endforeach
            </div>
          </div>
            <div class="col-md-4">
                  <table class="table table-striped table-hover">
                      <thead>
                        <div class="" align="center">
                          <th class="text-center">
                            {{$season->Name}}
                          </th>
                        </div>
                      </thead>
                      <tbody>
                        <tr class="active">
                          <td><label for="">Serie: </label>{{ $serie->Name }}</td>
                        </tr>
                        <tr class="active">
                          <td><label for="">Name: </label>{{ $season->Name }}</td>
                        </tr>
                        <tr class="active">
                          <td><label for="">Season: </label>{{ $season->Season }}</td>
                        </tr>
                        <tr class="active">
                          <td><label for="">Episodes: </label>{{ $season->Episodes }}</td>
                        </tr>
                      </tbody>
                  </table>
            </div>
          </div>
          </div>
</div>
<br>
<br>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
