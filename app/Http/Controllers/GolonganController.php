<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\GolonganFile;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $golonganData = Golongan::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-golongan.riwayat-golongan', compact('golonganData'));
    }

    public function show($id)
    {
        $golongan = Golongan::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-golongan.lihat-golongan', compact('golongan'));
    }

    public function pengajuanGolongan()
    {
        $golonganData = Golongan::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-golongan.pengajuan-golongan', compact('golonganData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'golongan' => 'required',
            'jenis_kp' => 'required',
            'masa_kerja_tahun' => 'required',
            'masa_kerja_bulan' => 'required',
            'tmt' => 'required',
            'no_sk' => 'required',
            'tgl_sk' => 'required',
            'no_bkn' => 'nullable',
            'tgl_bkn' => 'nullable',
            'file_golongan.*' => 'nullable'
        ]);

        $golongan = Golongan::create([
            'user_id' => auth()->id(),
            'golongan' => $validatedData['golongan'],
            'jenis_kp' => $validatedData['jenis_kp'],
            'masa_kerja_tahun' => $validatedData['masa_kerja_tahun'],
            'masa_kerja_bulan' => $validatedData['masa_kerja_bulan'],
            'tmt' => $validatedData['tmt'],
            'no_sk' => $validatedData['no_sk'],
            'tgl_sk' => $validatedData['tgl_sk'],
            'no_bkn' => $validatedData['no_bkn'],
            'tgl_bkn' => $validatedData['tgl_bkn'],
        ]);

        if ($request->hasFile('file_golongan')) {
            foreach ($request->file('file_golongan') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/golongan_files', 'public');
                GolonganFile::create([
                    'golongan_id' => $golongan->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_golongan']);
        }

        return redirect()->route('golongan.history');
    }
}
