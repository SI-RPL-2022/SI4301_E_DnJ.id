@extends('admin.layouts')

@section('content')
    <div class="mb-5">
        <h1>Verifikasi Donasi</h1>
    </div>

    <table class="table text-center mb-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Donasi</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($donasi as $data)
                <td>{{$data->id}}</td>
                <td>{{$data->nama_donasi}}</td>
                @if ($data->status == "Approve")
                <td style="color:#03CD6C;"><b>{{$data->status}}</b></td>
                @elseif ($data->status == "Reject")
                <td style="color:#03CD6C;"><b>{{$data->status}}</b></td>
                @else 
                <td><b>{{$data->status}}</b></td>
                @endif
                <td>
                    <a href="/admin/verifikasi_donasi_detail/{{$data->id}}" class="btn btn-outline-primary">Detail</a>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection