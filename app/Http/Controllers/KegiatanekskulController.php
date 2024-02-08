<?php

namespace App\Http\Controllers;

use App\Models\kegiatanekskul;
use Illuminate\Http\Request;

class KegiatanekskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.ekskul.tambahKegiatan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $kegiatan = kegiatanekskul::find($id);
        return view('admin.ekskul.kegiatan')->with('kegiatan', $kegiatan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kegiatanekskul $kegiatanekskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kegiatanekskul $kegiatanekskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kegiatanekskul $kegiatanekskul)
    {
        //
    }
}
