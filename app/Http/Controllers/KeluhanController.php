<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index()
    {   
        $keluhan = Keluhan::where('user_id','=',auth()->user()->id)->get();
        return view('keluhan.keluhan',compact('keluhan'));
    }

    public function kirim(Request $request)
    {
        $keluhan = new Keluhan();

        $keluhan->user_id = auth()->user()->id;
        $keluhan->pesan = $request->pesan;
        $keluhan->from = 'User';

        $keluhan->save();

        return back();
    }

    public function admin()
    {
        $keluhan = Keluhan::all()->groupBy('user_id');
        
        return view('admin.keluhan', compact('keluhan'));
    }
    
    public function admin_keluhan($id)
    {
        $keluhan = Keluhan::where('user_id','=',$id)->get();

        return view('admin.keluhan_detail', compact('keluhan'));
    }

    public function respon(Request $request,$id)
    {
        $keluhan = new Keluhan();

        $keluhan->user_id = $id;
        $keluhan->pesan = $request->pesan;
        $keluhan->from = 'Admin';

        $keluhan->save();

        return back();
    }
}
