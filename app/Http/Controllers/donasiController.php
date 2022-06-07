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
            $donasi = Donations::orderBy('id','asc')->with('user')->get();
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

    public function pembayaran($id){
        $detail = pembayaran::findOrfail($id);
        return view('donasi.pembayaran_donasi',compact('detail'));
    }

    public function updatePembayaran($id){
        pembayaran::find($id)->update([
            'status'=>"Sudah Bayar",
        ]);
        return redirect('/');
    }

    public function detailBerdonasi($id){
        $detail = pembayaran::findOrFail($id);
        return view('donasi.detail_berdonasi_done',compact('detail'));
    }

    public function storePembayaran($id)
    {
        pembayaran::create([
            'id_donasi' => $id, 
            'id_donatur' => Auth::user()->id, 
            'nominal'=> request()->nominal,
            'metode_pembayaran'=> request()->bayar,
            'status'=>"Belum Bayar",
        ]);
        $donasi = Donations::where('id',$id)->firstOrFail();
        $nominal = request()->nominal;
        $metode = request()->bayar;
        return view('donasi.detail_berdonasi',compact('donasi','nominal','metode'));
    }

    public function riwayat()
    {
        $pembayaran = pembayaran::where('id_donatur',Auth::user()->id)->where('status','Belum Bayar')->with('user','donasi')->get();
        $riwayat = pembayaran::where('id_donatur',Auth::user()->id)->where('status','Sudah Bayar')->with('user','donasi')->get();
        return view('donasi.riwayat_donasi',compact('pembayaran','riwayat'));
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
        $total = pembayaran::where('id_donasi',$id)->where('status','Sudah Bayar')->get();
        return view('donasi.detail_donasi',compact('donasi','total'));
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
