@extends('layouts.admin')

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/basic.min.css" rel="stylesheet">
@endsection

@section('content')
    <h1>Pievienot bildi</h1>
    <div class="col-sm-10">
        {!! Form::open(['method' => 'POST', 'acion'=> 'GalleryController@store', 'class' => 'dropzone']) !!}

        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>
@endsection