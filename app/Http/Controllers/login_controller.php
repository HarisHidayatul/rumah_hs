<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class login_controller extends Controller
{
    //
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // Temukan user berdasarkan email dan password (tanpa enkripsi)
        $user = User::where('email', $email)
            ->where('password', $password)
            ->first();
        if ($user) {
            // Simpan informasi user ke dalam session
            session(['user' => $user]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Login gagal. Periksa kembali email dan password.');
        }
        // @dd(Session::all());
    }
}
