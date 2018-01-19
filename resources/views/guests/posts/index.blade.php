@extends('layouts.guest')
@section('content')
@if($posts)
    @foreach($posts as $post)
        <div class="col-sm-4 col-sm-offset-1">
            <div class="card-block">
            @if($post->photo)
                    <img width="400" height="200" class="card-img-top" src="/images/{{$post->photo->file}}" alt="Card image cap">
            @else
                    <img class="card-img-top" src="http://tarch.in/img/placeholder/blogpost-placeholder-100x100.png" alt="Card image cap">
            @endif
                <h4 class="card-title">{{$post->title}}</h4>
                <p class="card-text">{!! str_limit(strip_tags($post->content), $limit = 100, $end = '...') !!}</p>
                <p class="card-text">Autors: <i>{{$post->user->name}}</i></p>
                <p class="card-text"><small class="text-muted">{{$post->created_at->diffForhumans()}}</small></p>
                <a href="{{route('posts.show', ['id' => $post->id])}}" class="btn btn-primary">Lasīt tālāk..</a>
            </div>
        </div>
    @endforeach
@endif
        <div class="col-sm-3">
            {{$posts->render()}}
        </div>
@stop