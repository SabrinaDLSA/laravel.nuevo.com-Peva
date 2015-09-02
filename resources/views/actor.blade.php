@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        <img src="{{$actor->Photo}}" alt="{{$actor->Name}}" class="img-responsive img-thumbnail" />
        <h3>{{$actor->Name}}</h3>
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
    <div class="container">
      <div class="col-md-8">
        <div class="" align="center">
          <hr>
          <p>{{$actor->Description}}</p>
        </div>
      </div>
    <div class="col-md-4">
      <div class="" align="center">
        <table class="table table-striped table-hover ">
          <thead>
            <div class="" align="center">
              <th class="text-center">
                {{$actor->Name}}
              </th>
            </div>
          </thead>
          <tbody>
              <tr class="active">
                <td><label for="">Name: </label>   {{$actor->Name}}</td>
              </tr>
              <tr class="active">
                <td><label for="">Genre: </label>   {{$actor->Birthplace}}</td>
              </tr>
              <tr class="active">
                <td><label for="">Start: </label>   {{$actor->Nationality}}</td>
              </tr>
              <tr class="active">
                <td><label for="">Finish: </label>   {{$actor->Age}}</td>
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
