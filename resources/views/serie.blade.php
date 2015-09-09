@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        @foreach($serie as $s)
        <h2>{{$s->Name}}</h2>
        <img src="{{$s->Photo}}" alt="{{$s->Name}}" class="img-responsive img-thumbnail" />
        @endforeach
      </div>
    </div>
    <div class="col-md-4">
      <div class="" align="center">
          <h3>Characters</h3>
          <br>
      </div>
      <div class="" align="center">
        @foreach($characters as $character)
        <div class="muestra_cuadrada">
          <a href="/character/{{$character->slug}}"><img src="{{$character->Photo}}" alt="{{$character->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
        </div>
        @endforeach
      </div>
      <div align="center">
        <hr>
        <br>
        <a href="/characters/{{$s->slug}}" class=" btn btn-default btn-sm">Wanna see more Characters?</a>
      </div>
    </div>
  </div>
    <div class="container">
      <div class="col-md-8">
        <hr>
        <div class="" align="center">
          @for ($x = 1; $x <= $s->Seasons ; $x++)
                  <a href="/serie/{{$s->slug}}/{{$x}}" class="btn btn-default btn-lg">Season {{$x}}</a>
                  @if($x%6 == 0)
                    <br>
                    <br>
                  @endif
          @endfor
          <hr>
          <p>{{$s->Description}}</p>
        </div>
      </div>
    <div class="col-md-4">
      <div class="" align="center">
        <br>
        <br>
        <table class="table table-striped table-hover ">
          <thead>
            <div class="" align="center">
              <th class="text-center">
                {{$s->Name}}
              </th>
            </div>
          </thead>
          <tbody>
              <tr class="active">
                <td><label for="">Name: </label>   {{$s->Name}}</td>
              </tr>
              <tr class="active">
                <td><label for="">Genre: </label>   {{$s->Genre}}</td>
              </tr>
              <tr class="active">
                <td><label for="">Start: </label>   {{$s->Start}}</td>
              </tr>
              <tr class="active">
                <td><label for="">Finish: </label>   {{$s->Finish}}</td>
              </tr>
              <tr class="active">
                <td><label for="">Seasons: </label>   {{$s->Seasons}}</td>
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
