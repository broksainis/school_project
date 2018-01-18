@extends('layouts.admin')

@section('content')
    <h1>Users list</h1>
    <table class="table table-striped table-responsive">
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Vārds
            </th>
            <th>
                E-Pasts
            </th>
            <th>
                Loma
            </th>
            <th>
                Reģistrācijas datums
            </th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)

        <tr>
            <td>
                {{$user->id}}
            </td>
            <td>
                {{$user->name}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                {{$user->role}}
            </td>
            <td>
                {{$user->created_at}}
            </td>
        </tr>
            @endforeach
       @endif
        </tbody>
    </table>
@endsection