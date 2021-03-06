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
    <link rel="icon" href="{{ asset('asset/Logo/Logo.png'); }}">

    <title>Admin DnJ.id</title>
</head>

<body>
    
    <div class="container-fluid">
        <div class="row" id="Admin">
            <div class="col-md-3 sidebar min-vh-100">
                <div class="sidebar-content p-4">
                    <div class="text-center pt-5 mb-3">
                        <img src="{{ asset('asset/Logo/account.png') }}" alt="" class="logo-admin">
                        <h5 class="display-6 text-light">Hi, Admin</h5>
                    </div>
                    <div class="sidebar-menu px-3 fs-4 sekunder mb-5">
                        <ul class="list-unstyled">
                            <li><a href="/admin/dashboard" class="sidebar-link">Dashboard</a></li>
                            <li>Donasi
                                <ul class="list-unstyled ps-4 fs-6">
                                    <li><a href="/admin/riwayat_donasi" class="sidebar-link">Riwayat Donasi</a></li>
                                    <li>Cetak Donasi</li>
                                    <li><a href="/admin/verifikasi_donasi" class="sidebar-link">Verifikasi Donasi</a></li>
                                </ul>
                            </li>
                            <li>Pekerjaan
                                <ul class="list-unstyled ps-4 fs-6">
                                    <li><a href="/admin/pekerjaan" class="sidebar-link">Daftar Pekerjaan</a></li>
                                    <li>Mitra Pekerjaan</li>
                                </ul>
                            </li>
                            <li>Pelatihan
                                <ul class="list-unstyled ps-4 fs-6">
                                    <li><a href="/admin/pelatihan" class="sidebar-link">Daftar Pelatihan</a></li>
                                    <li>Mitra Peltahian</li>
                                </ul>
                            </li>
                            <li><a href="/admin/keluhan" class="sidebar-link">Keluhan</a></li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <form action="/logout" method="POST">
                            @csrf

                            <button type="submit" class="btn btn-sekunder">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col content p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>