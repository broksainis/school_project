@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    <input type="button" class="btn btn-info" value="Pievienot" onclick="location.href = '{{route('posts.create')}}';">

@stop