@extends('admin.layouts')

@section('content')
<div class="mb-5">
    <h1><i class="bi bi-arrow-left"></i> Detail Donasi</h1>
</div>

<div class="container">
    <div class="mb-3">
        <label for="nama" class="form-label text-utama fw-bold">Nama Donasi</label>
        <input required type="text" class="form-control" name="nama" id="nama" readonly
            value="{{$unverif->nama_donasi}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label text-utama fw-bold">Tanggal Transaksi</label>
        <input required type="text" class="form-control" name="nama" id="nama" readonly value="{{$unverif->tutup}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label text-utama fw-bold">Target Donasi</label>
        <input required type="text" class="form-control" name="nama" id="nama" readonly
            value="@money($unverif->target_donasi)">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label text-utama fw-bold">Dari</label>
        <input required type="text" class="form-control" name="nama" id="nama" readonly
            value="{{$unverif->user->name}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label text-utama fw-bold">Untuk</label>
        <input required type="text" class="form-control" name="nama" id="nama" readonly
            value="{{$unverif->penerima_donasi}}">
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label text-utama fw-bold">Deskripsi Donasi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required
            readonly>{{$unverif->deskripsi}}</textarea>
    </div>
    @if ($unverif->status == "Approved:OnGoing")
    <div class="text-end">
        <a href="/admin/riwayat_donasi" class="btn btn-primary">Kembali</a>
    </div>
    @else
    <form action="/admin/verifikasi_donasi_approve/{{$unverif->id}}" method="POST">
        @csrf
        @METHOD('PUT')
        <div class="text-end">
            <a href="/admin/riwayat_donasi" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success">Approve</button>
            <button type="reset" class="btn btn-danger">Reject</button>
        </div>
    </form>
    @endif
</div>

@endsection