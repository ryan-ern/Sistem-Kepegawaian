<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $absen = Absen::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.absensi.absensi', compact('absen'));
    }

    public function upload()
    {
        return view('pages.user.absensi.upload-absensi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'file.*' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $path = $file->store('uploads/absensi_files', 'public');
            $currentDateTime = Carbon::now();

            Absen::create([
                'user_id' => auth()->id(),
                'tgl' => $currentDateTime->toDateString(),
                'jam' => $currentDateTime->toTimeString(),
                'status' => $request->status,
                'file_path' => $path,
                'file_name' => $originalName,
            ]);

            return redirect()->route('absen.index')->with('success', 'Absen Berhasil');
        } else {
            return redirect()->back()->with('error', 'File Tidak Boleh Kosong');
        }
    }


    public function show()
    {
        $absen = Absen::select('user_id')->groupBy('user_id')->get();

        return view('pages.admin.absensi.absensi', compact('absen'));
    }

    public function showDetail($id, $filter = 'today')
    {
        if ($filter == 'today') {
            $today = Carbon::today();
            $absen = Absen::where('user_id', $id)
                ->where('tgl', $today)
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            $absen = Absen::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        }

        return view('pages.admin.absensi.detail-absensi', compact('absen', 'filter'));
    }
}
