@extends('layouts.admin')

@section('content')
    <h1>Categories</h1>
    <input type="button" class="btn btn-info" value="Pievienot" onclick="location.href = '{{route('categories.create')}}';">
@stop