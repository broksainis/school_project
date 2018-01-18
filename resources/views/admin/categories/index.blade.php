@extends('layouts.admin')

@section('content')
    <h1>Categories</h1>
    <input type="button" class="btn btn-info" value="Pievienot" onclick="location.href = '{{route('categories.create')}}';">


    <div class="col-sm-6">
        <h2>Create category</h2>
        {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nosaukums:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>


    <div class="col-sm-6">
        @if($categories)
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nosaukums</th>
                    <th>Rediģēt</th>
                </tr>
            </thead>

            @foreach($categories as $category)
            <tbody>
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td><input type="button" class="btn btn-info" value="Rediģēt" onclick="location.href = '{{route('categories.edit', $category->id)}}';"></td>
                </tr>
            </tbody>
        </table>
            @endforeach
        @endif
    </div>

@stop