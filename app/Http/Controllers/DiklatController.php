<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use App\Models\DiklatFile;
use Illuminate\Http\Request;

class DiklatController extends Controller
{
    public function index()
    {
        $diklatData = Diklat::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-diklat.riwayat-diklat', compact('diklatData'));
    }

    public function show($id)
    {
        $diklat = Diklat::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-diklat.lihat-diklat', compact('diklat'));
    }

    public function pengajuanDiklat()
    {
        $diklatData = Diklat::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-diklat.pengajuan-diklat', compact('diklatData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_diklat' => 'required',
            'nama_diklat' => 'required',
            'institusi' => 'required',
            'tgl_selesai' => 'required',
            'durasi' => 'required',
            'rumpun' => 'required',
            'tgl_mulai' => 'required',
            'no_sertif' => 'nullable',
            'tahun' => 'nullable',
            'file_diklat.*' => 'nullable'
        ]);

        $diklat = Diklat::create([
            'user_id' => auth()->id(),
            'jenis_diklat' => $validatedData['jenis_diklat'],
            'nama_diklat' => $validatedData['nama_diklat'],
            'institusi' => $validatedData['institusi'],
            'tgl_selesai' => $validatedData['tgl_selesai'],
            'tgl_selesai' => $validatedData['tgl_selesai'],
            'durasi' => $validatedData['durasi'],
            'rumpun' => $validatedData['rumpun'],
            'tgl_mulai' => $validatedData['tgl_mulai'],
            'no_sertif' => $validatedData['no_sertif'],
            'tahun' => $validatedData['tahun'],
        ]);

        if ($request->hasFile('file_diklat')) {
            foreach ($request->file('file_diklat') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/diklat_files', 'public');
                DiklatFile::create([
                    'diklat_id' => $diklat->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_diklat']);
        }

        return redirect()->route('diklat.history');
    }
}