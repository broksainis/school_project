@extends('layouts.admin')

@section('content')
    <h1>Add User</h1>
    {!! Form::open(['method' => 'POST', 'acion'=> 'AdminUsersController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Namee:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection