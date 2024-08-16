@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Posts</h1>
        <div class="text-right">
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Add Post</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Publish Date</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->post_id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($post->content, 50) }}</td>
                        <td>{{ $post->publish_date }}</td>
                        <td>{{ $post->author->author_name }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->post_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('posts.destroy', $post->post_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
