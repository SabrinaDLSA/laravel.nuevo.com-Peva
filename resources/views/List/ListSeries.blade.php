@extends('templates.main')
@section('title'){{\Auth::user()->username}}@endsection
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.navig')
@endsection
@section('content')
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
                        <a href="/list/serie/{{$s->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a data-toggle="modal"  data-target="#myModal" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </div>
                </td>
                </tr>
              </div>
              </div>
              </table>
          </div>
          @endforeach
          <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add Serie</h4>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete {{$s->Name}}?</p>
                </div>
                <div class="modal-footer">
                  <a href="/list/serie/{{$s->id}}/delete" class="btn btn-default" >Yes</a>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
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
