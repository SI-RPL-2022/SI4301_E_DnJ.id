<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelatihan = Pelatihan::all();
        return view('pelatihan.view_pelatihan',compact('pelatihan'));
    }

    public function daftar()
    {
        $pelatihan = Pelatihan::all();
        return view('admin.data_pelatihan', compact('pelatihan'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.tambah_pelatihan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'contact'=> ['required','numeric']
        ]);

        // Aku mager pake validate hehe 

        $pelatihan = new Pelatihan;
        $pelatihan->nama_pelatihan = $request->nama;
        $pelatihan->tanggal_start = $request->tanggal_start;
        $pelatihan->tanggal_end = $request->tanggal_end;
        $pelatihan->batas_daftar = $request->batas_daftar;
        $pelatihan->penyelenggara = $request->penyelenggara;
        $pelatihan->deskripsi = $request->deskripsi;

        if ($request->tipe == 'onsite') {
            $pelatihan->tipe = $request->tipe;
            $pelatihan->alamat = $request->alamat;
        }elseif ($request->tipe == 'online') {
            $pelatihan->tipe = $request->tipe;
            $pelatihan->link = $request->link;
        }

        $pelatihan->contact = $request->contact;
        $pelatihan->link_daftar = $request->link_daftar;

        $pelatihan->save();

        return redirect('/admin/pelatihan');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelatihan = Pelatihan::find($id);
        return view('pelatihan.detail_pelatihan',compact('pelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelatihan = Pelatihan::find($id);
        return view('admin.edit_data_pelatihan',compact('pelatihan'));
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
        Pelatihan::find($id)->update([
            'nama_pelatihan' => $request->nama,
            'tanggal_start' => $request->tanggal_start,
            'tanggal_end' => $request->tanggal_start,
            'batas_daftar' => $request->tanggal_start,
            'penyelenggara' => $request->penyelenggara,
            'deskripsi' => $request->deskripsi,
            'tipe' => $request->tipe,
            'link' => $request->link,
            'alamat' => $request->alamat,
            'contact' => $request->contact
        ]);
        return redirect('/admin/pelatihan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pelatihan::find($id)->delete();
        return redirect('/admin/pelatihan');
    }
}
