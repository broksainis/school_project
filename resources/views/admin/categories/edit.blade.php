@extends('layouts.admin')

@section('content')
    <h1>Kategorijas</h1>
    <div class="col-sm-6">
        {!! Form::model($category, ['method'=>'PATCH', 'action'=> ['AdminCategoriesController@update', $category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nosaukums:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Atjaunot', ['class'=>'btn btn-info col-sm-2']) !!}
        </div>
        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminCategoriesController@destroy', $category->id]]) !!}


        <div class="form-group">
            {!! Form::submit('Dzēst', ['class'=>'btn btn-danger col-sm-2']) !!}
        </div>
        {!! Form::close() !!}
    </div>



@stop