<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CheckPageVisits
{
    // public function handle(Request $request, Closure $next)
    // {
    //     // Mengecek cookie kunjungan
    //     $visits = $request->cookie('pageVisits', 0);

    //     // Mengecek apakah sudah tiga peringatan ditampilkan
    //     if ($visits >= 3) {
    //         // Handle aksi setelah tiga peringatan
    //         return response('Data telah disubmit.', 403); // Contoh: Melarang akses ke halaman dengan status 403
    //     }

    //     // Menambah jumlah kunjungan
    //     $visits++;

    //     // Menyimpan cookie untuk melacak kunjungan
    //     $response = $next($request);
    //     $response->cookie('pageVisits', $visits, 180); // 180 detik (3 menit)

    //     return $response;
    // }
}
