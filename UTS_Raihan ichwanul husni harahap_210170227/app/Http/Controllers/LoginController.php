<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function index()
    {
        //  $data = User::all();

        return view('login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $maha = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($maha)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
        //dd($request->all());
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Berhasil Logout');
    }
}
