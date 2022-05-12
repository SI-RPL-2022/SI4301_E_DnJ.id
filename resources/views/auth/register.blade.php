@extends('template.template')

@section('content')
<section id="register" class="min-vh-100">
    <div class="container my-4">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card border-0" style="width: 75%;">
                <div class="card-body">
                    <h1 class="card-title fw-bold">Register</h1>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-2">
                            <label for="no_hp" class="form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>
                        <div class="mb-2">
                            <label for="roles" class="form-label">User</label>
                            <select class="form-select" name="roles" id="roles" aria-label="Default select example">
                                <option value="Personal User">Personal User</option>
                                <option value="Organizational User">Organizational User</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-2">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection