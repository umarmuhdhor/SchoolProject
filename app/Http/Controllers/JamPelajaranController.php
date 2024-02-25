<?php

namespace App\Http\Controllers;

use App\Models\jamPelajaran;
use Illuminate\Http\Request;

class JamPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jam = JamPelajaran::all();
        return view("admin.jamPelajaran.index")->with("jam", $jam);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.jamPelajaran.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validasi = $request->validate([
            "jam" => "required",
        ]);

        JamPelajaran::create($validasi);
        return redirect("adminJamPelajaran")->with("success", "Data jam pelajaran berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(jamPelajaran $jamPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jamPelajaran $jamPelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jamPelajaran $jamPelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jamPelajaran $jamPelajaran)
    {
        //
    }
}
