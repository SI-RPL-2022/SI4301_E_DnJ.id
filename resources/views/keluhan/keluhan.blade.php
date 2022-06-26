@extends('template.template')

@section('content')
    <section class="min-vh-100 bg-sekunder-2">

        @foreach ($keluhan as $data)
            @if ($data->from == 'User')
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

        <form action="/kirim/keluhan" method="POST">
            @csrf
            <div class="row px-5 py-5 bg-sekunder fixed-bottom">
                <div class="col">
                    <input type="text" name="pesan" id="pesan" class="form-control bg-white mt-1">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn-primary px-5 py-2 w-100"> Kirim </button>
                </div>
            </div>
        </form>
    </section>
@endsection
