@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="font-semibold text-center mt-4">Add Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="publish_date">Publish Date</label>
                <input type="date" class="form-control" id="publish_date" name="publish_date" required>
            </div>
            <div class="form-group">
                <label for="author_id">Author</label>
                <select class="form-control" id="author_id" name="author_id" required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->author_id }}">{{ $author->author_name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
    </div>
@endsection
