@extends('layouts.guest')
@section('content')
@if($posts)
    @foreach($posts as $post)
        <div class="col-sm-6">
            <div class="card-block">
            @if($post->photo)
                    <img width="200" class="card-img-top" src="/images/{{$post->photo->file}}" alt="Card image cap">
            @else
                    <img class="card-img-top" src="http://tarch.in/img/placeholder/blogpost-placeholder-100x100.png" alt="Card image cap">
            @endif
                <h4 class="card-title">{{$post->title}}</h4>
                <p class="card-text">{{$post->content}}</p>
                <p class="card-text"><small class="text-muted">{{$post->created_at->diffForhumans()}}</small></p>
            </div>
        </div>
    @endforeach
@endif
@stop