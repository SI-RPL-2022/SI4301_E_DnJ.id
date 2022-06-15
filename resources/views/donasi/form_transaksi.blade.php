@extends('template.template')

@section('content')
    <div class="container py-5 min-vh-100">
        <div class="text-center mb-5">
            <h2>Transaksi Donasi</h2>
        </div>

        <form action="/donasi/selesai">
            <div class="mb-2">
                <label for="id_user" class="form-label">ID User</label>
                <input type="text" name="id_user" id="id_user" class="form-control">
            </div>
            <div class="mb-2">
                <label for="deskripsi" class="form-label">Deskripsi Transaksi</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="text-end">
                <button type="reset" class="btn btn-danger mx-5 px-5">Batal</button>
                <button type="submit" class="btn btn-primary px-5">Submit</button>
            </div>
        </form>
    </div>
@endsection