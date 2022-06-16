@extends('template.template')
@section('content')

<section id="Testimoni">
    <div class="container min-vh-100 py-5">
        <h1 class="fw-bold text-center">Testimoni</h1>
        <form action="/testimoni" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                <input required type="text" class="form-control" name="nama" id="nama" value="{{Auth::user()->name}}" readonly>
            </div>
            <div class="mb-3">
                <label for="testi" class="form-label fw-bold">Testimoni</label>
                <textarea name="testi" id="testi" class="form-control" rows="5" required></textarea>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
    </div>
</section>


@endsection