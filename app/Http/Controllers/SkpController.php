<?php

namespace App\Http\Controllers;

use App\Models\Skp;
use App\Models\SkpFile;
use Illuminate\Http\Request;

class SkpController extends Controller
{
    public function index()
    {
        $SkpData = Skp::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-skp.riwayat-skp', compact('SkpData'));
    }

    public function show($id)
    {
        $skp = Skp::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-skp.lihat-skp', compact('skp'));
    }

    public function pengajuanSkp()
    {
        $skpData = Skp::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-skp.pengajuan-skp', compact('skpData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required',
            'nilai' => 'required',
            'ot' => 'required',
            'integritas' => 'required',
            'komitmen' => 'required',
            'disiplin' => 'required',
            'kerja_sama' => 'required',
            'status_penilai' => 'required',
            'status_atasan' => 'required',
            'kepemimpinan' => 'required',
            'jumlah' => 'required',
            'perilaku' => 'required',
            'prestasi' => 'required',
            'atasan_nonpns' => 'required',
            'atasan_jabatan' => 'required',
            'penilai_jabatan' => 'required',
            'golongan_penilai_tmt' => 'required',
            'golongan_atasan_tmt' => 'required',
            'golongan_penilai' => 'required',
            'golongan_atasan' => 'required',
            'nama_penilai' => 'required',
            'nama_atasan' => 'required',
            'nip_penilai' => 'required',
            'nip_atasan' => 'required',
            'jenis_jabatan' => 'required',
            'file_skp.*' => 'nullable'
        ]);

        $skp = Skp::create([
            'user_id' => auth()->id(),
            'tahun' => $validatedData['tahun'],
            'nilai' => $validatedData['nilai'],
            'ot' => $validatedData['ot'],
            'integritas' => $validatedData['integritas'],
            'komitmen' => $validatedData['komitmen'],
            'disiplin' => $validatedData['disiplin'],
            'kerja_sama' => $validatedData['kerja_sama'],
            'status_penilai' => $validatedData['status_penilai'],
            'status_atasan' => $validatedData['status_atasan'],
            'kepemimpinan' => $validatedData['kepemimpinan'],
            'jumlah' => $validatedData['jumlah'],
            'perilaku' => $validatedData['perilaku'],
            'prestasi' => $validatedData['prestasi'],
            'atasan_nonpns' => $validatedData['atasan_nonpns'],
            'atasan_jabatan' => $validatedData['atasan_jabatan'],
            'penilai_jabatan' => $validatedData['penilai_jabatan'],
            'golongan_penilai_tmt' => $validatedData['golongan_penilai_tmt'],
            'golongan_atasan_tmt' => $validatedData['golongan_atasan_tmt'],
            'golongan_penilai' => $validatedData['golongan_penilai'],
            'golongan_atasan' => $validatedData['golongan_atasan'],
            'nama_penilai' => $validatedData['nama_penilai'],
            'nama_atasan' => $validatedData['nama_atasan'],
            'nip_penilai' => $validatedData['nip_penilai'],
            'nip_atasan' => $validatedData['nip_atasan'],
            'jenis_jabatan' => $validatedData['jenis_jabatan'],
        ]);

        if ($request->hasFile('file_skp')) {
            foreach ($request->file('file_skp') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/skp_files', 'public');
                SkpFile::create([
                    'skp_id' => $skp->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_skp']);
        }

        return redirect()->route('skp.history');
    }
}