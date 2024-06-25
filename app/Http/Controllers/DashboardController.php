<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        $sumPegawai = User::count();
        $sumWoman = User::where('jk_user', 'perempuan')->count();
        $sumMan = User::where('jk_user', 'laki-laki')->count();
        return view('pages.admin.dashboard.dashboard-admin', compact('user', 'sumPegawai', 'sumWoman', 'sumMan'));
    }
}
