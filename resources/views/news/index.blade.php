@extends('frontend.layout')

@section('content')
    <div class="container d-flex flex-column mb-4">
        <div class="d-flex flex-row justify-content-between">
            <h1>News List</h1>
            <a href="{{ route('news.create') }}" class="boxed-btn">Create New News</a>

        </div>
        <ul class="row">
            @foreach ($news as $newsItem)
                {{-- <li>{{ $newsItem->title }} - <a href="{{ route('news.show', $newsItem->id) }}">View</a> - <a
                        href="{{ route('news.edit', $newsItem->id) }}">Edit</a></li> --}}
                <a href="{{ route('news.show', $newsItem->id) }}" class="d-flex flex-column col col-xl-4  card">
                    <img src="{{ asset($newsItem->image) }}" alt="{{ $newsItem->title }}">
                    <h5 class="card-title">{{ $newsItem->title }}</h5>
                    <p>Ditulis oleh {{ $newsItem->author }}</p>
                    <p>{{ $newsItem->updated_at->diffForHumans() }}</p>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
