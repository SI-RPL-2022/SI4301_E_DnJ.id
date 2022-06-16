@extends('admin.layouts')

@section('content')
    <div class="mb-5">
        <h1><i class="bi bi-arrow-left"></i> Penambahan Pekerjaan</h1>
    </div>

    <form action="/admin/pekerjaan/edit/{{$pekerjaan->id}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label text-utama fw-bold">Nama Pekerjaan</label>
            <input required type="text" class="form-control" name="nama" id="nama" value="{{$pekerjaan->nama_pekerjaan}}">
        </div>

        <div class="mb-3">
            <label for="tanggal_start" class="form-label text-utama fw-bold">Tanggal Start Perekrutan</label>
            <input required type="date" class="form-control" name="tanggal_start" id="tanggal_start" value="{{$pekerjaan->tanggal_start}}">
        </div>

        <div class="mb-3">
            <label for="penyelenggara" class="form-label text-utama fw-bold">Perusahaan Perekrut</label>
            <input required type="text" class="form-control" name="penyelenggara" id="penyelenggara" value="{{$pekerjaan->perusahaan_perekrut}}">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label text-utama fw-bold">Deskripsi Pekerjaan</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required>{{$pekerjaan->deskripsi}}</textarea>
        </div>

        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input required type="radio" name="tipe" id="tipe" class="form-check-input" value="onsite" checked>
                <label for="tipe" class="form-check-label">Onsite</label>
            </div>
            <div class="form-check form-check-inline">
                <input required type="radio" name="tipe" id="tipe" class="form-check-input" value="Remote">
                <label for="tipe" class="form-check-label">Remote</label>
            </div>

            <div class="form-check form-check-inline">
                <input required type="radio" name="tipe" id="tipe" class="form-check-input" value="Hybrid">
                <label for="tipe" class="form-check-label">Hybrid</label>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="kualifikasi" class="form-label text-utama fw-bold">Kualifikasi Pekerjaan</label>
            <textarea name="kualifikasi" id="kualifikasi" class="form-control" rows="3" required>{{$pekerjaan->kualifikasi}}</textarea>
        </div>

        <div class="mb-3 tipe">
            <label for="alamat" class="form-label text-utama fw-bold">Alamat Perusahaan</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{$pekerjaan->alamat_perusahaan}}">
        </div>


        <div class="mb-3">
            <label for="contact" class="form-label text-utama fw-bold">Contact Person</label>
            <input required type="text" class="form-control" name="contact" id="contact" value="{{$pekerjaan->contact}}">

        </div>
        <div class="mb-3">
            <label for="link_daftar" class="form-label text-utama fw-bold">Link Pendaftaran</label>
            <input required type="text" class="form-control" name="link_daftar" id="link_daftar" value="{{$pekerjaan->link_daftar}}">
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>


    </form>

@endsection
