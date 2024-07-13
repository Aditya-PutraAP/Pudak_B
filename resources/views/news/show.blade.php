@extends('frontend.layout')

@section('content')
    <div class="container">
        <div class="d-flex flex-row justify-content-between">
            <div class="d-flex flex-row row-gap-2">
                <a href="{{ route('news.index') }}" class="boxed-btn">
                    < Kembali</a>
                        <h1>News Details</h1>
            </div>
            <a href="{{ route('news.edit', $news->id) }}" class="boxed-btn">
                Edit</a>
        </div>
        @if ($news->image)
            <img src="{{ asset($news->image) }}" alt="News Image" class="img-fluid">
        @endif
        <h5>{{ $news->title }}</h5>
        <p>Ditulis oleh: {{ $news->author }} | {{ $news->updated_at->diffForHumans() }}</p>
        <p>Editor: {{ $news->editor }}</p>
        <p>{{ $news->content }}</p>

    </div>
@endsection
