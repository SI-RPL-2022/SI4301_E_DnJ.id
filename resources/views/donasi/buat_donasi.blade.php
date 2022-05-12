@extends('template.template')

@section('content')

<section id="BuatDonasi" class="min-vh-100 py-5" style="background-color: #BEF1FF;">
	<div class="container bg-white py-5 border-0">
		<div class="mb-4">
			<a href="/donasi" class="back-link"><i class="bi bi-arrow-left"></i></a><b class="subtitle">Buat Donasi</b>	
		</div>

		<form action="/donasi" method="POST" enctype="multipart/form-data" class="px-5">
			@csrf
			<div class="row mb-2">
				<div class="col-md-2">
					<label for="nama" class="form-label fw-bold">Nama Donasi</label>
				</div>
				<div class="col">
					<input type="text" name="nama" class="form-control bg-sekunder-2 border-0">
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-md-2">
					<label for="penerima" class="form-label fw-bold">Nama Penerima</label>
				</div>
				<div class="col">
					<input type="text" name="penerima" class="form-control bg-sekunder-2 border-0">
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-md-2">
					<label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
				</div>
				<div class="col">
					<input type="text" name="deskripsi" class="form-control bg-sekunder-2 border-0">
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-md-2">
					<label for="lokasi" class="form-label fw-bold">Lokasi</label>
				</div>
				<div class="col">
					<input type="text" name="lokasi" class="form-control bg-sekunder-2 border-0">
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-md-2">
					<label for="buka" class="form-label fw-bold">Dibuka Pada</label>
				</div>
				<div class="col">
					<input type="date" name="buka" class="form-control bg-sekunder-2 border-0">
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-md-2">
					<label for="tutup" class="form-label fw-bold">Ditutup Pada</label>
				</div>
				<div class="col">
					<input type="date" name="tutup" class="form-control bg-sekunder-2 border-0">
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-md-2">
					<label for="target" class="form-label fw-bold">Target Donasi</label>
				</div>
				<div class="col">
					<div class="input-group mb-3">
						<span class="input-group-text border-0 bg-sekunder-2" id="basic-addon1">Rp</span>
						<input type="number" name="target" class="form-control border-0 bg-sekunder-2" aria-describedby="basic-addon1">
					</div>
				</div>
			</div>

			<div class="row mb-2">
				<div class="col-md-2">
					<label for="img_path" class="form-label fw-bold">Foto</label>
				</div>
				<div class="col">
					<input type="file" name="img_path" class="form-control border-0">
				</div>
			</div>

			<div class="row mb-2">
				<button type="submit" class="btn btn-primary w-100">
					Buat Donasi
				</button>
			</div>
		</form>
	</div>
</section>

@endsection