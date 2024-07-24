@extends('frontend.layout')

@section('content')
    <div class="container">
        <div class="d-flex flex-row justify-content-between">
            <div class="d-flex flex-row row-gap-2">
                <a href="{{ route('news.index') }}" class="boxed-btn">
                    < Kembali</a>
            </div>
            <a href="{{ route('news.edit', $news->id) }}" class="boxed-btn">
                Edit</a>
        </div>
        <h1 class="mt-3 mb-3">{{ $news->title }}</h1>
        @if ($news->image)
            <img src="{{ asset($news->image) }}" alt="News Image" class="img-fluid">
        @endif
        <p>Ditulis oleh: {{ $news->author }} | {{ $news->updated_at->diffForHumans() }}</p>
        <p class="mt-3 mb-3"> {!! nl2br(e($news->content)) !!}</p>
        <p>Editor: {{ $news->editor }}</p>

    </div>
@endsection
