@extends('templates.main')
@section('title'){{\Auth::user()->username}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
  <div class="container">
    @if(\Session::has('alert'))
          <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">Close</button>
              <strong>{{ Session::get('alert') }}</strong>
          </div>
      @endif
      <div class="col-md-2">

      </div>
    <div class="col-md-8">
          @foreach($character as $s)
          <div class="MedioDiv">
            <table class="table table-hover table-bordered Wid">
              <div class="Wid">
                <div class="">
                  <h3>{{$s->Name}}</h3>
                </div>
                <hr class="lineaBordeada">
                <tr><td  align="center"><img class="img-responsive img-thumbnail imagenWidth" src="{{$s->Photo}}" alt="{{$s->Name}}" /></td></tr>
                <tr>
                <td align="center">
                      <div class="btn-group">
                        <a href="actor/{{$s->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="actor/{{$s->id}}/delete"class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </div>
                </td>
                </tr>
              </div>
              </table>
          </div>
          @endforeach
    <br>
    <br>
    </div>
    <div class="col-md-2">

    </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
