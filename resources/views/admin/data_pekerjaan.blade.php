@extends('admin.layouts')

@section('content')
    <div class="mb-5">
        <h1>Data Pekerjaan</h1>
    </div>

    <table class="table text-center mb-3">
        <thead>
            <tr>
                <th>ID Pekerjaan</th>
                <th>Nama Pekerjaan</th>
                <th>Tanggal Perekrutan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pekerjaan as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama_pekerjaan }}</td>
                    <td>{{ $data->tanggal_start }}</td>
                    <td>
                        <form action="/admin/pekerjaan/delete/{{ $data->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/admin/pekerjaan/edit/{{ $data->id }}" class="btn btn-outline-primary"><i
                                    class="bi bi-pencil-fill"></i> Edit</a>
                            <button href="#" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i>
                                Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center">
        <a href="/admin/pekerjaan/tambah" class="btn btn-sekunder"><i class="bi bi-folder-plus"></i> Buat Pekerjaan</a>
    </div>
@endsection
