@extends('admin.layouts')

@section('content')
    <div class="mb-5">
        <h1>Data Pelatihan</h1>
    </div>

    <table class="table text-center mb-3">
        <thead>
            <tr>
                <th>ID Pelatihan</th>
                <th>Nama Pelatihan</th>
                <th>Tanggal Pelatihan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($pelatihan as $data)
                    <td>{{ $data->id }}</td>
                    <td>{{$data->nama_pelatihan}}</td>
                    <td>{{$data->tanggal_start.' sampai '. $data->tanggal_end}}</td>
                    <td>
                        <a href="#" class="btn btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                        <a href="#" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i> Delete</a>
                    </td>
                @endforeach
            </tr>
        </tbody>
    </table>

    <div class="text-center">
        <a href="/admin/pelatihan/tambah" class="btn btn-sekunder"><i class="bi bi-folder-plus"></i> Buat Pelatihan</a>
    </div>
@endsection
