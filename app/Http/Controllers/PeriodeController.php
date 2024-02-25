<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $periode = Periode::all();
        return view("admin.periode.index")->with("periode", $periode);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $periode = Periode::all();
        return view("admin.periode.create")->with("periode", $periode);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validasi = $request->validate([
            "tahunPeriode" => "required",
            "semester" => "required",
        ]);

        Periode::create($validasi);
        return redirect("adminPeriode")->with("success", "Data periode berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(periode $periode)
    {
        //
    }
}
