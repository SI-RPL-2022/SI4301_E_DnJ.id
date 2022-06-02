<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Donations;
use App\Models\pembayaran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class donasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session('login')){
            $id = Auth::user()->id;
            $user = User::where('id',$id)->firstOrFail();
            $donasi = Donations::orderBy('id','asc')->get();
            return view('donasi.view_donasi',compact('donasi','user'));
        }else{
            $donasi = Donations::orderBy('id','asc')->get();
            return view('donasi.view_donasi',compact('donasi'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donasi.buat_donasi');
    }

    public function berdonasi($id)
    {
        $donasi = Donations::findOrfail($id);
        return view('donasi.form_berdonasi',compact('donasi'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('gambar_donasi'), $imgName);

        Donations::create([
            'id_penggalang' => Auth::user()->id,
            'nama_penggalang' => Auth::user()->name,
            'nama_donasi' => $request ->nama,
            'penerima_donasi' => $request ->penerima,
            'deskripsi' => $request ->deskripsi,
            'buka' => $request ->buka,
            'tutup' => $request ->tutup,
            'target_donasi' => $request ->target,
            'lokasi' => $request ->lokasi,
            'foto' => $imgName,
            'status' => "Berlangsung",
            'total_donasi' => 0,
            'jumlah_donatur' => 0
        ]);

        return redirect('/donasi');
    }

    public function storePembayaran($id)
    {
        pembayaran::create([
            'id_donasi' => $id, 
            'id_donatur' => Auth::user()->id, 
            'nama_donatur' => Auth::user()->name,
            'nominal'=> request()->nominal,
            'metode_pembayaran'=> request()->bayar,
            'status'=>"Belum Bayar",
        ]);

        return view('donasi.detail_berdonasi');
    }

    public function riwayat()
    {
        $riwayat = pembayaran::where('id_donatur',Auth::user()->id)->get(); 
        return view('donasi.riwayat_donasi',compact('riwayat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donasi = Donations::findOrfail($id);
        return view('donasi.detail_donasi',compact('donasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
