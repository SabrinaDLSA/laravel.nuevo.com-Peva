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
            <div class="" align="center">
              <img class="img-responsive imagenWidthList img-thumbnail" src="/storage/{{$actor->Photo}}" alt="{{$actor->Name}}" />
            </div>
            {!! Form::open (['url' => 'list/actor/'.$actor->id.'/refresh'])!!}
          <fieldset>
              <legend align="center">Editing {{$actor->Name}}</legend>
              <input type="text" name="Name" value="Name: {{$actor->Name}}" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                {{$actor->Description}}
              </textarea>
              <br>
              <input type="text" name="Birthplace" value="Birthplace: {{$actor->Birthplace}}" class="form-control">
              <br>
              <input type="text" name="Nationality" value="Nationality: {{$actor->Nationality}}" class="form-control">
              <br>
              <input type="number" name="Age" value="{{$actor->Age}}" class="form-control">
              <br>
              <input type="text" name="Photo" value="{{$actor->Photo}}" class="form-control">
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
