@extends('layouts.admin')

@section('content')
    <h1>Lietotāju saraksts</h1>
    <div class="col-sm-10">
        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>Vārds</th>
                <th>E-Pasts</th>
                <th>Reģistrācijas datums</th>
                <th>Loma</th>
                <th>Statuss</th>
                <th>Dzēšana</th>
                <th>Rediģēšana</th>
            </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><a href="">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at->diffForhumans()}}</td>
                <td>{{$user->role ? $user->role->name : 'nav'}}</td>
                <td>{{$user->active == 1 ? 'aktīvs' : 'neaktīvs' }}</td>
                <td><input type="button" class="btn btn-danger" value="Dzēst" onclick="location.href = '/admin/users/delete/{{ $user->id }}';"></td>
                <td><input type="button" class="btn btn-info" value="Rediģēt" onclick="location.href = '{{route('users.edit', $user->id)}}';"></td>
            </tr>
                @endforeach
           @endif
            </tbody>
        </table>
        <div class="col-sm-12">
            <input type="button" class="btn btn-info" value="Pievienot" onclick="location.href = '{{route('users.create')}}';">
        </div>
    </div>

@endsection