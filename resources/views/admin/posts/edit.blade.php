@extends('layouts.admin')

@section('content')
    <h1>Ziņas labošana</h1>
    <div class="col-sm-6">
        <img height="100" src="/images/{{$post->photo->file}}" alt="">
    </div>
    
    <div class="col-sm-10">
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
            {!! Form::submit('Rediģēt', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    @include('inc.form_errors')

@endsection