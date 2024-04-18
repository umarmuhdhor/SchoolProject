<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use App\Models\berita;
use App\Models\ekskul;
use App\Models\guru;
use App\Models\informasi;
use App\Models\informasimapelperkelas;
use App\Models\jabatan;
use App\Models\kegiatanekskul;
use App\Models\murid;
use App\Models\p5;
use App\Models\ppdb;
use App\Models\prestasi;
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
        $murid = murid::where('status','aktif')->get();
        $alumni = alumni::all();
        $berita = berita::all();
        return view("daftarMurid")
            ->with("berita", $berita)
            ->with("murid", $murid)
            ->with("alumni", $alumni);
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
    public function guruDanStaff()
    {

        $jabatan = jabatan::all();
        return view("guru")
            ->with("jabatan", $jabatan);
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

    public function detailInformasiGuru($id)
    {
        $informasi = informasi::find($id);
        return view("detailInformasiGuru")
            ->with("informasi", $informasi);
    }

    public function informasiMurid()
    {
        $informasi = informasi::where('tujuan', 'murid')->get();
        return view("informasiMurid")
            ->with("informasi", $informasi);
    }

    public function detailInformasiMurid($id)
    {
        $informasi = informasi::find($id);
        return view("detailInformasiMurid")
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

    public function kegiatanEkskul($idKegiatanEkskul)
    {
        $kegiatanEkskul = kegiatanekskul::find($idKegiatanEkskul);
        return view("kegiatanEkskul")
            ->with("kegiatanEkskul", $kegiatanEkskul);
    }

    public function prestasiMurid()
    {
        $prestasi = prestasi::where('jenis', 'murid')->get();
        return view("prestasiMurid")
            ->with("prestasi", $prestasi);
    }

    public function prestasiGuru()
    {
        $prestasi = prestasi::where('jenis', 'guru')->get();
        return view("prestasiMurid")
            ->with("prestasi", $prestasi);
    }

    public function prestasiSekolah()
    {
        $prestasi = prestasi::where('jenis', 'sekolah')->get();
        return view("prestasiSekolah")
            ->with("prestasi", $prestasi);
    }

    public function p5(){
        $p5 = p5::all();
        return view('p5')->with('p5',$p5);
    }

    public function ppdb(){
        $ppdb = ppdb::all();
        return view('ppdb')->with('ppdb',$ppdb);
    }

}
