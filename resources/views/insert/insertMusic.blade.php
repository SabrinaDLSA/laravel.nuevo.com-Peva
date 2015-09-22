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
          <div class="" align="center">
              <h1>Adding Music</h1>
          </div>
            {!! Form::open (['url' => '/insert/music'])!!}
            <fieldset>
              <legend align="center"></legend>
              <input type="text" name="Name" placeholder="Name" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control" placeholder="You have to delete this in order to put another description"></textarea>
              <br>
              <input type="text" name="Birthplace" placeholder="Birthplace"  class="form-control">
              <br>
              <input type="text" name="Nationality" placeholder="Nationality"  class="form-control">
              <br>
              <input type="text" name="Age" placeholder="Age"  class="form-control">
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
