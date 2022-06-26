@extends('admin.layouts')

@section('content')
<div class="text-center">
    <h1>Dashboard Admin</h1>
</div>
<div class="row py-5">
    <div class="col-4">
        <div class="card" style="width: 18rem;background-color:#6DC4DB;">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold" style="font-size:30px;color:#1E2F68;">Donasi</h5>
                <h5 class="card-title text-center" style="font-size:50px;color:#1E2F68;">{{$donasi->count()}}</h5>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card" style="width: 18rem;background-color:#6DC4DB;">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold" style="font-size:30px;color:#1E2F68;">Pekerjaan</h5>
                <h5 class="card-title text-center" style="font-size:50px;color:#1E2F68;">{{$pekerjaan->count()}}</h5>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card" style="width: 18rem;background-color:#6DC4DB;">
            <div class="card-body">
                <h5 class="card-title text-center fw-bold" style="font-size:30px;color:#1E2F68;">Pelatihan</h5>
                <h5 class="card-title text-center" style="font-size:50px;color:#1E2F68;">{{$pelatihan->count()}}</h5>
            </div>
        </div>
    </div>
</div>
<div id="grafik"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
var total_donasi = <?php echo json_encode($total_donasi)?>;
var bulan = <?php echo json_encode($bulan)?>;
Highcharts.chart('grafik', {
    title: {
        text: 'Grafik Donasi'
    },
    xAxis: {
        categories: bulan
    },
    yAxis: {
        title: {
            text: 'Jumlah Donasi'
        }
    },
    plotOptions: {
        series: {
            allowPointSelect: true
        }
    },
    series: [{
        name: 'Jumlah Donasi',
        data: total_donasi
    }]
})
</script>
@endsection