@extends('frontend.layout')

@section('content')
    <div class="container d-flex flex-column mb-4">
        <div class="d-flex flex-row justify-content-between mb-3">
            <h1>Sumber Daya & Produk</h1>
            <a href="{{ route('produk.create') }}" class="boxed-btn">Create New</a>
        </div>
        <div class="row">
            @foreach ($produk as $item)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
                    <a href="{{ route('produk.show', $item->id) }}" class="card h-100">
                        <img class="fixed-size-image" src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p>{{ $item->description }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
