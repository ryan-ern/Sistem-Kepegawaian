<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index(Request $request)
    {
        $query = Absen::with('user')->where('user_id', auth()->id())->orderBy('created_at', 'desc');
        $date = $request->input('date');
        
        if(!empty($date)){
            $query->whereDate('tgl', $date);
        }
        $absen = $query->get();
          
        return view('pages.user.absensi.absensi', compact('absen','date'));
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
        $date = $request->input('date');

        $query = Absen::join('users', 'absens.user_id', '=', 'users.id')
                      ->select('absens.user_id', 'users.name')
                      ->groupBy('absens.user_id', 'users.name');
    
        if (!empty($search)) {
            $query->where('users.name', 'LIKE', '%' . $search . '%');
        }

        if(!empty($date)){
            $query->whereDate('absens.tgl', '=' ,$date);
        }

        $absen = $query->get();

        return view('pages.admin.absensi.absensi', compact('absen','search'));
    }

    public function showDetail(Request $request, $id)
    {
        $search = $request->input('search');
        $date = $request->input('date');

        $query = Absen::join('users','absens.user_id','=','users.id')->select('absens.user_id','users.name','absens.tgl','absens.jam','absens.status')->where('absens.user_id',$id)->orderBy('absens.created_at','desc');

        if(!empty($search)){
            $query->where('users.name','LIKE','%'.$search.'%');
        }

        if(!empty($date)){
            $query->whereDate('absens.tgl', '=' ,$date);
        }

        $absen = $query->get();
        // dd($absen);
        return view('pages.admin.absensi.detail-absensi', compact('absen'));
    }
}