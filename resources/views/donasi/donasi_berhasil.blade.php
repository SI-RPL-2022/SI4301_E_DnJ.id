@extends('template.template')

@section('content')
    <div class="container min-vh-100 py-5">
        <div class="text-center">
            <h2>Transaksi Berhasil</h2>
            <h1 class="display-1" style="font-size:200px"><i class="bi bi-clipboard-check"></i></h1>
            <h3>Menunggu Verifikasi melalui Admin</h3>
            <h5>Tenang ! Kami akan mengirim notifikasi jika transaksi berhasil !</h5>
            <a href="/donasi/berhasil" class="btn btn-primary">Oke</a>
        </div>
    </div>
@endsection