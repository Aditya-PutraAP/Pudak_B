@extends('frontend.layout')

@section('content')
    <div class="container">
        <h1>Create News</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control">
                @error('title')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" id="author" name="author" class="form-control">
                @error('author')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea id="content" name="content" class="form-control"></textarea>
                @error('content')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form=control">
                @error('image')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="editor" class="form-label">Editor</label>
                <input type="text" id="editor" name="editor" class="form-control">
                @error('editor')
                    <span class="text-bg-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="boxed-btn">Create</button>
        </form>
    </div>
@endsection
