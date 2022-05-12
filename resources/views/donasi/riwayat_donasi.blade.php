@extends('template.template')
@section('content')
<section id="Donasi">
	<div class="container min-vh-100 py-5">
		<a href="/donasi" class="back-link"><i class="bi bi-arrow-left"></i>Donasi</a>		
		<h4 class="fw-light sekunder my-5">Donasi yang pernah dilakukan</h4>
		@if ($riwayat->count() > 0 )
		<div class="row bg-light py-3">
			@foreach ($riwayat as $r)
			<div class="col-md-2 ps-5">
				<div class="avatar"></div>
			</div>
			<div class="col-md-6">
				<h4 class="fw-bold">{{ $r->$donasi->nama_donasi }}</h4>
				<p class="utama mb-0"><i class="bi bi-pin-map-fill pe-3"></i>Banjarmasin, Kalimantan Selatan</p>
				<p class="utama mb-0"><i class="bi bi-person-fill pe-3"></i>BPBD Kalsel</p>
			</div>
			<div class="col-md-4 text-end">
				<h4 class="fw-bold utama mb-4">Rp 512.345.678,00</h4>
				<a href="/donasi/berdonasi/detail" class="btn btn-primary ">Donasi</a>
			</div>
			@endforeach
		</div>
		@endif
	</div>
</section>
@endsection