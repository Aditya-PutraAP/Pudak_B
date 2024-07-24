@extends('frontend.layout')

@section('content')
    <div class="container d-flex flex-column mb-4">
        <div class="d-flex flex-row justify-content-between mb-3">
            <h1>Berita</h1>
            <a href="{{ route('news.create') }}" class="boxed-btn">Buat Berita Baru</a>

        </div>
        <ul class="row">
            @foreach ($news as $newsItem)
                {{-- <li>{{ $newsItem->title }} - <a href="{{ route('news.show', $newsItem->id) }}">View</a> - <a
                        href="{{ route('news.edit', $newsItem->id) }}">Edit</a></li> --}}
                <div class="d-flex flex-column col col-xl-4">
                    <div class="card">
                        <a href="{{ route('news.show', $newsItem->id) }}" class="d-flex flex-column">
                            <img src="{{ asset($newsItem->image) }}" alt="{{ $newsItem->title }}"> </a>
                        <div class="card-body">
                            <a href="{{ route('news.show', $newsItem->id) }}" class="d-flex flex-column">
                                <h5 class="card-title">{{ $newsItem->title }}</h5>
                                <p>Ditulis oleh {{ $newsItem->author }}</p>
                                <p>{{ $newsItem->updated_at->diffForHumans() }}</p>
                            </a>
                        </div>
                        @if ($isLoggedIn)
                            <a href='{{ route('news.edit', $newsItem->id) }}'
                                class="boxed-btn">{{ $newsItem->verified_at ? 'Edit' : 'Verifikasi' }}</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
@endsection
