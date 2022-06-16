@extends('template.template')

@section('content')
<section id="Updateprofil" class="vh-100">
    <div class="container">
        @if (session('gagalupdate'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('gagalupdate') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h1 class="fw-bold">Profile</h1>
        <form action="/profil/update/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    @if ( Auth::user()->foto == null)
                    <img class="rounded-profil" src="{{asset('asset/ilustrasi/profil.jpg')}}">
                    @else
                    <img class="rounded-profil" src="{{asset('foto_profil/'.Auth::user()->foto)}}">
                    @endif
                    <div class="row">
                        <label>
                            <input type="file" style="display: none;" name="img_path">
                            <p style="margin-left:5rem; color:rgba(0, 0, 0, 0.5);"><u>Upload Foto</u></p>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p class="title">Nama</p>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{Auth::user()->name}}">
                    <p class="title">Email</p>
                    <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                    <p class="title">Nomor Handphone</p>
                    <input type="numeric" class="form-control" id="no_hp" name="no_hp" value="{{Auth::user()->no_hp}}">
                    <p class="title">Password</p>
                    <input type="password" class="form-control" id="password" name="password">
                    <button class="btn btn-primary" type="submit">Edit</button>
                </div>

            </div>
        </form>
    </div>
</section>
@endsection