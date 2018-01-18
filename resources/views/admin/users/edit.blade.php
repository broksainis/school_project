@extends('layouts.admin')

@section('content')
    <h1>Esoša lietotāja rediģēšana</h1>
    <div class="col-sm-10">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id]]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Vārds:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Epasts:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Parole:') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Loma:') !!}
            {!! Form::select('role_id', ['0'=> 'Izvēlne:'] + $roles ,null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('active', 'Statuss:') !!}
            {!! Form::select('active', array(1 => 'Aktīvs', 0=> 'Neaktīvs'), null , ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Atjaunot', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>

    @include('inc.form_errors')
@endsection