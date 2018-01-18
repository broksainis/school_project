@extends('layouts.admin')

@section('content')
    <div class="col-sm-10">
        <h1>Kategorijas</h1>
        <div class="col-sm-6">
            <h2>Pievienot</h2>
            {!! Form::open(['method'=>'POST', 'action'=> 'AdminCategoriesController@store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nosaukums:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Izveidot jaunu', ['class'=>'btn btn-primary']) !!}
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
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop