<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\ekskul;
use App\Models\guru;
use App\Models\informasi;
use App\Models\kegiatanekskul;
use App\Models\murid;
use App\Models\tentangSekolah;
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

    public function daftarMurid()
    {
        $guru = guru::all();
        $murid = murid::all();
        $berita = berita::all();
        $visi = visimisi::all();
        return view("daftarMurid")
            ->with("berita", $berita)
            ->with("murid", $murid)
            ->with("guru", $guru);
    }

    public function ekskul()
    {
        $guru = guru::all();
        $murid = murid::all();
        $berita = berita::all();
        $ekskul = ekskul::all();
        $visi = visimisi::all();
        return view("ekskul")
            ->with("berita", $berita)
            ->with("murid", $murid)
            ->with("ekskul", $ekskul)
            ->with("guru", $guru);
    }

    public function tentangSekolah()
    {

        $sekolah = tentangSekolah::all();
        return view("tentangSekolah")
            ->with("sekolah", $sekolah);
    }

    public function sejarah()
    {

        $sekolah = tentangSekolah::all();
        return view("sejarah");
    }

    public function visimisi()
    {
        $visi = visimisi::all();
        return view("visimisi")
            ->with("visi", $visi);
    }

    public function informasiGuru()
    {
        $informasi = informasi::where('tujuan', 'guru')->get();
        return view("informasiGuru")
            ->with("informasi", $informasi);
    }

    public function informasiMurid()
    {
        $informasi = informasi::where('tujuan', 'murid')->get();
        return view("informasiMurid")
            ->with("informasi", $informasi);
    }

    public function daftarKegiatanEkskul($idEkskul)
    {
        $ekskul = ekskul::find($idEkskul);
        $kegiatanEkskul = kegiatanekskul::where('idEkskul', $idEkskul)->get();
        return view("daftarKegiatanEkskul")
            ->with("kegiatanEkskul", $kegiatanEkskul)
            ->with("ekskul", $ekskul);
    }
}
