@extends('layouts.main')

@section('content')
    <h1>Новости</h1>
    @foreach($list as $item)
        <div class="news-item">
            <a href="/news/{{ $item->url }}" class="news-item__item-img">
                <img src="{{ $item->image }}" alt="">
            </a>
            <a href="/news/{{ $item->url }}" class="news-item__title">
                {{ $item->title }}
            </a>
        </div>
    @endforeach
    <div>
        {{ $list->links() }}
    </div>
@endsection

