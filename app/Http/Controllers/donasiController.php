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
            $donasi = Donations::where('status','Approved:OnGoing')->with('user')->get();
            return view('donasi.view_donasi',compact('donasi','user'));
        }else{
            $donasi = Donations::where('status','Approved:OnGoing')->get();
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
            'status' => "Pending",
            'total_donasi' => 0,
            'jumlah_donatur' => 0
        ]);

        return redirect('/donasi');
    }

    public function pembayaran($id){
        $detail = pembayaran::findOrfail($id);
        return view('donasi.pembayaran_donasi',compact('detail'));
    }

    public function updatePembayaran($id,$id_donasi,Request $request){
        $donasi = Donations::find($id_donasi);
        $pembayaran = pembayaran::find($id);

        $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('gambar_pembayaran'), $imgName);

        pembayaran::find($id)->update([
            'status'=>"Sudah Bayar",
            'bukti_pembayaran'=>$imgName
        ]);
        Donations::find($id_donasi)->update([
            'total_donasi'=> $donasi->total_donasi + $pembayaran->nominal,
            'jumlah_donatur' => $donasi->jumlah_donatur + 1
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

    public function selesai()
    {
        // INI NANTI Diisi Donasi yang udah  beres
        $donasi = donations::where('id_penggalang',Auth::user()->id)->get();
        return view('donasi.donasi_selesai',compact('donasi'));
    }

    public function updateStatus($id) {
        Donations::find($id)->update([
            'status'=>"Approved:Closed"
        ]);
        return redirect('/donasi/berhasil');
    }

    public function detail_selesai($id)
    {   
        $donasi = Donations::find($id);
        return view('donasi.berhasil_detail',compact('donasi'));
    }

    public function transaksi($id)
    {
        $donasi = Donations::find($id);
        return view('donasi.form_transaksi',compact('donasi'));
    }

    public function donasi_berhasil($id)
    {
        $donasi = Donations::find($id);
        Donations::find($id)->update([
            'status'=>"Approved:Closed"
        ]);
        return view('donasi.donasi_berhasil',compact('donasi'));
    }

    public function index_verif(){

        $unverif = Donations::where('status','Pending')->get();

        return view('admin.verifikasidonasi',compact('unverif'));
    }

    public function detail_verif($id){

        $unverif = Donations::find($id);

        return view('admin.verifikasidonasi_detail',compact('unverif'));
    }

    public function approve($id){
        Donations::find($id)->update([
            'status'=>"Approved:OnGoing"
        ]);
        return redirect('/admin/verifikasi_donasi');
    }

    public function admin_riwayat_donasi(){
        $donasi = Donations::all();

        return view('admin.riwayatdonasi',compact('donasi'));
    }
}
