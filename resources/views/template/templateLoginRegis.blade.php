<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Style css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }}">

    <title>DnJ.id</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-utama bg-sekunder">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img class="navbar-logo"
                    src="{{ asset('asset/Logo/Logo.png'); }}">DnJ.id</a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                @guest
                 
                @else
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/donasi">Donasi</a>
                    <a class="nav-link" href="#">Pekerjaan</a>
                    <a class="nav-link" href="#">Pelatihan</a>
                </div>
                @endguest
                @guest
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="/donasi">Donasi</a>
                    <a class="nav-link" href="#">Pekerjaan</a>
                    <a class="nav-link" href="#">Pelatihan</a>
                    <a class="btn btn-primary" href="/login">Login</a>
                    <a class="btn btn-primary" href="/register">Register</a>
                </div>
                @else

                <li class="nav-item dropdown" style="list-style:none;">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><img
                            src="{{ asset('asset/Logo/account.png'); }}" height="30" width="30">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-btn').submit();">Logout</a>
                        </li>
                        <form id="logout-btn" action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
                @endguest
            </div>
        </div>
    </nav>

    @yield('content')

</body>

</html>