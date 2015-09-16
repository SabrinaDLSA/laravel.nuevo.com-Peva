@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<section>
<div class="row-fluid">
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="" align="center">
              <h1>Adding a new Serie</h1>
          </div>
            {!! Form::open(array('url' => '/insert/serie', 'files' => true, 'method' => 'post'))!!}
            <fieldset>
                <input type="hidden" name="" placeholder="Name"  class="form-control">
                <input type="text" name="Name" placeholder="Name"  class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                    You have to delete this in order to put another description
              </textarea>
              <br>
              {!! Form::select('Genre', [ '' =>'Select a Genre'] + Config::get('enums.series_types'),null, ['class' => 'form-control'])  !!}
              <br>
              <input type="text" name="Start" placeholder="Start"  class="form-control">
              <br>
              <input type="text" name="Finish" placeholder="Finish"  class="form-control">
              <br>
              <input type="text" name="Seasons" placeholder="Seasons"  id="seasonsData" class="form-control">
              <br>
              <div class="" align="center">
                  {!! Form::file('file', ['class'=>'btn btn-default btn-file']) !!}
              </div>
              <br>
              {!! Form::submit('Save Changes' , array('class' => 'btn btn-lg btn-block')) !!}
            </fieldset>
            {!! Form::close() !!}
        </div>
        <div class="col-md-2"></div>
    </div>
  </div>
  <br>
  <br>
</section>
@section('js')
@endsection
@include('templates.partials.footer')
@stop
