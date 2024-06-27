<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

    public function userLogin(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('nip', $request->nip)->first();

        if ($user && $user->status !== 'aktif') {
            return back()->withErrors(['nip' => 'Akun Anda tidak aktif.']);
        }

        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password, 'role' => 'user'])) {
            return redirect()->route('dashboardUser');
        }

        return back()->withErrors(['nip' => 'NIP atau password salah!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
