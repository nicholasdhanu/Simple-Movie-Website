<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="{{ asset('jquery.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cardStyle.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Poppins:wght@400;600&family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Nunito&family=Poppins:wght@400;600&family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito&family=Poppins:wght@400;600&family=Righteous&display=swap" rel="stylesheet">

    </head>
    <body>
          <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-bg-col">
            <a class="navbar-brand navbar-text-color episode-text-title2" href="{{route('homePage')}}">BeeFlix</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item dropdown episode-text-title2">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Category</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/category?type=Popular Series">Popular Series</a>
                      <a class="dropdown-item" href="/category?type=Documentary Series">Documentary Series</a>
                      <a class="dropdown-item" href="/category?type=Drama Series">Drama Series</a>
                    </div>
                    <li class="nav-item episode-text-title2">
                        <a class="nav-link" href="{{ url()->previous() }}" tabindex="-1" aria-disabled="true">&#8678 Back</a>
                    </li>
                </li>
              </ul>
            </div>
          </nav>
              @yield('content')
    </body>
</html>
