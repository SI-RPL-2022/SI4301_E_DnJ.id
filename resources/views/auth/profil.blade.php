@extends('template.template')

@section('content')
<section id="profil" class="vh-100">
    <div class="container">
        <h1 class="fw-bold">Profile</h1>
        <div class="row">
            <div class="col-sm-6">
                @if ( Auth::user()->foto == null)
                <img class="rounded-profil" src="{{asset('asset/ilustrasi/profil.jpg')}}">
                @else
                <img class="rounded-profil" src="{{asset('foto_profil/'.Auth::user()->foto)}}">
                @endif
            </div>
            <div class="col-sm-6">
                <p class="title">Nama</p>
                <p class="ans fw-bold">{{ Auth::user()->name }}</p>
                <p class="title">Email</p>
                <p class="ans fw-bold">{{ Auth::user()->email }}</p>
                <p class="title">Nomor Handphone</p>
                <p class="ans fw-bold">{{ Auth::user()->no_hp }}</p>
                <a class="btn btn-primary" href="/profil/update">Edit</a>
            </div>
        </div>
    </div>
</section>
@endsection