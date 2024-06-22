<?php

namespace App\Http\Controllers;

use App\Models\Penghargaan;
use App\Models\PenghargaanFile;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
{
    public function index()
    {
        $rewardData = Penghargaan::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-penghargaan.riwayat-penghargaan', compact('rewardData'));
    }

    public function show($id)
    {
        $reward = Penghargaan::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-penghargaan.lihat-penghargaan', compact('reward'));
    }

    public function pengajuanReward()
    {
        $rewardData = Penghargaan::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-penghargaan.pengajuan-penghargaan', compact('rewardData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required',
            'tahun' => 'required',
            'no_surat' => 'required',
            'tgl_surat' => 'required',
            'file_reward.*' => 'nullable'
        ]);

        $reward = Penghargaan::create([
            'user_id' => auth()->id(),
            'jenis' => $validatedData['jenis'],
            'tahun' => $validatedData['tahun'],
            'no_surat' => $validatedData['no_surat'],
            'tgl_surat' => $validatedData['tgl_surat'],
        ]);

        if ($request->hasFile('file_reward')) {
            foreach ($request->file('file_reward') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/reward_files', 'public');
                PenghargaanFile::create([
                    'penghargaan_id' => $reward->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_reward']);
        }

        return redirect()->route('reward.history');
    }
}