@extends('layouts.app')

@section('content')
    <style>
        .custom-margin {
            margin-top: 8rem; /* Custom margin value */
        }
    </style>
    <div class="d-flex flex-column justify-content-center align-items-center custom-margin">
        <div class="text-center mb-4 text-8xl">
            <h1>Welcome to the Blogging Platform</h1>
            <p>This application allows you to manage authors and their blog posts.</p>
        </div>

        <div class="container">
            <div class="row">
                <!-- Authors Card -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Authors</h5>
                            <p class="card-text">Manage and view all authors who have written blog posts.</p>
                            <a href="{{ route('authors.index') }}" class="btn btn-primary">See All Authors</a>
                        </div>
                    </div>
                </div>
                
                <!-- Posts Card -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Posts</h5>
                            <p class="card-text">Manage and view all blog posts published on the platform.</p>
                            <a href="{{ route('posts.index') }}" class="btn btn-primary">See All Posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection