@extends('frontend.layout')

@section('content')
    <div class="container">
        <h1>Create Kebudayaan</h1>
        <form action="{{ route('kebudayaan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control">
                @error('title')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea id="cdescription" name="description" class="form-control"></textarea>
                @error('description')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="boxed-btn">Create</button>
        </form>
    </div>
@endsection
