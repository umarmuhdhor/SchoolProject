<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\guru;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    //
    public function index()
    {
        //
        $guru = guru::all();
        $berita = berita::all();
        return view("welcome")
            ->with("berita", $berita)
            ->with("guru", $guru);
    }
}
