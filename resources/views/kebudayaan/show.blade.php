@extends('frontend.layout')

@section('content')
    <div class="container">
        <div class="d-flex flex-row justify-content-between align-items-center mb-4">
            <div class="d-flex flex-row align-items-center">
                <a href="{{ route('kebudayaan.index') }}" class="boxed-btn me-3">
                    &lt; Kembali
                </a>
            </div>
            <div class="d-flex flex-row">
                <a href="{{ route('kebudayaan.edit', $k->id) }}" class="btn btn-primary me-4">
                    Edit
                </a>
                <form action="{{ route('kebudayaan.destroy', $k->id) }}" method="POST"
                    onsubmit="return confirmDelete(event)">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        <h1>Detil Kebudayaan & Kegiatan</h1>
        @if ($k->image)
            <img src="{{ asset($k->image) }}" alt="{{ $k->title }}" class="img-fluid mb-4">
        @endif

        <h5>Judul: {{ $k->title }}</h5>
        <h5>Deskripsi: {{ $k->description }}</h5>
    </div>
@endsection
