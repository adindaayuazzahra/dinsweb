<?php

namespace App\Http\Controllers;
use App\Models\Kolom1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Kolom1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kolom1=Kolom1::all();
        return view('admin/kolom1/index', ['kolom1' => $kolom1]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kolom1/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:png,jpeg,jpg,gif,svg'
        ]);
        
        $namabaru = time().'-'. $request->nama . '.'. $request->foto->extension();
        $request->foto->move(public_path('asset\img\gallery'), $namabaru);

        $kolom1=Kolom1::create([
            'nama' => $request->input('nama'),
            'foto' => $namabaru
        ]);
        return redirect('/kolom1')->with('status', 'Foto berhasil ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kolom1::find($id);
        File::delete(public_path('asset/img/gallery/'). $data->foto);
        $data->delete();
        return redirect('/kolom1')->with('status', 'Foto berhasil dihapus!');
    }
}
