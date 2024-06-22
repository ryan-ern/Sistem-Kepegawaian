<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use App\Models\PendidikanFile;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikanData = Pendidikan::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-pendidikan.riwayat-pendidikan', compact('pendidikanData'));
    }

    public function show($id)
    {
        $pendidikan = Pendidikan::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-pendidikan.lihat-pendidikan', compact('pendidikan'));
    }

    public function pengajuanPendidikan()
    {
        $pendidikanData = Pendidikan::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-pendidikan.pengajuan-pendidikan', compact('pendidikanData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pendidikan' => 'required',
            'tingkat_pendidikan' => 'required',
            'tahun_lulus' => 'required',
            'tgl_lulus' => 'required',
            'no_ijasah' => 'required',
            'nama_univ' => 'required',
            'gelar_depan' => 'nullable',
            'gelar_belakang' => 'nullable',
            'file_pendidikan.*' => 'nullable'
        ]);

        $pendidikan = Pendidikan::create([
            'user_id' => auth()->id(),
            'pendidikan' => $validatedData['pendidikan'],
            'tingkat_pendidikan' => $validatedData['tingkat_pendidikan'],
            'tahun_lulus' => $validatedData['tahun_lulus'],
            'tgl_lulus' => $validatedData['tgl_lulus'],
            'no_ijasah' => $validatedData['no_ijasah'],
            'nama_univ' => $validatedData['nama_univ'],
            'gelar_depan' => $validatedData['gelar_depan'],
            'gelar_belakang' => $validatedData['gelar_belakang'],
        ]);

        if ($request->hasFile('file_pendidikan')) {
            foreach ($request->file('file_pendidikan') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/pendidikan_files', 'public');
                PendidikanFile::create([
                    'pendidikan_id' => $pendidikan->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_pendidikan']);
        }

        return redirect()->route('pendidikan.history');
    }
}
