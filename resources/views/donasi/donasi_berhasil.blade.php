@extends('template.template')

@section('content')
    <div class="container min-vh-100 py-5">
        <div class="text-center">
            <h2>Transaksi Berhasil</h2>
            <h1 class="display-1" style="font-size:200px"><i class="bi bi-clipboard-check"></i></h1>
            <h3>Dana Sudah Di Kirimkan Kepada {{$donasi->penerima_donasi}}</h3>
            <h5>Terima Kasih Sudah Memakai Layanan Kami</h5>
            <a href="/donasi/berhasil" class="btn btn-primary">Oke</a>
        </div>
    </div>
@endsection