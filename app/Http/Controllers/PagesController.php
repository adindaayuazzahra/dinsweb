<?php

namespace App\Http\Controllers;
use App\Models\Kolom1;
use App\Models\Kolom2;
use App\Models\Kolom3;
use App\Models\Kolom4;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function about()
    {
        return view('about');
    }
    
    public function viewgal()
    {
        $kolom1=Kolom1::all();
        $kolom2=Kolom2::all();
        $kolom3=Kolom3::all();
        $kolom4=Kolom4::all();
        return view('gallery',['kolom1'=>$kolom1, 'kolom2'=>$kolom2, 'kolom3'=>$kolom3, 'kolom4'=>$kolom4]);
    }
}
