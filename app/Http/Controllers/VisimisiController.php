<?php

namespace App\Http\Controllers;

use App\Models\visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $visimisi = Visimisi::all();
        return view("admin.visimisi.index")->with("visimisi", $visimisi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.visimisi.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //validasi data input form mahasiswa
        $validasi = $request->validate([
            "judul" => "required",
            "misi" => "required",
        ]);

        Visimisi::create($validasi);
        return redirect("adminVisimisi")->with("success", "Misi berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(visimisi $visimisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(visimisi $visimisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visimisi $visimisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $visimisi = Visimisi::find($id);

        if( $visimisi->delete()){
            return redirect("adminVisimisi")->with("success", "Misi berhasil disimpan");
        }
    }
}
