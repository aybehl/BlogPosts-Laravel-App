@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="font-semibold text-center mt-4">Edit Author</h1>
        <form action="{{ route('authors.update', $author->author_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="author_name">Name</label>
                <input type="text" class="form-control @error('author_name') is-invalid @enderror" id="author_name" name="author_name" value="{{ old('author_name', $author->author_name) }}" required>
                @error('author_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $author->email) }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Author</button>
        </form>
    </div>
@endsection
