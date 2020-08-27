@extends('layouts.main')

@section('content')
    <h1>{{ $simple->title }}</h1>
    <div class="text">
        <img src="{{ $simple->image }}" alt="">
        {{ $simple->text }}
    </div>
@endsection
