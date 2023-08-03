<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    function index(){
        return view('auth.login');
    }

    function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username wajib di isi',
            'password.required' => 'Password wajib di isi',
        ]);
    
        $username = $request->username;
        $password = $request->password;
    
        $user = User::where('username', $username)->first();
        if (!$user) {
            return redirect('/auth')->withErrors('Username tidak ditemukan');
        }
            if (Hash::check($password, $user->password)) {
            Auth::login($user);
            Session::flash('success', 'Anda berhasil login!');
            return redirect('/dashboard');
        } else {
            return redirect('/auth')->withErrors('Password yang dimasukkan tidak valid');
        }
    }
    

    function logout(){
        Auth::logout();
        Session::flash('warning', 'Anda berhasil logout!');
        return redirect('/auth');
    }
}
