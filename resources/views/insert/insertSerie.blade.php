@extends('templates.main')
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
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="" align="center">
              <h1>Adding a new Serie</h1>
          </div>
            {!! Form::open(array('url' => '/insert/serie/serieValidate', 'files' => true, 'method' => 'post'))!!}
            <fieldset>
                <div class="controls">
                 {!! Form::text('Name','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Series Name')) !!}
                 @if ($errors->has('Name'))<p id="warning-p">{!!$errors->first('Name')!!}</p>@endif
                 </div>
                  <br>
                  <textarea name="Description" id="editor" cols="20" rows="10" class="form-control" placeholder="You have to delete this in order to put another description"></textarea>
                  @if ($errors->has('Description'))<p id="warning-p">{!!$errors->first('Description')!!}</p>@endif
                  <br>
              {!! Form::select('Genre', [ '' =>'Select a Genre'] + Config::get('enums.series_types'),null, ['class' => 'form-control'])  !!}
              @if ($errors->has('Genre'))<p id="warning-p">{!!$errors->first('Genre')!!}</p>@endif
              <br>
              {!! Form::input('date', 'Start', null, ['class'=> 'form-control']) !!}
              @if ($errors->has('Start'))<p id="warning-p">{!!$errors->first('Start')!!}</p>@endif
              <br>
              {!! Form::input('date', 'Finish', null, ['class'=> 'form-control']) !!}
              @if ($errors->has('Finish'))<p id="warning-p">{!!$errors->first('Finish')!!}</p>@endif
              <br>
              <input type="text" name="Seasons" placeholder="Seasons"  id="seasonsData" class="form-control">
              @if ($errors->has('Seasons'))<p id="warning-p">{!!$errors->first('Seasons')!!}</p>@endif
              <br>
              <div class="" align="center">
                  {!! Form::file('file', ['class'=>'btn btn-default btn-file']) !!}
              </div>
              <br>
              <button type="button" class="btn btn-lg btn-block" data-toggle="modal" data-target="#myModal">Save Changes</button>
            </fieldset>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Serie</h4>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to add this?</p>
                  </div>
                  <div class="modal-footer">
                    {!! Form::submit('Save Changes' , array('class' => 'btn btn-default')) !!}
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
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
