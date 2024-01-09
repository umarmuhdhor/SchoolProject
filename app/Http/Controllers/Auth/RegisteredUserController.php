<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\guru;
use App\Models\murid;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data utama user
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required',
        ]);

        $user = User::create($validate);

        // Periksa apakah user berhasil dibuat
        if ($user->role == 'guru') {
            // Validasi data guru
            $validasi = $request->validate([
                "noHp" => "required",
                "email" => "required",
                "deskripsi" => "required",
                "jk" => "required",
                "status" => "required",
                "foto" => "image",
            ]);

            // Tambahkan data tambahan ke array validasi
            $validasi["nama"] = $request->name;
            $validasi["idAkun"] = $user->id;

            // Proses upload foto
            $ext = $request->foto->getClientOriginalExtension();
            $newFileName = uniqid() . '.' . $ext;
            $validasi["foto"] = $newFileName;
            $request->foto->move(public_path('fotoGuru'), $newFileName);

            // Buat record Guru baru
            Guru::create($validasi);
            return redirect('adminGuru')->with('success', 'Guru berhasil ditambahkan');
        } else if ($user->role == 'Murid') {
            $validasi = $request->validate([
                "tempatLahir" => "required",
                "tanggalLahir" => "required",
                "agama" => "required",
                "jk" => "required",
                "noHp" => "required",
                "alamat" => "required",
                "tanggalPenerimaan" => "required",
                "foto" => "image",
            ]);
            $validasi["nama"] = $request->name;
            $validasi["idAkun"] = $user->id;

            // Proses upload foto
            $ext = $request->foto->getClientOriginalExtension();
            $newFileName = uniqid() . '.' . $ext;
            $validasi["foto"] = $newFileName;
            $request->foto->move(public_path('fotoMurid'), $newFileName);

            // Buat record Guru baru
            Murid::create($validasi);
            return redirect('adminMurid')->with('success', 'Murid berhasil ditambahkan');;
        }
    }
}
