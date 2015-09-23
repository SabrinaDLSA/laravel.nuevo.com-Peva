@extends('templates.main')
@section('header')
  @include('templates.partials.header')
@endsection
@section('navigation')
  @include('templates.partials.navig')
@endsection
@section('content')
<?php $date = new DateTime(\Auth::user()->created_at);?>
<section>
  <div class="row-fluid">
    <div class="container">
          <div class="col-md-2">
            <div class="margin_cero">
              <div class="panel-group">
                <div class="panel panel-primary">
                  <div class="panel-heading">Profile</div>
                  <div class="panel-body">Name: {{\Auth::user()->name}}</div>
                  <div class="panel-body">Email: {{\Auth::user()->email}}</div>
                  <div class="panel-body">Username: {{\Auth::user()->username}}</div>
                  <div class="panel-body">Register date: {{$date->format('d/m/y')}}</div>
                  @if(empty($notes))
                  <div align="center" class="panel-body">
                    <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add notes</a>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
          </div>
          <div class="col-md-2">
            <div align="center" class="">
            @if(!empty($notes))
              <div  data-toggle="modal" data-target="#myModal" class="quote-container">
                <i class="pin"></i>
                <blockquote class="note blue">
                  <div class="" id="close">
                    <a href="/notes/delete" alt="Eliminar notas"><i class="fa fa-minus"></i></a>
                  </div>
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
          <div class="modal-dialog ">
            <div class="modal-content">
              {!! Form::open(array('url' => '/edit/notes', 'method' => 'post'))!!}
              <div align="center" class="modal-header">
                Add a note
              </div>
              <div class="modal-body"  align="center">
                <fieldset>
                  <div class="form-group">
                    <div class="controls">
                      <div align="center" class="">
                        @if(!empty($notes))
                        {!! Form::text('title',$n->title,array('id'=>'','class'=>'form-control span6')) !!}
                        @else
                        {!! Form::text('title','',array('id'=>'','class'=>'form-control span6', 'placeholder' => 'Add the title here!!')) !!}
                         @endif
                         <br>
                         @if(!empty($notes))
                         <textarea name="content" id="editor" cols="5" rows="10" class="form-control">{{$n->content}}</textarea>
                         @else
                         <textarea name="content" id="editor" cols="5" rows="10" class="form-control" placeholder="Add your notes here!"></textarea>
                         @endif
                         @if ($errors->has('content'))<p id="warning-p">{!!$errors->first('content')!!}</p>@endif
                         <br>
                         {!! Form::submit('Save Changes' , array('class' => 'btn btn-default')) !!}
                         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                    </div>
                  </div>
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
