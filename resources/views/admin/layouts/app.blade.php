<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('tag-title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center btn btn-group" id="navbarsExample08">
        <ul class="navbar-nav admin-menu">
        <li class="nav-item active btn btn-secondary">
            <a class="nav-link" href="{{ route('gallery-page') }}">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('add-new-page') }}">Добавить новость</a>
        </li>
        <li class="nav-item">
            <a class="nav-link btn-secondary" href="{{ route('add-img-page') }}">Добавить картинку</a>
        </li>
        <li class="nav-item dropdown">
            <!-- <a class="nav-link dropdown-toggle" href="#" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a> -->
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="#" class="nav-link"><button type="submit" class="btn btn-info">Logout</button></a>
            </form>
        </li>
        </ul>
    </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>