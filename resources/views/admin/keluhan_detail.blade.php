@extends('admin.layouts')

@section('content')
    <section class="">
        <h2>{{ $keluhan->last()->user->name }}</h3>
            <div class="bg-sekunder-2 overflow-auto" style="min-height: 500px">
                @foreach ($keluhan as $data)
                    @if ($data->from == 'Admin')
                        <div class="text-end  p-3">
                            <p class="btn btn-light">{{ $data->pesan }}</p>
                            {{ $data->created_at->format('H:i') }}
                        </div>
                    @else
                        <div class="text-start  p-3">
                            {{ $data->created_at->format('H:i') }}
                            <p class="btn btn-light">{{ $data->pesan }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            <form action="/admin/keluhan/respon/{{ $data->user_id }}" method="post">
                @csrf
                <div class="p-3 bg-sekunder d-flex">
                    <div class="col">
                        <input type="text" name="pesan" class="form-control bg-white">
                    </div>
                    <div class="col-md-2 ms-2">
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </div>
                </div>
            </form>
    </section>
@endsection
