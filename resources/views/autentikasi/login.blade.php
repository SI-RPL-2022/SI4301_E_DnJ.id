@extends('template.template')

@section('content')
<section id="Login" class="min-vh-100">
	@if (session('gagal_login'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('gagal_login') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
	@endif
    <div class="container my-5">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item text-center">
                        <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                            role="tab" aria-controls="pills-home" aria-selected="true">Login as Personal User</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                            role="tab" aria-controls="pills-profile" aria-selected="false">Login as Organizational User</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form px-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" name="no_hp" class="form-control"
                                    placeholder="Email">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <button class="btn btn-primary btn-block center" type="submit">Login</button>
                                <p>Belum punya akun?<a href="/register" class="fw-bold nostyle">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <form action="/loginorganizational" method="POST">
                            @csrf
                            <div class="form px-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" name="no_hp" class="form-control"
                                    placeholder="Email">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                                <p>Belum punya akun?<a href="/register" class="fw-bold nostyle">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection