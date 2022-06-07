@extends('template.template')

@section('content')
<section id="FormDonasi" class="min-vh-100">
    <div class="container min-vh-100 py-5">
        <div class="mb-2">
            <a href="/donasi/{{$donasi->id}}" class="back-link"><i class="bi bi-arrow-left"></i></a><b class="subtitle utama">Isi Data Donatur</b>   
        </div>

        <form action="/berdonasi/{{$donasi->id}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" value="{{Auth::user()->name}}" class="form-control bg-sekunder-2 border-0">
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal Donasi</label>
                <div class="input-group mb-3">
                    <span class="input-group-text border-0 bg-sekunder-2" id="basic-addon1">Rp</span>
                    <input type="text" class="form-control border-0 bg-sekunder-2" name="nominal" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="mb-3">
                <label for="metode" class="form-label">Metode Bayar</label>
                <a class="form-controlbg-sekunder-2 text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <input type="text" name="bayar" id="bayar" class="bg-sekunder-2 form-control border-0" value="Pilih Metode Bayar">
                </a>
            </div>
            <div class="mb-3 text-end">
                <button type="reset" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Metode Bayar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <button type="button" id="pilihan" value="Bank Mandiri" class="btn bg-sekunder-2 mb-3 w-100 text-start" onclick="pilih('Bank Mandiri')" data-bs-dismiss="modal" >Bank Mandiri</button>
                            <button type="button" id="pilihan" value="Bank BRI" class="btn bg-sekunder-2 mb-3 w-100 text-start" onclick="pilih('Bank BRI')" data-bs-dismiss="modal" >Bank BRI</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>


    <script type="text/javascript">


        // function pilih() {
        //     var buttonF = document.getElementById("pilihan").value;
        //     inputF.value = buttonF;
        // }

        function pilih(value) {
            var fired_button = value;
            document.getElementById("bayar").value = fired_button;
        };
    </script>
</section>
@endsection

