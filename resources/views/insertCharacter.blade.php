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
            {!! Form::open (['url' => '/insert/actor'])!!}
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
              <input type="text" name="actor_id" placeholder="actor_id"  class="form-control">
              <br>
              <input type="text" name="Age" placeholder="Age"  class="form-control">
              <br>
              <input type="text" name="Photo" placeholder="Put here your favourite picture"  class="form-control">
              <br>
                  <select name="cars">
                    <option value="default">Select an Actor</option>
                    @foreach($actor_id as $actor)
                    <option value="{{$actor->id}}">{{$actor->Name}}</option>
                    @endforeach
                  </select>
                  <br><br>
                  <input type="submit">
              <input type="submit" value="Update" class="btn btn-block btn-primary">
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
