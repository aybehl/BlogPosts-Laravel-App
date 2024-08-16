<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging Platform</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand ml-5" href="{{ url('/') }}">Blogging Platform</a>
            <div class="collapse navbar-collapse">
                <ul class="ml-5 navbar-nav mr-auto">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('authors.index') }}">Authors</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
        @yield('content')
    </main>
    <!-- Bootstrap JS and dependencies CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
