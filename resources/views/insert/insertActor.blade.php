@extends('templates.main')
@section('title')
{{'Insert Actor'}}  
@endsection
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.navig')
@endsection
@section('content')
<section>
  <div class="row-fluid">
    <div class="container">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="" align="center">
                <h1>Adding a new Actor</h1>
            </div>
            {!! Form::open(array('url' => '/insert/actor', 'files' => true, 'method' => 'post'))!!}
            <fieldset>
              <legend align="center"></legend>
              <input type="text" name="Name" placeholder="Name" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                    You have to delete this in order to put another description
              </textarea>
              <br>
              <input type="text" name="Birthplace" placeholder="Birthplace"  class="form-control">
              <br>
              <input type="text" name="Nationality" placeholder="Nationality"  class="form-control">
              <br>
              <input type="text" name="Age" placeholder="Age"  class="form-control">
              <br>
              <div class="" align="center">
                  {!! Form::file('file', ['class'=>'btn btn-default btn-file']) !!}
              </div>
              <br>
              {!! Form::submit('Save Changes' , array('class' => 'btn btn-lg btn-block')) !!}
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
