@extends('template.template')

@section('content')
    <div class="container min-vh-100 py-5">
        <div class="mb-5">
            <h1><i class="bi bi-arrow-left"></i> Detail Pekerjaan</h1>
        </div>

        <div class="row card-menu p-5">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="{{ asset('asset/Logo/account.png') }}" alt="" class="detail-logo">
                    <p><b class="fs-4">{{$pekerjaan->perusahaan_perekrut}}</b><br>
                        {{$pekerjaan->alamat_perusahaan}}</p>
                </div>
            </div>
            <div class="col-md-8">
                <h2 class="fw-bold">{{$pekerjaan->nama_pekerjaan}}</h2>
                <div class="deskripsi mb-3">
                    <p class="text-utama fw-bold fs-5">Deskripsi Pekerjaan</p>
                    <p class="text-utama text-justify">{{$pekerjaan->deskripsi}}</p>
                </div>
                <div class="kualifikasi">
                    <p class="text-utama fw-bold fs-5">Kualifikasi Pekerjaan</p>
                    <p class="text-utama text-justify">{{$pekerjaan->kualifikasi}}</p>
                </div>

                <div class="mb-5 fw-bold fs-3 text-utama">
                    <i class="bi bi-clock"></i> {{$pekerjaan->tanggal_start}}
                </div>

                <div class="mb-3">
                    <a href="#" class="btn btn-primary fs-2">Apply Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
