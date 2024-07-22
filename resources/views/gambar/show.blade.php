@extends('frontend.layout')

@section('content')
    <div class="container">
        <div class="d-flex flex-row justify-content-between align-items-center mb-4">
            <div class="d-flex flex-row align-items-center">
                <a href="{{ route('gambar.index') }}" class="boxed-btn me-3">
                    &lt; Kembali
                </a>
            </div>
            <div class="d-flex flex-row">
                <a href="{{ route('gambar.edit', $gambar->id) }}" class="btn btn-primary me-4">
                    Edit
                </a>
                <form action="{{ route('gambar.destroy', $gambar->id) }}" method="POST"
                    onsubmit="return confirmDelete(event)">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        <h1>Detil Gambar Fotografi</h1>
        @if ($gambar->image)
            <img src="{{ asset($gambar->image) }}" alt="{{ $gambar->title }}" class="img-fluid mb-4">
        @endif

        <h5>Judul: {{ $gambar->title }}</h5>
    </div>
@endsection
