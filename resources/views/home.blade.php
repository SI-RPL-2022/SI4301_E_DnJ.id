@extends('template.template')
@section('content')
<section id="Header">
	@if (session('berhasil_login'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{ session('berhasil_login') }}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endif
	<div class="container vh-100">
		<div class="row pt-5">
			<div class="col-md-6">
				<img src="{{ asset('asset/ilustrasi/landing_page.png'); }}" class="header-logo">
			</div>
			<div class="col-md-6 my-5 py-5">
				<h1 class="title pt-5 utama">DnJ.id</h1>
				<h2 class="subtitle utama">Ringankan Beban Sesama <br> Mudahkan Langkah Mereka</h2>
				<a href="/donasi" class="btn btn-sekunder">Donasi Sekarang</a>
			</div>
		</div>
	</div>
</section>
<section id="Layanan">
	<div class="container text-center mb-5">
		<h2 class="subtitle utama">Layanan</h2>
		<div class="row row-cols-1 row-cols-md-3 g-4 py-5">
			<div class="col">
				<div class="card h-100 shadow p-3 mb-5 bg-body rounded">
					<a href="/donasi" class="utama text-decoration-none">
						<div class="text-center">
							<img src="{{ asset('asset/Logo/logo_donasi.png'); }}" class="card-img-top logo" alt="...">
						</div>
						<div class="card-body">
							<h3 class="card-title fw-bold">Donasi</h3>
							<h4 class="card-text fw-light">Ulurkan bantuanmu bagi mereka yang membutuhkan</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col">
				<div class="card h-100 shadow p-3 mb-5 bg-body rounded">
					<a href="#" class="utama text-decoration-none">
						<div class="text-center">
							<img src="{{ asset('asset/Logo/logo_kerja.png'); }}" class="card-img-top logo" alt="...">
						</div>
						<div class="card-body">
							<h3 class="card-title fw-bold">Pekerjaan</h3>
							<h4 class="card-text fw-light">Cari dan Dapatkan Pekerjaan dengan mudah</h4>
						</div>
					</a>
				</div>
			</div>
			<div class="col">
				<div class="card h-100 shadow p-3 mb-5 bg-body rounded">
					<a href="#" class="utama text-decoration-none">
						<div class="text-center">
							<img src="{{ asset('asset/Logo/logo_training.png'); }}" class="card-img-top logo" alt="...">
						</div>
						<div class="card-body">
							<h3 class="card-title fw-bold">Pelatihan</h3>
							<h4 class="card-text fw-light">Tingkatkan Kemampuan dan Keterampilan</h4>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="Testimoni" class="bg-sekunder vh-100">
	<h2 class="subtitle py-5  utama text-center">Apa Kata Mereka?</h2>
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner container">
			<div class="carousel-item active">
				<div class="row">
					<div class="col-md-4 py-5">
						<div class="text-center">
							<img src="{{ asset('asset/Logo/default_pic.png'); }}" class="pb-3">
							<h5 class="utama">Anonim</h5>
						</div>
					</div>
					<div class="col-md-8 py-5 my-5">
						<h2 class="utama fw-light">DnJ sangat membantu saya dalam meningkatkan keterampilan dan memudahkan untuk menemukan pekerjaan di masa pandemi ini</h2>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<div class="col-md-4 py-5">
						<div class="text-center">
							<img src="{{ asset('asset/Logo/default_pic.png'); }}" class="pb-3">
							<h5 class="utama">Anonim</h5>
						</div>
					</div>
					<div class="col-md-8 py-5 my-5">
						<h2 class="utama fw-light">DnJ sangat membantu saya dalam meningkatkan keterampilan dan memudahkan untuk menemukan pekerjaan di masa pandemi ini</h2>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row">
					<div class="col-md-4 py-5">
						<div class="text-center">
							<img src="{{ asset('asset/Logo/default_pic.png'); }}" class="pb-3">
							<h5 class="utama">Anonim</h5>
						</div>
					</div>
					<div class="col-md-8 py-5 my-5">
						<h2 class="utama fw-light">DnJ sangat membantu saya dalam meningkatkan keterampilan dan memudahkan untuk menemukan pekerjaan di masa pandemi ini</h2>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>
<section id="About">
	<div class="container vh-100 py-5 mb-5">
		<div class="text-center pb-5">
			<h2 class="utama subtitle pt-5 pb-2">Tentang Kami</h2>
			<h3 class="utama fw-light">DnJ.id hadir sebagai platform yang mampu menyambungkan<br> tangan kepada sesama yang membutuhkan bantuan</h3>
		</div>
		<div class="row row-cols-5 g-4">
			<div class="col text-center">
				<div class="card h-100 border-0">
					<div class="text-center">
						<img src="{{ asset('asset/Logo/default_pic.png'); }}" class="pb-3 logo">
					</div>
					<div class="card-body">
						<h4 class="fw-light">Ni Putu Nita Suari</h4>
					</div>
					<div class="card-footer">
						<h6 class="fw-bold">Project Manager</h6>
					</div>
				</div>
			</div>
			<div class="col text-center">
				<div class="card h-100 border-0">
					<div class="text-center">
						<img src="{{ asset('asset/Logo/default_pic.png'); }}" class="pb-3 logo">
					</div>
					<div class="card-body">
						<h4 class="fw-light">Muhammad Dzaki Alfinansyah</h4>
					</div>
					<div class="card-footer">
						<h6 class="fw-bold">Analyst</h6>
					</div>
				</div>
			</div>
			<div class="col text-center">
				<div class="card h-100 border-0">
					<div class="text-center">
						<img src="{{ asset('asset/Logo/default_pic.png'); }}" class="pb-3 logo">
					</div>
					<div class="card-body">
						<h4 class="fw-light">Hernanda Eka Prasetyo</h4>
					</div>
					<div class="card-footer">
						<h6 class="fw-bold">Front-End Developer</h6>
					</div>
				</div>
			</div>
			<div class="col text-center">
				<div class="card h-100 border-0">
					<div class="text-center">
						<img src="{{ asset('asset/Logo/default_pic.png'); }}" class="pb-3 logo">
					</div>
					<div class="card-body">
						<h4 class="fw-light">Muhammad Rayhan Abdillah</h4>
					</div>
					<div class="card-footer">
						<h6 class="fw-bold">Back-End Developer</h6>
					</div>
				</div>
			</div>
			<div class="col text-center">
				<div class="card h-100 border-0">
					<div class="text-center">
						<img src="{{ asset('asset/Logo/default_pic.png'); }}" class="pb-3 logo">
					</div>
					<div class="card-body">
						<h4 class="fw-light">Kelvin Maulana</h4>
					</div>
					<div class="card-footer">
						<h6 class="fw-bold">Programmer</h6>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

@endsection