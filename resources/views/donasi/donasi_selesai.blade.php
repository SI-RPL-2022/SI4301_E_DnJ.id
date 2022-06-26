@extends('template.template')

@section('content')
<section id="Donasi">
    <div class="container min-vh-100 py-5">
        <div class="mb-2">
            <a href="/donasi" class="back-link"><i class="bi bi-arrow-left"></i></a><b class="subtitle">Daftar Donasi
                Yang Diselenggarakan</b>
        </div>
        <table class="table table-striped">
            @foreach ($donasi as $d)
            <tr>
                <td>
                    <div class="row mx-3">
                        <div class="col-md-2 ps-5">
                            <img src="{{ asset('gambar_donasi/'.$d->foto) }}" class="avatar">
                        </div>
                        <div class="col-md-6">
                            <h4 class="utama fw-bold">{{$d->nama_donasi}}</h4>
                            <p class="utama mb-0"><i class="bi bi-pin-map-fill pe-3"></i>{{$d->lokasi}}</p>
                            <p class="utama mb-0"><i class="bi bi-person-fill pe-3"></i>{{$d->user->name}}</p>
                            <p class="utama mb-0"><i class="bi bi-activity pe-3"></i>{{$d->status}}</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <h4 class="fw-bold utama mb-4">Rp @money($d->target_donasi)</h4>
                            <a href="/donasi/berhasil/detail/{{$d->id}}" class="btn btn-primary ">Detail</a>
                        </div>
                    </div>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection