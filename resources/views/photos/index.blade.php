@extends('layout.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    estoy en el index
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
   Esto es el contenido
@endsection