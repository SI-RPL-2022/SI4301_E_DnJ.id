@extends('template.template')
@section('content')
<section id="Donasi">
	<div class="container min-vh-100 py-5">
		<a href="/donasi" class="back-link"><i class="bi bi-arrow-left"></i>Donasi</a>		
		<h4 class="fw-light sekunder my-5">Donasi yang belum dibayar</h4>
		@if ($pembayaran->count() > 0 )
		<div class="row bg-light py-3">
			@foreach ($pembayaran as $p)
			<div class="col-md-2 ps-5">
				<img src="{{asset('/gambar_donasi/'.$p->donasi->foto)}}" class="avatar">
			</div>
			<div class="col-md-6">
				<h4 class="utama fw-bold">{{ $p ->donasi->nama_donasi }}</h4>
				<p class="utama mb-0"><i class="bi bi-pin-map-fill pe-3"></i>{{$p->donasi->lokasi}}</p>
				<p class="utama mb-0"><i class="bi bi-person-fill pe-3"></i>{{$p->donasi->user->name}}</p>
				<p class="utama mb-0"><i class="bi bi-activity pe-3"></i>{{$p->status}}</p>
			</div>
			<div class="col-md-4 text-end">
				<h4 class="fw-bold utama mb-4">Rp @money($p->donasi->target_donasi)</h4>
				<a href="/donasi/pembayaran/{{$p->id}}" class="btn btn-primary ">Bayar</a>
			</div>
			@endforeach
		</div>
		@else
		<div class="text-center">
			<h5>Tidak ada Donasi yang dilakukan</h5>
		</div>
		@endif
		<h4 class="fw-light sekunder my-5">Donasi yang pernah dilakukan</h4>
		@if ($riwayat->count() > 0 )
		<div class="row bg-light py-3">
			@foreach ($riwayat as $r)
			<div class="col-md-2 ps-5">
				<img src="{{asset('/gambar_donasi/'.$r->donasi->foto)}}" class="avatar">
			</div>
			<div class="col-md-6">
				<h4 class="utama fw-bold">{{ $r ->donasi->nama_donasi }}</h4>
				<p class="utama mb-0"><i class="bi bi-pin-map-fill pe-3"></i>{{$r->donasi->lokasi}}</p>
				<p class="utama mb-0"><i class="bi bi-person-fill pe-3"></i>{{$r->donasi->user->name}}</p>
				<p class="utama mb-0"><i class="bi bi-activity pe-3"></i>{{$r->status}}</p>
			</div>
			<div class="col-md-4 text-end">
				<h4 class="fw-bold utama mb-4">Rp @money($r->donasi->target_donasi)</h4>
				<a href="/donasi/detail/{{$r->id}}" class="btn btn-primary ">Detail</a>
			</div>
			@endforeach
		</div>
		@else
		<div class="text-center">
			<h5>Tidak ada Donasi yang dilakukan</h5>
			<a href="/donasi" class="btn btn-primary text-center">Lakukan Donasi</a>
		</div>
		@endif
	</div>
</section>
@endsection