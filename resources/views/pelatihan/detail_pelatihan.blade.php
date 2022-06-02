@extends('template.template')

@section('content')
    <div class="container min-vh-100 py-5">
        <div class="mb-5">
            <h1><i class="bi bi-arrow-left"></i> Detail Pelatihan</h1>
        </div>

        <div class="row card-menu p-5">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="{{ asset('asset/Logo/account.png') }}" alt="" class="detail-logo">
                    <p><b class="fs-4">{{$pelatihan->penyelenggara}}</b><br>
                        {{$pelatihan->alamat}}</p>
                </div>
            </div>
            <div class="col-md-8">
                <h2 class="fw-bold">{{$pelatihan->nama_pelatihan}}</h2>
                <div class="deskripsi mb-3">
                    <p class="text-utama fw-bold fs-5">Deskripsi Pelatihan</p>
                    <p class="text-utama text-justify">{{$pelatihan->deskripsi}}</p>
                </div>
                <div class="text-utama mb-3">
                    <p class="fw-bold fs-5">Waktu Pelatihan</p>
                    <ul>
                        <li>{{$pelatihan->tanggal_start}} - {{$pelatihan->tanggal_end}}</li>
                    </ul>
                </div>

                <div class="text-utama mb-3">
                    <p class="fw-bold fs-5">Tempat Pelatihan</p>
                    <ul>
                        @if ($pelatihan->tipe == "onsite")
                        <li>{{$pelatihan->tipe}}</li>
                        <li>{{$pelatihan->alamat}}</li>
                        @elseif ($pelatihan->tipe == "online")
                        <li>{{$pelatihan->tipe}}</li>
                        <li>{{$pelatihan->link}}</li>
                        @endif
                    </ul>
                </div>

                <div class="text-utama mb-3">
                    <p class="fw-bold fs-5">Batas Daftar Pelatihan</p>
                    <ul>
                        <li>{{$pelatihan->batas_daftar}}</li>
                    </ul>
                </div>


                <div class="mb-3">
                    <a href="#" class="btn btn-primary fs-2">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
