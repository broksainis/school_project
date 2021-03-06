@extends('layouts.admin')

@section('content')
    <h1>Ziņu saraksts</h1>
    <div class="col-sm-10">
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
                <th>Rediģēšana</th>
            </tr>
            </thead>
            <tbody>
            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        @if($post->photo)
                        <td>
                            <img height="100" src="/images/{{$post->photo->file}}" alt="">
                        </td>

                        @else
                            <td>
                                <img height="100" src="http://tarch.in/img/placeholder/blogpost-placeholder-100x100.png" alt="">
                            </td>
                        @endif

                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</a></td>
                        <td>{!! str_limit(strip_tags($post->content), $limit = 50, $end = '...') !!}</a></td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category ? $post->category->name : 'Nav'}}</td>
                        <td>{{$post->created_at->diffForhumans()}}</td>
                        <td><input type="button" class="btn btn-info" value="Rediģēt" onclick="location.href = '{{route('posts.edit', $post->id)}}';"></td>
                        <td><input type="button" class="btn btn-danger" value="Dzēst" onclick="location.href = '/admin/posts/delete/{{ $post->id }}';"></td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <input type="button" class="btn btn-info" value="Pievienot" onclick="location.href = '{{route('posts.create')}}';">
    </div>
@stop