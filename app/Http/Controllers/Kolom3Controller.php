<?php

namespace App\Http\Controllers;
use App\Models\Kolom3;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Kolom3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kolom3=Kolom3::all();
        return view('admin/kolom3/index', ['kolom3' => $kolom3]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kolom3/create');
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

        $kolom3=Kolom3::create([
            'nama' => $request->input('nama'),
            'foto' => $namabaru
        ]);
        return redirect('/kolom3')->with('status', 'Foto berhasil ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kolom3::find($id);
        File::delete(public_path('asset/img/gallery/'). $data->foto);
        $data->delete();
        return redirect('/kolom3')->with('status', 'Foto berhasil dihapus!');
    }
}
