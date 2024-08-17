@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="font-semibold text-center mt-4">Add Author</h1>
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="author_name">Name</label>
                <input type="text" class="form-control" id="author_name" name="author_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Author</button>
        </form>
    </div>
@endsection
