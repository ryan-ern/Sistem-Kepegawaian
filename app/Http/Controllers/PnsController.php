<?php

namespace App\Http\Controllers;

use App\Models\Pns;
use App\Models\PnsFile;
use Illuminate\Http\Request;

class PnsController extends Controller
{
    public function index()
    {
        $pnsData = Pns::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-cpns.riwayat-cpns', compact('pnsData'));
    }

    public function show($id)
    {
        $pns = Pns::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-cpns.lihat-cpns', compact('pns'));
    }

    public function pengajuanCpns()
    {
        $pnsData = Pns::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-cpns.pengajuan-cpns', compact('pnsData'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'status_pns' => 'required',
            'no_sk_cpns' => 'required',
            'no_sk_pns' => 'required',
            'no_sk_sttpl' => 'required',
            'karpeg' => 'required',
            'tgl_sttpl' => 'required',
            'no_surat_dokter' => 'required',
            'no_spmt' => 'required',
            'no_c2th' => 'required',
            'tgl_sk_cpns' => 'required',
            'tgl_sk_pns' => 'required',
            'tgl_tmt_cpns' => 'required',
            'tgl_tmt_pns' => 'required',
            'tgl_tmt_dokter' => 'required',
            'tgl_spmt' => 'required',
            'tgl_c2th' => 'required',
            'file_pns.*' => 'nullable'
        ]);

        $pns = Pns::create([
            'user_id' => auth()->id(),
            'status_pns' => $validatedData['status_pns'],
            'no_sk_cpns' => $validatedData['no_sk_cpns'],
            'no_sk_pns' => $validatedData['no_sk_pns'],
            'no_sk_sttpl' => $validatedData['no_sk_sttpl'],
            'tgl_sttpl' => $validatedData['tgl_sttpl'],
            'no_surat_dokter' => $validatedData['no_surat_dokter'],
            'no_spmt' => $validatedData['no_spmt'],
            'karpeg' => $validatedData['karpeg'],
            'no_c2th' => $validatedData['no_c2th'],
            'tgl_sk_cpns' => $validatedData['tgl_sk_cpns'],
            'tgl_sk_pns' => $validatedData['tgl_sk_pns'],
            'tgl_tmt_cpns' => $validatedData['tgl_tmt_cpns'],
            'tgl_tmt_pns' => $validatedData['tgl_tmt_pns'],
            'tgl_tmt_dokter' => $validatedData['tgl_tmt_dokter'],
            'tgl_spmt' => $validatedData['tgl_spmt'],
            'tgl_c2th' => $validatedData['tgl_c2th'],
        ]);

        if ($request->hasFile('file_pns')) {
            foreach ($request->file('file_pns') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/pns_files', 'public');
                PnsFile::create([
                    'pns_id' => $pns->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_pns']);
        }

        return redirect()->route('pns.history');
    }
}
