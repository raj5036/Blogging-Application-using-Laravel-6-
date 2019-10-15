@extends('layouts.app')

@section('content')

  <h1>Edit post</h1>

  {{ Form::open(array('method' => 'POST','enctype'=>'multipart/form-data','action'=>['PostsController@update',$post->id])) }}
           <div class="form-group">
             {{Form::label('title','Title',['class'=>'display-4'])}}
             {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Post Title Here'])}}
           </div>
           <div class="form-group">
            {{Form::label('body','Post Body',['class'=>'display-4'])}}
            {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Write your thoughts here','rows'=>10])}}
          </div>
          <div class="form-group">
              {{Form::file('cover_image')}}
          </div>
          {{Form::hidden('_method','PUT')}}
          {{Form::submit('Submit',['class'=>'btn btn-success'])}}
   {{ Form::close() }}
@endsection
