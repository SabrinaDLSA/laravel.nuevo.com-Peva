@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<section>
  <div class="row-fluid">
    <div class="container">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            @if(\Session::has('alert'))
          <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ Session::get('alert') }}</strong>
          </div>
            @endif
            {!! Form::open (['url' => 'list/serie/'.$serie->id.'/refresh'])!!}
          <fieldset>
              <legend align="center">Editing {{$serie->Name}}</legend>
              <div class="" align="center">
                <img class="img-responsive img-thumbnail imagenWidth" src="/storage/{{$serie->Photo}}" alt="{{$serie->Name}}" />
              </div>
              <br>
              <input type="text" name="Name" value="Name: {{$serie->Name}}" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                {{$serie->Description}}
              </textarea>
              <br>
              <input type="text" name="Genre" value="Genre: {{$serie->Genre}}" class="form-control">
              <br>
              <input type="text" name="Start" value="Start: {{$serie->Start}}" class="form-control">
              <br>
              <input type="text" name="Finish" value="Finish: {{$serie->Finish}}" class="form-control">
              <br>
              <input type="text" name="Photo" value="{{$serie->Photo}}" class="form-control">
              <br>
              <input type="submit" value="Update" class="btn btn-block btn-primary">
        </fieldset>
          {!! Form::close() !!}
          </div>
          <div class="col-md-2">
      </div>
    </div>
  </div>
  <br>
  <br>
</section>
@section('js')
  <script>
    $('#editor').trumbowyg();
  </script>
@endsection
@include('templates.partials.footer')
@stop
