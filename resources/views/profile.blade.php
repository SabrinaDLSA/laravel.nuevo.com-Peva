@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<section>
  <div class="row-fluid">
    <div class="container">
        @if(\Session::has('alert'))
            <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">Close</button>
                <strong>{{ Session::get('alert') }}</strong>
            </div>
        @endif
        @if(\Session::has('success'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">Close</button>
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
          </div>
          <div class="col-md-2">
            <div align="center" class="">
              @if(!empty($notes))
              <div  data-toggle="modal" data-target="#myModal" class="quote-container">
                <i class="pin"></i>
                <blockquote class="note blue">
                  @foreach($notes as $n)
                    {{$n->title}}
                    <cite class="author">{{$n->content}}</cite>
                  @endforeach
                </blockquote>
              </div>
              <br>
              @endif
            </div>
            <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              {!! Form::open(array('url' => '/edit/notes', 'method' => 'post'))!!}
              <div class="modal-header">
                Add a note
              </div>
              <div class="" align="center">
                <fieldset>
                  <div class="controls">
                   {!! Form::text('title',$n->title,array('id'=>'','class'=>'form-control span6')) !!}
                  </div>
                    <br>
                    <textarea name="content" id="editor" cols="5" rows="5" class="form-control">{{$n->content}}</textarea>
                    @if ($errors->has('content'))<p id="warning-p">{!!$errors->first('content')!!}</p>@endif
                    <br>
                    {!! Form::submit('Save Changes' , array('class' => 'btn btn-default')) !!}
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              </fieldset>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
@include('templates.partials.footer')
@stop
