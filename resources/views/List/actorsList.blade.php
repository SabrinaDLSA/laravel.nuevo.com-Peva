@extends('templates.main')
@section('title'){{'Actors'}}  @endsection
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.navig')
@endsection
@section('content')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
          @foreach($actor as $s)
          <div class="MedioDiv">
            <table class="table table-hover table-bordered Wid">
              <div class="Wid">
                <div class="" align="center">
                    <label for="">{!! substr( $s->Name , 0, 15). '...' !!}</label>
                <br>
                </div>
                <hr class="lineaBordeada">
                <tr><td  align="center"><img class="img-responsive img-thumbnail imagenWidth" src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" /></td></tr>
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
    <div class="col-md-2"></div>
  </div>
    <div class="container">
        <div class="col-md-12">
          <div class="" align="center">
            {!! $actor->render() !!}
          </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
