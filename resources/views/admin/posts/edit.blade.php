@extends('layouts.admin')

@section('content')
    <h1>Edit post</h1>

    <img src="{{$post->photo->file}}" class="img-responsive" alt="">


    {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Nosaukums:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Kategorija:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Fotogrāfija:') !!}
        {!! Form::file('photo_id', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Saturs:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('inc.form_errors')

@endsection