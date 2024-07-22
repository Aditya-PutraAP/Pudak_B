@extends('frontend.layout')

@section('content')
    <div class="container">
        <div class="d-flex flex-row justify-content-between align-items-center mb-4">
            <div class="d-flex flex-row align-items-center">
                <a href="{{ route('produk.index') }}" class="boxed-btn me-3">
                    &lt; Kembali
                </a>
            </div>
            <div class="d-flex flex-row">
                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-primary me-4">
                    Edit
                </a>
                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST"
                    onsubmit="return confirmDelete(event)">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
        <h1>Sumber Daya & Produk Details</h1>
        @if ($produk->image)
            <img src="{{ asset($produk->image) }}" alt="{{ $produk->title }}" class="img-fluid mb-4">
        @endif

        <h5>Judul: {{ $produk->title }}</h5>
        <h5>Deskripsi: {{ $produk->description }}</h5>
    </div>
@endsection
