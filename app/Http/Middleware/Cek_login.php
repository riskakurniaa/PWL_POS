<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Perbaiki namespace Auth
use Symfony\Component\HttpFoundation\Response;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        // cek sudah login atau belum. Jika belum kembali ke halaman login
        if (!Auth::check()) {
            return redirect('login');
        }

        // simpan data user pada variabel user
        $user = Auth::user();

        // jika user memiliki level sesuai pada kolom pada lanjutkan request
        if ($user->level_id == $roles) {
            return $next($request);
        }

        // jika tidak memiliki akses maka kembalikan ke halaman login
        return redirect('login')->with('error', 'Maaf Anda tidak memiliki akses');
    }
}
