<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Berita;
use App\Models\Ekskul;
use App\Models\Guru;
use App\Models\Informasi;
use App\Models\Informasimapelperkelas;
use App\Models\Jabatan;
use App\Models\Kegiatanekskul;
use App\Models\Murid;
use App\Models\P5;
use App\Models\Prestasi;
use App\Models\TentangSekolah;
use App\Models\Visimisi;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    //
    public function index()
    {
        //
        $guru = Guru::all();
        $berita = Berita::all();
        $visi = Visimisi::all();
        return view("welcome")
            ->with("berita", $berita)
            ->with("visi", $visi)
            ->with("guru", $guru);
    }

    public function daftarMurid()
    {
        $murid = Murid::where('status','aktif')->get();
        $alumni = Alumni::all();
        $berita = Berita::all();
        return view("daftarMurid")
            ->with("berita", $berita)
            ->with("murid", $murid)
            ->with("alumni", $alumni);
    }

    public function ekskul()
    {
        $guru = Guru::all();
        $murid = Murid::all();
        $berita = Berita::all();
        $ekskul = Ekskul::all();
        $visi = Visimisi::all();
        return view("ekskul")
            ->with("berita", $berita)
            ->with("murid", $murid)
            ->with("ekskul", $ekskul)
            ->with("guru", $guru);
    }

    public function tentangSekolah()
    {

        $sekolah = TentangSekolah::all();
        return view("tentangSekolah")
            ->with("sekolah", $sekolah);
    }
    public function guruDanStaff()
    {

        $jabatan = Jabatan::all();
        return view("guru")
            ->with("jabatan", $jabatan);
    }


    public function sejarah()
    {

        $sekolah = TentangSekolah::all();
        return view("sejarah");
    }

    public function visimisi()
    {
        $visi = Visimisi::all();
        return view("visimisi")
            ->with("visi", $visi);
    }

    public function informasiGuru()
    {
        $informasi = Informasi::where('tujuan', 'guru')->get();
        return view("informasiGuru")
            ->with("informasi", $informasi);
    }

    public function detailInformasiGuru($id)
    {
        $informasi = Informasi::find($id);
        return view("detailInformasiGuru")
            ->with("informasi", $informasi);
    }

    public function informasiMurid()
    {
        $informasi = Informasi::where('tujuan', 'murid')->get();
        return view("informasiMurid")
            ->with("informasi", $informasi);
    }

    public function detailInformasiMurid($id)
    {
        $informasi = Informasi::find($id);
        return view("detailInformasiMurid")
            ->with("informasi", $informasi);
    }

    public function daftarKegiatanEkskul($idEkskul)
    {
        $ekskul = Ekskul::find($idEkskul);
        $kegiatanEkskul = Kegiatanekskul::where('idEkskul', $idEkskul)->get();
        return view("daftarKegiatanEkskul")
            ->with("kegiatanEkskul", $kegiatanEkskul)
            ->with("ekskul", $ekskul);
    }

    public function kegiatanEkskul($idKegiatanEkskul)
    {
        $kegiatanEkskul = Kegiatanekskul::find($idKegiatanEkskul);
        return view("kegiatanEkskul")
            ->with("kegiatanEkskul", $kegiatanEkskul);
    }

    public function prestasiMurid()
    {
        $prestasi = Prestasi::where('jenis', 'murid')->get();
        return view("prestasiMurid")
            ->with("prestasi", $prestasi);
    }

    public function prestasiGuru()
    {
        $prestasi = Prestasi::where('jenis', 'guru')->get();
        return view("prestasiMurid")
            ->with("prestasi", $prestasi);
    }

    public function prestasiSekolah()
    {
        $prestasi = Prestasi::where('jenis', 'sekolah')->get();
        return view("prestasiSekolah")
            ->with("prestasi", $prestasi);
    }

    public function p5(){
        $p5 = P5::all();
        return view('p5')->with('p5',$p5);
    }


}
