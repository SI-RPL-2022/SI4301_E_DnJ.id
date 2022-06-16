@extends('template.template')

@section('content')
    <section id="DetailDonasi">
        <div class="container min-vh-100 py-5">
            <div class="mb-2">
                <a href="/donasi/berhasil" class="back-link"><i class="bi bi-arrow-left"></i></a><b class="subtitle">Detail
                    Donasi</b>
            </div>
            <div class="row bg-sekunder-2 p-5 row-rounded mb-5">
                <div class="col-md-4">
                    <img src="{{ asset('gambar_donasi/'.$donasi->foto) }}" class="gambar-donasi">
                </div>
                <div class="col-md-8">
                    <h2 class="subtitle">{{$donasi->nama_donasi}}</h2>
                    <p class="text-utama">{{$donasi->deskripsi}}</p>
                    <h2 class="utama mb-3"><i class="bi bi-clock"></i> {{$donasi->tutup}}</h2>
                    <h2 class="utama"><i class="bi bi-clipboard-check"></i> Rp @money($donasi->target_donasi)</h2>
                    <h2 class="utama"><i class="bi bi-clipboard-check"></i> Rp @money($donasi->total_donasi)</h2>
                </div>
            </div>
            @if ($donasi->status == 'Approved:OnGoing')
            <form action="/donasi/updateStatus/{{$donasi->id}}" method="POST">
                @csrf
                @METHOD('PUT')
                <div class="text-center">
                    <button type="button" class="btn btn-primary px-5" style="background-color: #1E2F68;" disabled><h1>Donasikan</h1></button>
                    <button type="submit" class="btn btn-danger px-5"><h1>Tutup Donasi</h1></button>
                </div>
            </form>
            @elseif ($donasi->status == 'Approved:Closed')
            <div class="text-center">
                <a href="/donasi/berhasil/detail/{{$donasi->id}}/transaksi" class="btn btn-primary px-5">
                    <h1>Donasikan</h1>
                </a>
            </div>
            @endif
        </div>
    </section>
@endsection
