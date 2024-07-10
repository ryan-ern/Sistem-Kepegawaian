<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');

    $query = Cuti::join('users', 'cutis.user_id', '=', 'users.id')
                 ->select('cutis.*', 'users.name');

    if (!empty($search)) {
        $query->where('users.name', 'LIKE', '%' . $search . '%');
    }
    $cuti = $query->get();

    return view('pages.admin.cuti.cuti', compact('cuti', 'search'));
}


    public function riwayatCuti()
    {
        $userId = auth()->id();

        $cuti = Cuti::where('user_id', $userId)->get();

        $user = User::findOrFail($userId);
        $totalKuota = $user->kuota_cuti;
        $sisaCuti = $totalKuota;

        $tahunTerakhirPerbarui = $user->tahun_terakhir_perbarui;

        $tahunSekarang = Carbon::now()->year;

        if (is_null($tahunTerakhirPerbarui)) {
            $user->tahun_terakhir_perbarui = $tahunSekarang;
            $user->save();
        } else if ($tahunTerakhirPerbarui != $tahunSekarang) {
            $tahunDiff = $tahunSekarang - $tahunTerakhirPerbarui;
            $user->kuota_cuti += $tahunDiff * 12;
            $user->tahun_terakhir_perbarui = $tahunSekarang;
            $user->save();
        }

        foreach ($cuti as $a) {
            $totalKuota = $user->kuota_cuti;
            $sisaCuti = $totalKuota;
        }

        return view('pages.user.dashboard.riwayat-cuti.riwayat-cuti', compact('cuti', 'sisaCuti'));
    }

    public function create()
    {
        return view('pages.user.cuti.cuti');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_cuti' => 'required',
            'golongan' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'keterangan' => 'required',
        ]);

        Cuti::create([
            'user_id' => auth()->id(),
            'jenis_cuti' => $request->jenis_cuti,
            'golongan' => $request->golongan,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('cuti.riwayat')->with('success', 'Data cuti berhasil disimpan.');
    }


    public function edit($id)
    {
        $cuti = Cuti::findOrFail($id);
        return view('pages.admin.cuti.form-cuti', compact('cuti'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'golongan' => 'required',
            'jenis_cuti' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
            'file.*' => 'nullable',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $path = $file->store('uploads/cuti_files', 'public');

            $cuti = Cuti::findOrFail($id);
            $cuti->start_date = $request->start_date;
            $cuti->end_date = $request->end_date;
            $cuti->golongan = $request->golongan;
            $cuti->jenis_cuti = $request->jenis_cuti;
            $cuti->keterangan = $request->keterangan;
            $cuti->file_path = $path;
            $cuti->file_name = $originalName;
            $cuti->status = $request->status;
        } else {
            unset($request['file']);
            $cuti = Cuti::findOrFail($id);
            $cuti->start_date = $request->start_date;
            $cuti->end_date = $request->end_date;
            $cuti->golongan = $request->golongan;
            $cuti->jenis_cuti = $request->jenis_cuti;
            $cuti->keterangan = $request->keterangan;
            $cuti->file_path = null;
            $cuti->file_name = null;
            $cuti->status = $request->status;
        }

        if ($request->status === 'disetujui') {
            $startDate = Carbon::parse($request->start_date);
            $endDate = Carbon::parse($request->end_date);

            $daysRequested = $endDate->diffInDays($startDate);

            $user = User::findOrFail($request->user_id);

            $remainingQuota = $user->kuota_cuti;

            if ($daysRequested <= $remainingQuota) {
                $user->kuota_cuti -= $daysRequested;
                $user->save();
            } else {
                return redirect()->route('cuti.home')->with('error', 'kuota cuti tidak mencukupi');
            }
        }
        $cuti->save();

        return redirect()->route('cuti.home')->with('success', 'Data cuti berhasil diperbarui.');
    }
}