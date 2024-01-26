<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\jabatan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getGuruList(Request $request)
    {
        $term = $request->input('term');

        $guruList = guru::where('nama', 'LIKE', '%' . $term . '%')->pluck('nama');

        return response()->json($guruList);
    }
    public function index()
    {
        //
        $jabatan = jabatan::all();
        return view('admin.jabatan.index')->with('jabatan', $jabatan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $jabatan = jabatan::all();
        return view('admin.jabatan.create')->with('jabatan', $jabatan);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'jabatan' => 'required',
            'guru' => [
                'required',
                Rule::exists('gurus', 'nama'), // Pastikan nama guru ada dalam tabel guru
            ],
            'tahun' => 'required',
            'status' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jabatan $jabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jabatan $jabatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jabatan $jabatan)
    {
        //
    }
}
