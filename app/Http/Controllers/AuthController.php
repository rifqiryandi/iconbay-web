<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // return response()->json(['msg' => 'Login Berhasil', 'error' => false]);
            return redirect()->intended('admin');
        } else {
            return response()->json(['msg' => 'Tidak Ada Data', 'error' => true]);
            // return redirect()->back()->with('error', 'Username dan Password yang anda masukkan salah');
        }
    }

    function logout(Request $request)
    {
        $request->session()->flush();
        // User::where('id', Auth::user()->id)->update(['status' => 'offline']);
        Auth::logout();
        return redirect('/auth');
    }
}
