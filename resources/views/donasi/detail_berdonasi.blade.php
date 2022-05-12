@extends('template.template')

@section('content')
<div class="container min-vh-100 py-5">
	<div class="text-center">
		<h3 class="utama">Selesaikan Pembayaran Anda</h3>

		<h1 id="demo"></h1>

	</div>
	<div class="shadow p-3 mb-5 bg-body rounded">
		<p class="text-utama">Mohon selesaikan pembayaran dengan mengikuti petunjuk yang telah dikirimkan. Setelah pembayaran terkonfirmasi, pembelian akan dikirim secepatnya. Terima kasih sudah menggunakan DNJ.id</p>
		<hr>
		<h4 class="utama">Ringkasan Donasi</h4>
		<table class="ms-5 my-3 text-utama">
			<tr class="">
				<td class="pe-5">Program Donasi</td>
				<td class="px-3">:</td>
				<td class="ps-2">Donasi Banjir Bandang</td>
			</tr>
			<tr class="">
				<td class="pe-5">Nominal</td>
				<td class="px-3">:</td>
				<td class="ps-2">Rp 500000</td>
			</tr>
			<tr class="">
				<td class="pe-5">Metode Pembayaran</td>
				<td class="px-3">:</td>
				<td class="ps-2">Bank BRI</td>
			</tr>
			<tr class="">
				<td class="pe-5">Kode Transaksi</td>
				<td class="px-3">:</td>
				<td class="ps-2">1202190321</td>
			</tr>
			<tr class="">
				<td class="pe-5">Status Pembayaran</td>
				<td class="px-3">:</td>
				<td class="ps-2">Belum Dibayar</td>
			</tr>
		</table>
		<div class="mb-3 text-end">
			<button type="reset" class="btn btn-danger">Batal</button>
			<button type="submit" class="btn btn-primary">Bayar</button>
		</div>
	</div>
</div>


<script>
// Set the date we're counting down to

var tomorrow = new Date();
tomorrow.setDate(tomorrow.getDate()+1);

var countDownDate = tomorrow.getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is over, write some text 
  if (distance < 0) {
  	clearInterval(x);
  	document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

@endsection