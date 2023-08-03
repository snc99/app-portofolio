<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Session;


class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // Jika pengguna telah login dan bukan melalui request AJAX
    if (Auth::check() && ! $request->expectsJson()) {
        // Simpan pesan dalam session
        Session::flash('success', 'Anda sudah login dan tidak bisa mengakses halaman login lagi.');
    }

    // Redirect ke route yang dituju
    return 'auth';
    }
}
