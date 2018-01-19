@extends('layouts.guest')
@section('content')
@if($posts)
        <div class="col-md-8 col-md-offset-2">
            @if($posts->photo)
                <img class="img-medium-center img-responsive" class="card-img-top" src="/images/{{$posts->photo->file}}" alt="Card image cap">
            @else
                <img class="card-img-top" src="http://tarch.in/img/placeholder/blogpost-placeholder-100x100.png" alt="Card image cap">
            @endif
            <h3 class="text-center">{{$posts->title}}</h3>
            <small class="text-muted">{{$posts->user->name}}</small>
            <p class="card-text">{{$posts->content}}</p>
        </div>
@endif

@stop
