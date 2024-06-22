<?php

namespace App\Http\Controllers;

use App\Models\Kinerja;
use App\Models\KinerjaFile;
use Illuminate\Http\Request;

class KinerjaController extends Controller
{
    public function index()
    {
        $kinerjaData = Kinerja::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-laporan.riwayat-laporan', compact('kinerjaData'));
    }

    public function show($id)
    {
        $kinerja = Kinerja::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-laporan.lihat-laporan', compact('kinerja'));
    }

    public function pengajuanKinerja()
    {
        $kinerjaData = Kinerja::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-laporan.pengajuan-laporan', compact('kinerjaData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'unit_kerja' => 'required',
            'tgl' => 'required',
            'jabatan' => 'required',
            'hasil' => 'required',
            'instansi' => 'required',
            'perilaku' => 'required',
            'kuadran' => 'required',
            'penilai_jabatan' => 'required',
            'penilai' => 'required',
            'file_kinerja.*' => 'nullable'
        ]);

        $kinerja = Kinerja::create([
            'user_id' => auth()->id(),
            'tahun' => $validatedData['tahun'],
            'nip' => $validatedData['nip'],
            'nama' => $validatedData['nama'],
            'unit_kerja' => $validatedData['unit_kerja'],
            'tgl' => $validatedData['tgl'],
            'jabatan' => $validatedData['jabatan'],
            'hasil' => $validatedData['hasil'],
            'instansi' => $validatedData['instansi'],
            'perilaku' => $validatedData['perilaku'],
            'kuadran' => $validatedData['kuadran'],
            'penilai_jabatan' => $validatedData['penilai_jabatan'],
            'penilai' => $validatedData['penilai'],
        ]);

        if ($request->hasFile('file_kinerja')) {
            foreach ($request->file('file_kinerja') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/kinerja_files', 'public');
                KinerjaFile::create([
                    'kinerja_id' => $kinerja->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_kinerja']);
        }

        return redirect()->route('kinerja.history');
    }
}
