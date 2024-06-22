<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\JabatanFile;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatanData = Jabatan::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-jabatan.riwayat-jabatan', compact('jabatanData'));
    }

    public function show($id)
    {
        $jabatan = Jabatan::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-jabatan.lihat-jabatan', compact('jabatan'));
    }

    public function pengajuanJabatan()
    {
        $jabatanData = Jabatan::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-jabatan.pengajuan-jabatan', compact('jabatanData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_jabatan' => 'required',
            'mutasi' => 'required',
            'penugasan' => 'required',
            'tgl_sk' => 'required',
            'tgl_tmt' => 'required',
            'tgl_tmt_pelantikan' => 'required',
            'status_riwayat' => 'required',
            'instansi' => 'required',
            'sk' => 'required',
            'sk_induk' => 'required',
            'unit_organisasi' => 'required',
            'nama_jabatan' => 'required',
            'no_sk' => 'required',
            'file_jabatan.*' => 'nullable'
        ]);

        $jabatan = Jabatan::create([
            'user_id' => auth()->id(),
            'jenis_jabatan' => $validatedData['jenis_jabatan'],
            'mutasi' => $validatedData['mutasi'],
            'penugasan' => $validatedData['penugasan'],
            'tgl_sk' => $validatedData['tgl_sk'],
            'tgl_tmt' => $validatedData['tgl_tmt'],
            'tgl_tmt_pelantikan' => $validatedData['tgl_tmt_pelantikan'],
            'status_riwayat' => $validatedData['status_riwayat'],
            'instansi' => $validatedData['instansi'],
            'sk' => $validatedData['sk'],
            'sk_induk' => $validatedData['sk_induk'],
            'unit_organisasi' => $validatedData['unit_organisasi'],
            'nama_jabatan' => $validatedData['nama_jabatan'],
            'no_sk' => $validatedData['no_sk'],
        ]);

        if ($request->hasFile('file_jabatan')) {
            foreach ($request->file('file_jabatan') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/jabatan_files', 'public');
                JabatanFile::create([
                    'jabatan_id' => $jabatan->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_jabatan']);
        }

        return redirect()->route('jabatan.history');
    }
}