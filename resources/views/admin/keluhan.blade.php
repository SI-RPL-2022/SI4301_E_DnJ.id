
@extends('admin.layouts')

@section('content')
    <table class="table text-center mb-3">
        <thead>
            <tr>
                <th>ID User</th>
                <th>Nama User</th>
                <th>Pesan</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keluhan as $data)
                <tr @if ($data->last()->from == 'User') class="fw-bold" @endif>
                    <td>{{ $data->last()->user->id }}</td>
                    <td>{{ $data->last()->user->name }}</td>
                    <td>{{ $data->last()->pesan }}</td>
                    <td>{{ $data->last()->created_at->format('j F Y  H:i') }}</td>
                    <td><a href="/admin/keluhan/{{ $data->last()->user->id }}" class="btn btn-info">Lihat</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
