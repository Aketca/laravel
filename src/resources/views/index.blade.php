@extends('layouts.main')
@section('title', 'Главная страница')
@section('content')
    @parent

    <p>This is my body content.</p>
    <example-component></example-component>
@endsection
