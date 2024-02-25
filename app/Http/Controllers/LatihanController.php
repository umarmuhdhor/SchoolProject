<?php

namespace App\Http\Controllers;

use App\Models\informasimapelperkelas;
use App\Models\latihan;
use App\Models\murid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function muridLatihan($idInformasi)
    {

        if (Auth::check()) {
            // Get the ID of the logged-in user
            $userId = Auth::id();

            // Find the murid (student) with the given idAkun
            $murid = Murid::where('idAkun', $userId)->first();

            if ($murid) {
                $idMurid = $murid->idMurid;

                $latihanExists = Latihan::where('idMurid', $idMurid)
                    ->where('idInformasi', $idInformasi)
                    ->first();



                if ($latihanExists) {
                    //minta admin buat reset
                    if ($latihanExists->status == '0') {
                        $link = informasimapelperkelas::find($idInformasi)->first()->link;
                        // Load halaman /latihan
                        return view('murid.latihan.index')->with('link', $link);
                    } else {
                        return view('murid.latihan.permintaan')->with('idMurid', $idMurid)->with('idLatihan', $latihanExists->idLatihan);
                    }
                } else {
                    latihan::create([
                        'status' => '1',
                        'idMurid' => $idMurid,
                        'idInformasi' => $idInformasi,
                    ]);
                    $link = Informasimapelperkelas::find($idInformasi)->first()->link;
                    // Load halaman /latihan
                    return view('murid.latihan.index')->with('link', $link);
                }
            } else {
                return view("/");
            }
        } else {
            return view("/");
        }
    }
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
    public function show(latihan $latihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(latihan $latihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, latihan $latihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(latihan $latihan)
    {
        //
    }
}
