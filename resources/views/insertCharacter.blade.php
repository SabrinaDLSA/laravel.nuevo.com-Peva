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
            {!! Form::open (['url' => '/insert/character'])!!}
            <fieldset>
              <legend align="center"></legend>
              <input type="text" name="Name" placeholder="Name" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                    You have to delete this in order to put another description
              </textarea>
              <br>
              <input type="text" name="Status" placeholder="Status"  class="form-control">
              <br>
              <input type="text" name="Age" placeholder="Age"  class="form-control">
              <br>
              <input type="text" name="Photo" placeholder="Put here your favourite picture"  class="form-control">
              <br>
              <p>
                Select Actor
              </p>
                    <?php $actor = nuevo\Actors::lists('name', 'id') ?>
                      {!! Form::select('actor_id', $actor ) !!}
                    <p>
                      Select Serie
                    </p>
                    <?php $serie = nuevo\Serie::lists('name', 'id') ?>
                      {!! Form::select('serie_id', $serie ) !!}

                  <input type="submit" value="Update" class="btn btn-block btn-primary">


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
