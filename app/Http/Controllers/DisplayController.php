<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\guru;
use App\Models\murid;
use App\Models\visimisi;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    //
    public function index()
    {
        //
        $guru = guru::all();
        $berita = berita::all();
        $visi = visimisi::all();
        return view("welcome")
            ->with("berita", $berita)
            ->with("visi", $visi)
            ->with("guru", $guru);

    }

    public function daftarMurid(){
        $guru = guru::all();
        $murid = murid::all();
        $berita = berita::all();
        $visi = visimisi::all();
        return view("daftarMurid")
            ->with("berita", $berita)
            ->with("murid", $murid)
            ->with("guru", $guru);
    }
}
