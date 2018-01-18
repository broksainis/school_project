@extends('layouts.admin')

@section('content')
    <h1>Galerija</h1>
    <div class="col-sm-10">
        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nosaukums</th>
                <th>Izveidots</th>
             </tr>
            </thead>
            <tbody>
            @if($photos)
                @foreach($photos as $photo)
                    <tr>
                        <td>{{$photo->id}}</td>
                        <td><img height="100" src="/images/{{$photo->file}}" alt=""></td>
                        <td>{{$photo->created_at}}</td>
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