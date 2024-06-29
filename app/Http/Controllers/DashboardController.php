<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Cuti;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        $sumPegawai = User::count();
        $sumWoman = User::where('jk_user', 'perempuan')->count();
        $sumMan = User::where('jk_user', 'laki-laki')->count();
        $cuti = Cuti::where('status', 'disetujui')->get();
        $currentDate = Carbon::now()->toDateString();
        $sumCuti = Cuti::where('start_date', '<=', $currentDate)
            ->where('end_date', '>=', $currentDate)
            ->count();
        $absen = Absen::where('tgl', $currentDate)->count();

        foreach ($user as $sisa) {
            $totalKuota = $sisa->kuota_cuti;
            $sisa->total_kuota_cuti = $totalKuota;
        }
        return view('pages.admin.dashboard.dashboard-admin', compact('user', 'sumPegawai', 'sumWoman', 'sumMan', 'cuti', 'sumCuti', 'absen'));
    }
}
