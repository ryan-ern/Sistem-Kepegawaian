<?php

namespace App\Http\Controllers;

use App\Models\MasaKerja;
use App\Models\MasaKerjaFile;
use Illuminate\Http\Request;

class MasaKerjaController extends Controller
{
    public function index()
    {
        $pmkData = MasaKerja::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-pmk.riwayat-pmk', compact('pmkData'));
    }

    public function show($id)
    {
        $pmk = MasaKerja::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-pmk.lihat-pmk', compact('pmk'));
    }

    public function pengajuanPmk()
    {
        $pmkData = MasaKerja::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-pmk.pengajuan-pmk', compact('pmkData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'masa_kerja' => 'required',
            'instansi' => 'required',
            'tgl_awal' => 'required',
            'tgl_akhir' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'no_bkn' => 'required',
            'tgl_bkn' => 'required',
            'masa_kerja_tahun' => 'required',
            'masa_kerja_bulan' => 'required',
            'file_pmk.*' => 'nullable'
        ]);

        $pmk = MasaKerja::create([
            'user_id' => auth()->id(),
            'masa_kerja' => $validatedData['masa_kerja'],
            'instansi' => $validatedData['instansi'],
            'tgl_awal' => $validatedData['tgl_awal'],
            'tgl_akhir' => $validatedData['tgl_akhir'],
            'no_sk' => $validatedData['no_sk'],
            'tgl_sk' => $validatedData['tgl_sk'],
            'no_bkn' => $validatedData['no_bkn'],
            'tgl_bkn' => $validatedData['tgl_bkn'],
            'masa_kerja_tahun' => $validatedData['masa_kerja_tahun'],
            'masa_kerja_bulan' => $validatedData['masa_kerja_bulan'],
        ]);

        if ($request->hasFile('file_pmk')) {
            foreach ($request->file('file_pmk') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/pmk_files', 'public');
                MasaKerjaFile::create([
                    'masa_kerja_id' => $pmk->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_pmk']);
        }

        return redirect()->route('pmk.history');
    }
}