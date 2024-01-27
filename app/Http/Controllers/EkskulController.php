<?php

namespace App\Http\Controllers;

use App\Models\ekskul;
use App\Models\guru;
use App\Models\murid;
use App\Models\periode;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ekskul = ekskul::all();
        return view('admin.ekskul.index')->with('ekskul', $ekskul);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $murid = murid::all();
        $periode = periode::all();
        $guru = guru::all();
        return view('admin.ekskul.create')
            ->with('guru', $guru)
            ->with('murid', $murid)
            ->with('periode', $periode);
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
    public function show(ekskul $ekskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ekskul $ekskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ekskul $ekskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ekskul $ekskul)
    {
        //
    }
}
