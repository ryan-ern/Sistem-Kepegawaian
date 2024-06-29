<?php

namespace App\View\Components;

use App\Models\DataDiri;
use App\Models\Diklat;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\KeluargaAnak;
use App\Models\KeluargaOrtu;
use App\Models\KeluargaPasangan;
use App\Models\Kinerja;
use App\Models\MasaKerja;
use App\Models\Pendidikan;
use App\Models\Penghargaan;
use App\Models\Pns;
use App\Models\Skp;
use Illuminate\View\Component;

class SidebarAdmin extends Component
{
    public $content;



    public function render()
    {
        $dataDiris = DataDiri::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $diklats = Diklat::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $golongans = Golongan::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $jabatans = Jabatan::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $keluargaAnaks = KeluargaAnak::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $keluargaOrtus = KeluargaOrtu::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $keluargaPasangans = KeluargaPasangan::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $kinerjas = Kinerja::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $masaKerjas = MasaKerja::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $pendidikans = Pendidikan::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $penghargaans = Penghargaan::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $pns = Pns::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();
        $skps = Skp::with('files', 'user')->where('status', 'diproses')->orderBy('updated_at', 'desc')->get();

        $notifications = collect()
            ->merge($dataDiris)
            ->merge($diklats)
            ->merge($golongans)
            ->merge($jabatans)
            ->merge($keluargaAnaks)
            ->merge($keluargaOrtus)
            ->merge($keluargaPasangans)
            ->merge($kinerjas)
            ->merge($masaKerjas)
            ->merge($pendidikans)
            ->merge($penghargaans)
            ->merge($pns)
            ->merge($skps);

        return view('components.sidebar-admin', compact('notifications'));
    }

    public function formatModelName($modelName)
    {
        return preg_replace('/(?<!\ )[A-Z]/', ' $0', $modelName);
    }
}
