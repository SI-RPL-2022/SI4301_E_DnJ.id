@extends('template.template')

@section('content')
<div class="container min-vh-100 py-5">
    <div class="text-center">
        <h3 class="utama">Selesaikan Pembayaran Anda</h3>

        <h1 id="demo"></h1>

    </div>
    <div class="shadow p-3 mb-5 bg-body rounded">
        <p class="text-utama">Mohon selesaikan pembayaran dengan mengikuti petunjuk yang telah dikirimkan. Setelah
            pembayaran terkonfirmasi, pembelian akan dikirim secepatnya. Terima kasih sudah menggunakan DNJ.id</p>
        <hr>
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
            <button type="reset" class="btn btn-danger">Batal</button>
            <button type="submit" data-bs-toggle="modal" data-bs-target="#pembayaran_donasi{{$detail->id}}"
                class="btn btn-primary">Bayar</a>
        </div>
    </div>
</div>
<form action="/pembayaran/{{$detail->id}}/{{$detail->donasi->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="pembayaran_donasi{{$detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Bukti Pembayaran</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="img_path">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script>
// Set the date we're counting down to

var tomorrow = new Date();
tomorrow.setDate(tomorrow.getDate() + 1);

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
    document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

@endsection