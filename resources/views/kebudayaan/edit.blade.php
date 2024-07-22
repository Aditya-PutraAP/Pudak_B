@extends('frontend.layout')

@section('content')
    <div class="container">
        <h1>Edit Kebudayaan</h1>
        <form action="{{ route('kebudayaan.update', $k->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" value="{{ $k->title }}" class="form-control">
                @error('title')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea id="description" name="description" class="form-control">{{ $k->description }}</textarea>
                @error('description')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="boxed-btn">Update</button>
        </form>
    </div>
@endsection
