<?php

namespace App\Http\Controllers;
use App\Models\Kolom2;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Kolom2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kolom2=Kolom2::all();
        return view('admin/kolom2/index', ['kolom2' => $kolom2]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kolom2/create');
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

        $kolom2=Kolom2::create([
            'nama' => $request->input('nama'),
            'foto' => $namabaru
        ]);
        return redirect('/kolom2')->with('status', 'Foto berhasil ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kolom2::find($id);
        File::delete(public_path('asset/img/gallery/'). $data->foto);
        $data->delete();
        return redirect('/kolom2')->with('status', 'Foto berhasil dihapus!');
    }
}
