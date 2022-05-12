@extends('template.template')

@section('content')
<section id="DetailDonasi">
	<div class="container min-vh-100 py-5">
		<div class="mb-2">
			<a href="/donasi" class="back-link"><i class="bi bi-arrow-left"></i></a><b class="subtitle">Detail Donasi</b>	
		</div>
		<div class="row bg-sekunder-2 p-5 row-rounded mb-5">
			<div class="col-md-4">
				<img src="{{asset('/gambar_donasi/'.$donasi->foto) }}" class="gambar-donasi">
			</div>
			<div class="col-md-8">
				<h2 class="subtitle">{{$donasi->nama_donasi}}</h2>
				<p class="text-utama">{{$donasi->deskripsi}}</p>
				<h2 class="utama mb-3"><i class="bi bi-clock"></i> {{$donasi->tutup}}</h2>
				<h2 class="utama"><i class="bi bi-clipboard-check"></i> Rp {{$donasi->target_donasi}}</h2>
			</div>
		</div>
		<h4 class="text-utama mb-3">Penggalang Dana</h4>
		<div class="row bg-sekunder-2 py-4 px-5 mb-5 row-rounded">
			<div class="col-md-1">
				<div class="avatar">
					<img src="" class="w-100">
				</div>
			</div>
			<div class="col-md-11 py-3 px-5">
				<b class="text-utama fw-normal">{{$donasi->nama_penggalang}}</b> <i class="bi bi-patch-check-fill text-success"></i>
				<p class="text-muted mb-0 text-sm">Organisasi resmi dari program donasi {{$donasi->nama_donasi}}</p>
			</div>
		</div>

		<h4 class="text-utama mb-3">Penerima Donasi</h4>
		<div class="row bg-sekunder-2 py-4 px-5 mb-5 row-rounded">
			<div class="col-md-1">
				<div class="avatar">
					<img src="" class="w-100">
				</div>
			</div>
			<div class="col-md-11 py-3 px-5">
				<b class="text-utama fw-normal">{{$donasi->penerima_donasi}}</b>
				<p class="text-muted mb-0 text-sm">User terverifikasi susahk</p>
			</div>
		</div>

		<h4 class="text-utama mb-3">Deskripsi</h4>
		<div class="bg-sekunder-2 p-4 mb-5 row-rounded">
			<div class="pesan">
				<p class="text-utama">{{$donasi->deskripsi}}</p>
			</div>
		</div>

		<div class="text-center mb-5">
			<h1 class="display-1 fw-bold text-utama">Total Donasi</h1>
			<h2 class="display-4 fw-bold utama">{{$donasi->total_donasi}}</h2>
			<h2 class="display-4 fw-bold text-utama">Orang</h2>
		</div>

		<div class="d-flex justify-content-center">
			<div class="col-md-2 text-end px-4">
				<button class="btn btn-primary-outline fs-3 w-100"><i class="bi bi-share-fill"></i></button>
			</div>
			@if (session('login'))
			<div class="col-md-4">
				<a href="/donasi/berdonasi/{{$donasi->id}}" class="btn btn-primary w-100 fs-3">Donasi Sekarang</a>
			</div>
			@else
			<div class="col-md-4">
				<a href="/login" class="btn btn-primary w-100 fs-3">Donasi Sekarang</a>
			</div>
			@endif
		</div>
	</div>
</section>
@endsection