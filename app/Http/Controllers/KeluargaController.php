<?php

namespace App\Http\Controllers;

use App\Models\KeluargaAnak;
use App\Models\KeluargaAnakFile;
use App\Models\KeluargaOrtu;
use App\Models\KeluargaOrtuFile;
use App\Models\KeluargaPasangan;
use App\Models\KeluargaPasanganFile;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function ortu()
    {
        $OrtuData = KeluargaOrtu::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-keluarga.orangtua.riwayat-orangtua', compact('OrtuData'));
    }

    public function showOrtu($id)
    {
        $ortu = KeluargaOrtu::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-keluarga.orangtua.lihat-orangtua', compact('ortu'));
    }

    public function pengajuanOrtu()
    {
        $OrtuData = KeluargaOrtu::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-keluarga.orangtua.pengajuan-orangtua', compact('OrtuData'));
    }

    public function storeOrtu(Request $request)
    {
        $validatedData = $request->validate([
            'status_keluarga' => 'required',
            'status_pekerjaan' => 'required',
            'nama' => 'required',
            'status_pernikahan' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'no_identitas' => 'required',
            'email' => 'required',
            'tgl_meninggal' => 'nullable',
            'no_tel' => 'required',
            'no_hp' => 'required',
            'agama' => 'required',
            'file_ortu.*' => 'nullable'
        ]);

        $keluarga = KeluargaOrtu::create([
            'user_id' => auth()->id(),
            'status_keluarga' => $validatedData['status_keluarga'],
            'status_pekerjaan' => $validatedData['status_pekerjaan'],
            'nama' => $validatedData['nama'],
            'status_pernikahan' => $validatedData['status_pernikahan'],
            'tgl_lahir' => $validatedData['tgl_lahir'],
            'jk' => $validatedData['jk'],
            'no_identitas' => $validatedData['no_identitas'],
            'email' => $validatedData['email'],
            'tgl_meninggal' => $validatedData['tgl_meninggal'],
            'no_tel' => $validatedData['no_tel'],
            'no_hp' => $validatedData['no_hp'],
            'agama' => $validatedData['agama'],
        ]);

        if ($request->hasFile('file_ortu')) {
            foreach ($request->file('file_ortu') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/keluarga_files', 'public');
                KeluargaOrtuFile::create([
                    'keluarga_ortu_id' => $keluarga->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_ortu']);
        }

        return redirect()->route('orangtua.history');
    }
    public function pasangan()
    {
        $PasanganData = KeluargaPasangan::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-keluarga.pasangan.riwayat-pasangan', compact('PasanganData'));
    }

    public function showPasangan($id)
    {
        $pasangan = KeluargaPasangan::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-keluarga.pasangan.lihat-pasangan', compact('pasangan'));
    }

    public function pengajuanPasangan()
    {
        $PasanganData = KeluargaPasangan::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-keluarga.pasangan.pengajuan-pasangan', compact('PasanganData'));
    }

    public function storePasangan(Request $request)
    {
        $validatedData = $request->validate([
            'no_pasangan' => 'required',
            'status_pekerjaan' => 'required',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'no_identitas' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status_keluarga' => 'required',
            'status_pernikahan' => 'required',
            'no_akta' => 'required',
            'akta_nikah' => 'required',
            'tgl_nikah' => 'required',
            'email' => 'required',
            'no_cerai' => 'nullable',
            'akta_cerai' => 'nullable',
            'tgl_cerai' => 'nullable',
            'no_karis' => 'nullable',
            'no_tel' => 'required',
            'no_hp' => 'required',
            'file_pasangan.*' => 'nullable'
        ]);

        $keluarga = KeluargaPasangan::create([
            'user_id' => auth()->id(),
            'no_pasangan' => $validatedData['no_pasangan'],
            'status_pekerjaan' => $validatedData['status_pekerjaan'],
            'nama' => $validatedData['nama'],
            'tgl_lahir' => $validatedData['tgl_lahir'],
            'no_identitas' => $validatedData['no_identitas'],
            'jk' => $validatedData['jk'],
            'alamat' => $validatedData['alamat'],
            'agama' => $validatedData['agama'],
            'status_keluarga' => $validatedData['status_keluarga'],
            'status_pernikahan' => $validatedData['status_pernikahan'],
            'no_akta' => $validatedData['no_akta'],
            'akta_nikah' => $validatedData['akta_nikah'],
            'tgl_nikah' => $validatedData['tgl_nikah'],
            'email' => $validatedData['email'],
            'no_cerai' => $validatedData['no_cerai'],
            'akta_cerai' => $validatedData['akta_cerai'],
            'tgl_cerai' => $validatedData['tgl_cerai'],
            'no_karis' => $validatedData['no_karis'],
            'no_tel' => $validatedData['no_tel'],
            'no_hp' => $validatedData['no_hp'],
        ]);

        if ($request->hasFile('file_pasangan')) {
            foreach ($request->file('file_pasangan') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/keluarga_files', 'public');
                KeluargaPasanganFile::create([
                    'keluarga_pasangan_id' => $keluarga->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_pasangan']);
        }

        return redirect()->route('pasangan.history');
    }

    public function anak()
    {
        $AnakData = KeluargaAnak::where('user_id', auth()->id())->where('status', 'diterima')->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-keluarga.anak.riwayat-anak', compact('AnakData'));
    }

    public function showAnak($id)
    {
        $anak = KeluargaAnak::with('files')->findOrFail($id);
        return view('pages.user.dashboard.riwayat-keluarga.anak.lihat-anak', compact('anak'));
    }

    public function pengajuanAnak()
    {
        $AnakData = KeluargaAnak::where('user_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pages.user.dashboard.riwayat-keluarga.anak.pengajuan-anak', compact('AnakData'));
    }

    public function storeAnak(Request $request)
    {
        $validatedData = $request->validate([
            'no_anak' => 'required',
            'status_pekerjaan' => 'required',
            'nama' => 'required',
            'status_keluarga' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'no_identitas' => 'required',
            'email' => 'required',
            'status_nikah' => 'required',
            'tgl_meninggal' => 'nullable',
            'no_meninggal' => 'nullable',
            'no_lahir' => 'required',
            'no_tel' => 'required',
            'file_anak.*' => 'nullable'
        ]);


        $keluarga = KeluargaAnak::create([
            'user_id' => auth()->id(),
            'no_anak' => $validatedData['no_anak'],
            'status_pekerjaan' => $validatedData['status_pekerjaan'],
            'nama' => $validatedData['nama'],
            'status_keluarga' => $validatedData['status_keluarga'],
            'agama' => $validatedData['agama'],
            'tgl_lahir' => $validatedData['tgl_lahir'],
            'jk' => $validatedData['jk'],
            'no_identitas' => $validatedData['no_identitas'],
            'email' => $validatedData['email'],
            'status_nikah' => $validatedData['status_nikah'],
            'tgl_meninggal' => $validatedData['tgl_meninggal'],
            'no_meninggal' => $validatedData['no_meninggal'],
            'no_lahir' => $validatedData['no_lahir'],
            'no_tel' => $validatedData['no_tel'],
        ]);

        if ($request->hasFile('file_anak')) {
            foreach ($request->file('file_anak') as $file) {
                $originalName = $file->getClientOriginalName();
                $path = $file->store('uploads/keluarga_files', 'public');
                KeluargaAnakFile::create([
                    'keluarga_anak_id' => $keluarga->id,
                    'file_path' => $path,
                    'file_name' => $originalName,
                ]);
            }
        } else {
            unset($validatedData['file_anak']);
        }

        return redirect()->route('anak.history');
    }
}
