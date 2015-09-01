@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<section>
<div class="row-fluid">
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            {!! Form::open (['url' => '/insert/serie'])!!}
            <fieldset>
              <legend align="center"></legend>
              <input type="text" name="Name" placeholder="Name" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                    You have to delete this in order to put another description
              </textarea>
              <br>
              <input type="text" name="Genre" placeholder="Genre"  class="form-control">
              <br>
              <input type="text" name="Start" placeholder="Start"  class="form-control">
              <br>
              <input type="text" name="Finish" placeholder="Finish"  class="form-control">
              <br>
              <input type="text" name="Seasons" placeholder="Seasons"  class="form-control">
              <br>
              <input type="text" name="Photo" placeholder="Put here your favourite picture"  class="form-control">
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
@include('templates.partials.footer')
@stop
