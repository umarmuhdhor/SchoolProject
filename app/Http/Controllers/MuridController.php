<?php

namespace App\Http\Controllers;

use App\Models\murid;
use App\Models\User;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $murid = Murid::all();
        return view("admin.murid.index")->with("murid", $murid);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $akun = User::all();

        return view("admin.murid.create")->with("akun" , $akun);
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
    public function show(murid $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(murid $murid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, murid $murid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(murid $murid)
    {
        //
    }
}
