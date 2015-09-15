@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        <img src="/storage/{{$character->Photo}}" alt="{{$character->Name}}" class="img-responsive img-thumbnail" />
        <h3>{{$character->Name}}</h3>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
    <div class="container">
      <div class="col-md-8">
        <div class="" align="center">
          <hr>
          <p>{{$character->Description}}</p>
        </div>
      </div>
    <div class="col-md-4">
      <div class="" align="center">
        <table class="table table-striped table-hover ">
          <thead>
            <div class="" align="center">
              <th class="text-center">
                {{$character->Name}}
              </th>
            </div>
          </thead>
          <tbody>
              <tr class="active">
                <td><label for="">Name: </label>   {{$character->Name}}</td>
              </tr>
              <tr class="active">
                <td><label for="">Genre: </label>   {{$character->Status}}</td>
              </tr>
              @foreach($actors as $actor)
              <tr class="active">
                <td><label for="">Actor: </label><a style="text-decoration:none" alt="{{$actor->Name}}" href="/actor/{{$actor->slug}}" class="nounderline" >{{$actor->Name}}</a></td>
              </tr>
              @endforeach
              @foreach($series as $serie)
              <tr class="active">
                <td><label for="">Serie : </label><a style="text-decoration:none" alt="{{$serie->Name}}" href="/serie/{{$serie->slug}}" class="nounderline" >{{$serie->Name}}</a></td>
              </tr>
              @endforeach
              <tr class="active">
                <td><label for="">Age: </label>   {{$character->Age}}</td>
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
