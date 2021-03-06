@extends('admin.layouts')

@section('content')
    <div class="mb-5">
        <h1><i class="bi bi-arrow-left"></i> Penambahan Pelatihan</h1>
    </div>

    <form action="/admin/pelatihan/tambah" method="post">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label text-utama fw-bold">Nama Pelatihan</label>
            <input required type="text" class="form-control" name="nama" id="nama">
        </div>

        <div class="mb-3">
            <label for="tanggal_start" class="form-label text-utama fw-bold">Tanggal Start Pelatihan</label>
            <input required type="date" class="form-control" name="tanggal_start" id="tanggal_start">
        </div>

        <div class="mb-3">
            <label for="tanggal_end" class="form-label text-utama fw-bold">Tanggal End Pelatihan</label>
            <input required type="date" class="form-control" name="tanggal_end" id="tanggal_end">
        </div>

        <div class="mb-3">
            <label for="batas_daftar" class="form-label text-utama fw-bold">Batas Daftar Pelatihan</label>
            <input required type="date" class="form-control" name="batas_daftar" id="batas_daftar">
        </div>

        <div class="mb-3">
            <label for="penyelenggara" class="form-label text-utama fw-bold">Penyelenggara Pelatihan</label>
            <input required type="text" class="form-control" name="penyelenggara" id="penyelenggara">
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label text-utama fw-bold">Deskripsi Pelatihan</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <div class="form-check form-check-inline">
                <input required type="radio" name="tipe" id="tipe" class="form-check-input" value="onsite" checked>
                <label for="tipe" class="form-check-label">Onsite</label>
            </div>
            <div class="form-check form-check-inline">
                <input required type="radio" name="tipe" id="tipe" class="form-check-input" value="online">
                <label for="tipe" class="form-check-label">Online</label>
            </div>
        </div>

        <div class="mb-3 tipe" id="onsite">
            <label for="alamat" class="form-label text-utama fw-bold">Alamat Pelatihan</label>
            <input type="text" class="form-control" name="alamat" id="alamat">
        </div>

        <div class="mb-3 tipe" id="online">
            <label for="link" class="form-label text-utama fw-bold">Link Pelatihan</label>
            <input type="text" class="form-control" name="link" id="link">
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label text-utama fw-bold">Contact Person</label>
            <input required type="text" class="form-control @error('contact')
                is-invalid
            @enderror" name="contact" id="contact">

            @error('contact')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="link_daftar" class="form-label text-utama fw-bold">Link Pendaftaran</label>
            <input required type="text" class="form-control" name="link_daftar" id="link_daftar">
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">Buat</button>
            <button type="reset" class="btn btn-danger">Batal</button>
        </div>


    </form>

    <script>
        // Jquery buat hide link atau alamat
        $("div#online").hide();

        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var demovalue = $(this).val();
                $("div.tipe").hide();
                $("#" + demovalue).show();
            });
        });
    </script>
@endsection
