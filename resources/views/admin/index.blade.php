@extends('layouts.admin')

@section('content')
    <h1>Administrācijas panelis</h1>
    <h3>Kopā publicēti: {{count($posts)}} <a href="{{route('posts.index')}}">jaunumi</a></h3>
    <h3>{{count($posts)}} <a href="{{route('categories.index')}}">kategorijās</a></h3>
    <h3>Jaunākās ziņas [3]:</h3>
    @foreach($posts as $post)
        <a href="{{route('posts.show', ['id' => $post->id])}}" class="link">{{$post->title}}</a>
        <br>
    @endforeach
@endsection