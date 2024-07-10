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


    public function show(Request $request)
    {
        $search = $request->input('search');

        $query = Absen::join('users', 'absens.user_id', '=', 'users.id')
                      ->select('absens.user_id', 'users.name')
                      ->groupBy('absens.user_id', 'users.name');
    
        if (!empty($search)) {
            $query->where('users.name', 'LIKE', '%' . $search . '%');
        }
        $absen = $query->get();

        return view('pages.admin.absensi.absensi', compact('absen','search'));
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
