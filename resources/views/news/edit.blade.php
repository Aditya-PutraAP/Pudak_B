@extends('frontend.layout')

@section('content')
    <div class="container">
        <h1>Edit Berita</h1>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" id="title" name="title" value="{{ $news->title }}" class="form-control">
                @error('title')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Penulis</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ $news->author }}">
                @error('author')
                    <span>{{ $message }}</span>
                @enderror

            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea id="content" class="form-control" name="content">{{ $news->content }}</textarea>
                @error('content')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="editor" class="form-label">Editor</label>
                <input type="text" id="editor" name="editor" class="form-control" value="{{ $news->editor }}">
                @error('editor')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="boxed-btn mb-3">Edit</button>
        </form>
    </div>
@endsection
