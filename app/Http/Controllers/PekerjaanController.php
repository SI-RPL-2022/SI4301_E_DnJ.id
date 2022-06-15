<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerjaan;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjaan = Pekerjaan::all();
        return view('pekerjaan.view_pekerjaan', compact('pekerjaan'));
    }
    public function daftar()
    {
        $pekerjaan = Pekerjaan::all();
        return view('admin.data_pekerjaan', compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah_pekerjaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pekerjaan::create([
            'nama_pekerjaan' => $request->nama,
            'tanggal_start' => $request->tanggal_start,
            'perusahaan_perekrut' => $request->penyelenggara,
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
            'kualifikasi' => $request->kualifikasi,
            'alamat_perusahaan' => $request->alamat,
            'contact' => $request->contact,
            'link_daftar' => $request->link_daftar
        ]);
        return redirect('/admin/pekerjaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pekerjaan = Pekerjaan::find($id);
        return view('pekerjaan.detail_pekerjaan',compact('pekerjaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pekerjaan = Pekerjaan::find($id);
        return view('admin.edit_data_pekerjaan',compact('pekerjaan'));
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
        Pekerjaan::find($id)->update([
            'nama_pekerjaan' => $request->nama,
            'tanggal_start' => $request->tanggal_start,
            'perusahaan_perekrut' => $request->penyelenggara,
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
            'kualifikasi' => $request->kualifikasi,
            'alamat_perusahaan' => $request->alamat,
            'contact' => $request->contact
        ]);
        return redirect('/admin/pekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pekerjaan::find($id)->delete();
        return redirect('/admin/pekerjaan');
    }
}
