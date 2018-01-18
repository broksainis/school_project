@extends('layouts.admin')

@section('content')
    <h1>Create post</h1>
    {!! Form::open(['method' => 'POST', 'acion'=> 'AdminPostsController@store', 'files' => 'true']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Nosaukums:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Kategorija:') !!}
        {!! Form::select('category_id', array('1' => 'Love', '0' => 'Sports'), null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Fotogrāfija:') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Saturs:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
    @include('inc.form_errors')

@endsection