@extends('layouts.app')

@section('content')

  <h1>Featured Posts</h1>

  @if (count($posts)>0)

    @foreach ($posts as $post)
         <div class="well">
          <div class="row">
            <div class="col-md-4 col-sm-4">
            <img src="/storage/cover_image/{{$post->cover_image}}" alt="PostImage" width="100%">
            </div>
            <div class="col-md-4 col-sm-4">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Post created at {{ $post->created_at }} and written by {{$post->user->name}}</small>
            </div>
          </div>
        
         </div>
    @endforeach 
        {{$posts->links()}}
     
    @else
       <p class="lead">No posts found</p>
    @endif
@endsection 