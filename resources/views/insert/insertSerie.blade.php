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
                 {!! Form::text('Name','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Please Enter your Name')) !!}
                 @if ($errors->has('Name'))<p style="color:red;">{!!$errors->first('Name')!!}</p>@endif
                 </div>
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                    You have to delete this in order to put another description
              </textarea>
              <br>
              {!! Form::select('Genre', [ '' =>'Select a Genre'] + Config::get('enums.series_types'),null, ['class' => 'form-control'])  !!}
              @if ($errors->has('Genre'))<p style="color:red;">{!!$errors->first('Genre')!!}</p>@endif
              <br>
              {!! Form::input('date', 'Start', null, ['class'=> 'form-control']) !!}
              @if ($errors->has('Start'))<p style="color:red;">{!!$errors->first('Start')!!}</p>@endif
              <br>
              {!! Form::input('date', 'Finish', null, ['class'=> 'form-control']) !!}
              @if ($errors->has('Finish'))<p style="color:red;">{!!$errors->first('Finish')!!}</p>@endif
              <br>
              <input type="text" name="Seasons" placeholder="Seasons"  id="seasonsData" class="form-control">
              @if ($errors->has('Seasons'))<p style="color:red;">{!!$errors->first('Seasons')!!}</p>@endif
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
