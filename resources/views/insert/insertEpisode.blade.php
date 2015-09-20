@extends('templates.main')
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.navig')
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div class="row-fluid">
  <div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="" align="center">
            <h3>Adding a new Episode</h3>
            <hr>
      </div>
      <fieldset>
        <legend align="center">Select a Serie to add a Season</legend>
      {!! Form::open(array('url' => '/insert/episode', 'files' => true, 'method' => 'post'))!!}
          <?php $serie = array('' =>'Please select a Serie') + $serie_id;?>
        {!! Form::select('serie_id', $serie, null , array('class' => 'form-control ser', 'onchange' => 'showSeasonEpisode()') )!!}
          <br>
          <div class="muestro hide"></div>
          <br>
          <div class="episodes hide">
          </div>
          <br>
          <div class="formulario hide">
            <input type="text" name="Name" placeholder="Name" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                  You have to delete this in order to put another description
              </textarea>
              <br>
              <p>Episodes:</p>
              <input type="number" name="Episodes" placeholder="1"  class="form-control">
              <br>
              <div class="" align="center">
                  {!! Form::file('file', ['class'=>'btn btn-default btn-file']) !!}
              </div>
              <br>
                  {!! Form::submit('Save Changes' , array('class' => 'btn btn-lg btn-block')) !!}
              </fieldset>
                  {!! Form::close() !!}
                  <hr>
              </div>
              <div class="container">
                <div class="col-md-12">
                  <div class="col-md-4"></div>
                  <div class="col-md-4"><hr class=" lineaBordeada "></div>
                  <div class="col-md-4"></div>
                </div>
              </div>
          </div>
        <div class="col-md-2"></div>
  </div>
</div>
@include('templates.partials.footer')
@section('js')
<script type="text/javascript">
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
</script>
@endsection
@stop
