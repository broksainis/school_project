@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    <input type="button" class="btn btn-info" value="Pievienot" onclick="location.href = '{{route('posts.create')}}';">
    <table class="table table-striped table-responsive">
        <thead>
        <tr>
            <th>Foto</th>
            <th>ID</th>
            <th>Nosaukums</th>
            <th>Saturs</th>
            <th>Autors</th>
            <th>Katgorija</th>
            <th>Izveidots</th>
            <th>Dzēšana</th>
            <th>Rediģēšana</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td><img height="50" src="{{$post->photo_id ? $post->photo->file : 'http://via.placeholder.com/300'}}" alt=""></td>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</a></td>
                    <td>{!! str_limit(strip_tags($post->content), $limit = 50, $end = '...') !!}</a></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : 'Nav'}}</td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td><input type="button" class="btn btn-danger" value="Dzēst" onclick="location.href = '/admin/users/delete/{{ $post->id }}';"></td>
                    <td><input type="button" class="btn btn-info" value="Rediģēt" onclick="location.href = '{{route('posts.edit', $post->id)}}';"></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop