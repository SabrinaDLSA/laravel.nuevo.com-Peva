@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navigate')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        @foreach($serie as $s)
        <img src="{{$s->Photo}}" alt="{{$s->Name}}" />
        <h3>{{$s->Name}}</h3>
        @endforeach
      </div>
    </div>
    <div class="col-md-4">

    </div>
  </div>
    <div class="container">
      <div class="col-md-8">
        <div class="" align="center">
          <hr>
          <p>{{$s->Description}}</p>
        </div>
      </div>
    <div class="col-md-4">
      <div class="" align="center">
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
