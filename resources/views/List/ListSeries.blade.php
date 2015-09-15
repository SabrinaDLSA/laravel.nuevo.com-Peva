@extends('templates.main')
@section('title'){{\Auth::user()->username}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-12">
          @foreach($series as $s)
          <div class="MedioDiv">
            <table class="table table-hover table-bordered Wid">
              <div class="Wid">
                <div class="" align="center">
                  <label for="">{!! substr( $s->Name , 0, 15). '...' !!}</label>
                </div>
                <hr class="lineaBordeada">
                <tr><td  align="center"><img class="img-responsive img-thumbnail imagenWidth" src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" /></td></tr>
                <tr>
                <td align="center">
                      <div class="btn-group">
                        <a href="serie/{{$s->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="serie/{{$s->id}}/delete"class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
  </div>
    <div class="container">
        <div class="col-md-12">
          <div class="" align="center">
            {!! $series->render() !!}
          </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
