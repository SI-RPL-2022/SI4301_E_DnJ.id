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
            @foreach ($unverif as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_donasi}}</td>
                <td style="color:#929191;"><b>{{$data->status}}</b></td>
                <td>
                    <a href="/admin/verifikasi_donasi_detail/{{$data->id}}" class="btn btn-outline-primary">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection