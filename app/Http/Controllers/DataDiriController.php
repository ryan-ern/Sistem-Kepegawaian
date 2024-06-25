<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\DataDiriFile;
use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function index()
    {
        $dataDiri = DataDiri::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-diri.riwayat-diri', compact('dataDiri'));
    }

    public function show($id)
    {
        $dataDiri = DataDiri::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-diri.lihat-diri', compact('dataDiri'));
    }

    public function pengajuanDiri()
    {
        $dataDiri = DataDiri::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-diri.pengajuan-diri', compact('dataDiri'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'file_data_diri.*' => 'nullable'
        ]);

        $dataDiri = DataDiri::create([
            'user_id' => auth()->id(),
            'nama' => $validatedData['nama'],
        ]);

        if ($request->hasFile('file_data_diri')) {
            foreach ($request->file('file_data_diri') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/data_diri_files', 'public');
                DataDiriFile::create([
                    'data_diri_id' => $dataDiri->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_data_diri']);
        }

        return redirect()->route('diri.history');
    }
}
