<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/footer.css">
    <title>Acme</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/articles') }}">Acme</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item {{Request::path()==='/' ? 'active':''}}">
                <a  class="nav-link" href="{{ url('/') }}">Home </a>
            </li>
            <li class="nav-item {{Request::path()==='articles' ? 'active':''}}">
                <a class="nav-link" href="{{ url('/articles') }}" >Articles</a>
            </li>
            <li class="nav-item {{Request::path()==='posts' ? 'active':''}}">
                <a class="nav-link" href="{{ url('/posts') }}" >Posts</a>
            </li>
        </ul>
    </div>
</nav>
</header>
<main role="main" class="container">
@yield('content')

</main>
<footer class="footer bg-dark">
    <div class="container">

    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery-3.4.1.slim.min.js" ></script>
<script src="/js/popper.min.js" ></script>
<script src="/js/bootstrap.min.js" ></script>

</body>
