@extends('layouts.admin')

@section('content')
    <h1>Add User</h1>
    {!! Form::open(['method' => 'POST', 'acion'=> 'AdminUsersController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Vārds:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Epasts:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Parole:') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Loma:') !!}
            {!! Form::select('role_id', ['' => 'Izvēlne:' ] + $roles, null , ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'Statuss:') !!}
            {!! Form::select('status', array(1 => 'aktīvs', 0 => 'neaktīvs'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection