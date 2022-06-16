@extends('template.template')

@section('content')
<div class="container min-vh-100 py-5">
    <div class="text-center">
		<h3 class="utama">Terima kasih telah melakukan donasi</h3>
	</div>
	<div class="shadow p-3 mb-5 bg-body rounded">
		<h4 class="utama">Ringkasan Donasi</h4>
		<table class="ms-5 my-3 text-utama">
			<tr class="">
				<td class="pe-5">Program Donasi</td>
				<td class="px-3">:</td>
				<td class="ps-2">Donasi {{$detail->donasi->nama_donasi}}</td>
			</tr>
			<tr class="">
				<td class="pe-5">Nominal</td>
				<td class="px-3">:</td>
				<td class="ps-2">Rp @money($detail->nominal)</td>
			</tr>
			<tr class="">
				<td class="pe-5">Metode Pembayaran</td>
				<td class="px-3">:</td>
				<td class="ps-2">{{$detail->metode_pembayaran}}</td>
			</tr>
			<tr class="">
				<td class="pe-5">Kode Transaksi</td>
				<td class="px-3">:</td>
				<td class="ps-2">1202190321</td>
			</tr>
			<tr class="">
				<td class="pe-5">Status Pembayaran</td>
				<td class="px-3">:</td>
				<td class="ps-2">{{$detail->status}}</td>
			</tr>
		</table>
		<div class="mb-3 text-end">
			<a href="/riwayat" class="btn btn-primary">Submit</a>
		</div>
	</div>
</div>
@endsection