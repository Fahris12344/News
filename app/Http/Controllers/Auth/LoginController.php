<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('success', 'Selamat datang di Dashboard!');
        }

        // Ubah isi alert di sini
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah. Silakan coba lagi.',
        ])->onlyInput('email');
    }
}
