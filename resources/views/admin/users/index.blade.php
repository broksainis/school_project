@extends('layouts.admin')

@section('content')
    <h1>Users list</h1>
    <input type="button" class="btn btn-info" value="Pievienot" onclick="location.href = '{{route('users.create')}}';">
    <table class="table table-striped table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>Vārds</th>
            <th>E-Pasts</th>
            <th>Reģistrācijas datums</th>
            <th>Loma</th>
            <th>Statuss</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForhumans()}}</td>
            <td>{{$user->role ? $user->role->name : 'nav'}}</td>
            <td>{{$user->active == 1 ? 'aktīvs' : 'neaktīvs' }}</td>
        </tr>
            @endforeach
       @endif
        </tbody>
    </table>
@endsection