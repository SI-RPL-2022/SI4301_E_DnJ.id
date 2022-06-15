@extends('template.template')

@section('content')
    <section id="DetailDonasi">
        <div class="container min-vh-100 py-5">
            <div class="mb-2">
                <a href="/donasi" class="back-link"><i class="bi bi-arrow-left"></i></a><b class="subtitle">Detail
                    Donasi</b>
            </div>
            <div class="row bg-sekunder-2 p-5 row-rounded mb-5">
                <div class="col-md-4">
                    <img src="{{ asset('asset/Logo/Logo.png') }}" class="gambar-donasi">
                </div>
                <div class="col-md-8">
                    <h2 class="subtitle">Nama Donasi</h2>
                    <p class="text-utama">Deskripsi</p>
                    <h2 class="utama mb-3"><i class="bi bi-clock"></i> Batas Donasi</h2>
                    <h2 class="utama"><i class="bi bi-clipboard-check"></i> Target Donasi</h2>
                    <h2 class="utama"><i class="bi bi-clipboard-check"></i> Uang Terkumpul</h2>
                </div>
            </div>
            <div class="text-center">
                <a href="/donasi/berhasil/detail/id/transaksi" class="btn btn-primary px-5">
                    <h1>Donasikan</h1>
                </a>
            </div>
        </div>
    </section>
@endsection
