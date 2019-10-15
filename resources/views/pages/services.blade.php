@extends('layouts.app')

@section('content')
        
    <h1>{{$title}}</h1>
    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae exercitationem necessitatibus iure sunt. Deleniti minima velit minus blanditiis. Fuga velit a vero!
    Assumenda mollitia debitis similique eligendi rem ducimus voluptas?</p>
    @if (count($services)>0)
       <ul class="list-group">
            @foreach ($services as $service)
                 <li class="list-group-item">{{$service}}</li>
             @endforeach
       </ul>
    @endif
@endsection