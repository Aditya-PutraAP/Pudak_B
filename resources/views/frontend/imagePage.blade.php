@extends('frontend.layout')

@section('content')
    <h1 class="gallery-title">Fotografi Pudak B</h1>
    <div class="gallery">
        @foreach ($gambar as $item)
            <div class="gallery-item-container">
                <h3>{{ $item->title }}</h3>
                <div class="gallery-item">
                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                </div>
            </div>
        @endforeach
    </div>
@endsection
