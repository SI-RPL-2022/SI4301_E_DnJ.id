@extends('template.template')
@section('content')

<section id="Donasi">	
	<div class="container min-vh-100 py-5">
		<div class="row d-flex">
			<div class="col-md-6">
				<h1 class="fw-bold">Donasi</h1>
			</div>
			@guest
			
			@else
			<div class="col text-end">
				@if (auth()->user()->roles=="Personal User")
				<i class="bi bi-search subtitle utama"></i>
				<i class="bi bi-filter subtitle utama"></i>
				<a href="/riwayat" class="icon-utama"><i class="bi bi-clock-history subtitle"></i></a>
				@elseif (auth()->user()->roles=="Organizational User")
				<i class="bi bi-search subtitle utama"></i>
				<i class="bi bi-filter subtitle utama"></i>
				<a href="riwayat" class="icon-utama"><i class="bi bi-clock-history subtitle"></i></a>
				<a href="/donasi/create" class="btn btn-sekunder mb-4 ms-4"><h4>Buat Donasi</h4></a>
				@endif
			</div>
			@endguest
		</div>

		<div class="row">
			<div class="col-md-9">
				<table class="table table-striped">
					@if ($donasi->count() > 0 )
					@foreach ($donasi as $d)
					<tr>
						<td>
							<div class="row mx-3">
								<div class="col-md-2">
									<img src="{{asset('/gambar_donasi/'.$d->foto)}}" class="avatar">
								</div>
								<div class="col-md-6">
									<h4 class="fw-bold">{{ $d -> nama_donasi }}</h4>
									<p class="utama mb-0"><i class="bi bi-pin-map-fill pe-3"></i>{{ $d -> lokasi }}</p>
									<p class="utama mb-0"><i class="bi bi-person-fill pe-3"></i>{{ $d->user->name}}</p>
								</div>
								<div class="col-md-4 text-end">
									<h4 class="fw-bold utama mb-4">Rp {{$d -> target_donasi}}</h4>
									<a href="/donasi/{{$d->id}}" class="btn btn-primary ">Donasi</a>
								</div>
							</div>
						</td>
					</tr>
					@endforeach
					@endif
				</table>
			</div>
			<div class="col-md-3 text-center p-2">
				<h4 class="fw-bold utama">Segera Donasi</h4>
				<hr>
				@foreach ($donasi as $d)
				<a href="/donasi/{{$d->id}}" class="text-decoration-none">
					<div class="card border-0">
						<table>
							<tr>
								<td class="pe-3"><h2 class="fw-bold utama text-start">{{$loop->iteration }}</h2></td>
								<td class="text-start">
									<h6>Donasi {{$d -> nama_donasi}}</h6>
									<i class="bi bi-pin-map-fill utama"></i> <b class="segera-lokasi">{{$d -> lokasi}}</b>
								</td>
							</tr>
						</table>
					</div>
				</a>
				@endforeach
			</div>
		</div>
	</div>
</section>


@endsection