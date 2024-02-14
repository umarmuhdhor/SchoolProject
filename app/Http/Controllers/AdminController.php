<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    //
    public function resetCookie()
    {
        // Reset cookie dengan menghapusnya
        Cookie::queue(Cookie::forget('warningCount'));
        Cookie::queue(Cookie::forget('latihanVisited'));

        // Redirect kembali ke halaman admin atau halaman lain yang sesuai
        return redirect()->route('admin.dashboard')->with('success', 'Cookie berhasil direset.');
    }
}
