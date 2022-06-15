@extends('template.template')

@section('content')
    <section id="Donasi">
        <div class="container min-vh-100 py-5">
            <div class="mb-5">
                <h3>Daftar Donasi Selesai</h3>
            </div>
            <table class="table table-striped">
                <tr>
                    <td>
                        <div class="row mx-3">
                            <div class="col-md-2 ps-5">
                                <img src="{{ asset('asset/Logo/Logo.png') }}" class="avatar">
                            </div>
                            <div class="col-md-6">
                                <h4 class="utama fw-bold">Judul Donasi</h4>
                                <p class="utama mb-0"><i class="bi bi-pin-map-fill pe-3"></i>Lokasi Donasi</p>
                                <p class="utama mb-0"><i class="bi bi-person-fill pe-3"></i>Penggalang Donasi</p>
                                <p class="utama mb-0"><i class="bi bi-activity pe-3"></i>Status</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <h4 class="fw-bold utama mb-4">Rp 1000.000.000</h4>
                                <a href="/donasi/berhasil/detail" class="btn btn-primary ">Bayar</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
@endsection
