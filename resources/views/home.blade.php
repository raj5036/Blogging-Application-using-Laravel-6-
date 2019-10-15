@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <a href="/posts/create" class="btn btn-outline-success mb-3">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if (count($posts)>0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach ($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></td>
                                    <td>
                                            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-md-right'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        @else
                         <h4>You have no posts.Go ahead and create one!</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
