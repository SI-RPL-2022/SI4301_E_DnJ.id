@extends('template.template')

@section('content')
    <section id="Pekerjaan" class="min-vh-100">
        <div class="container py-5">
            <h2 class="pb-5">Pekerjaan</h2>
            <div class="row row-cols-1 row-cols-md-3 g-5">
                @foreach ($pekerjaan as $data)
                    <div class="col">
                        <div class="card h-100 card-menu">
                            <div class="text-center pt-4">
                                <img src="{{ asset('asset/Logo/card-logo.png') }}" class="img-fluid card-logo" alt="...">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title utama fw-bold">{{$data->nama_pekerjaan}}</h5>
                                <ul class="list-unstyled text-start px-3">
                                    <li><i class="bi bi-clock"></i> {{$data->tanggal_start}}</li>
                                    <li><i class="bi bi-person-fill"></i> {{$data->perusahaan_perekrut}}</li>
                                    <li><i class="bi bi-geo-alt-fill"></i> {{$data->alamat_perusahaan}}</li>
                                </ul>

                                <a href="/pekerjaan/detail/{{$data->id}}" class="btn btn-primary w-100">Daftar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
