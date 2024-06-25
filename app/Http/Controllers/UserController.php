<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\Diklat;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\KeluargaAnak;
use App\Models\KeluargaOrtu;
use App\Models\KeluargaPasangan;
use App\Models\Kinerja;
use App\Models\MasaKerja;
use App\Models\Pendidikan;
use App\Models\Penghargaan;
use App\Models\Pns;
use App\Models\Skp;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('pages.admin.pegawai.pegawai', compact('users'));
    }

    public function show($id)
    {
        $user = User::with('files')->findOrFail($id);
        return view('pages.admin.pegawai.lihat.lihat-pegawai', compact('user'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable',
            'no_tel' => 'required',
            'password' => 'required',
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('uploads/photos', 'public');
        } else {
            $validatedData['foto'] = 'uploads/photos/default.png';
        }

        User::create([
            'name' => $validatedData['name'],
            'nip' => $validatedData['nip'],
            'jabatan' => $validatedData['jabatan'],
            'foto' => $validatedData['foto'],
            'no_tel' => $validatedData['no_tel'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.pegawai.edit.edit-pegawai', compact('user'));
    }

    public function dataDiri($id)
    {
        $user = DataDiri::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.pendidikan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.diri.data-diri-pegawai', compact('user'));
    }

    public function dataDiriDelete($id)
    {
        $user = DataDiri::with('files')->find($id);
        dd($user);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function pendidikan($id)
    {
        $user = Pendidikan::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.ortu', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.pendidikan.data-pendidikan-pegawai', compact('user'));
    }

    public function pendidikanDelete($id)
    {
        $user = Pendidikan::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function ortu($id)
    {
        $user = KeluargaOrtu::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.pasangan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.keluarga.data-orangtua-pegawai', compact('user'));
    }

    public function ortuDelete($id)
    {
        $user = KeluargaOrtu::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function pasangan($id)
    {
        $user = KeluargaPasangan::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.anak', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.keluarga.data-pasangan-pegawai', compact('user'));
    }

    public function pasanganDelete($id)
    {
        $user = KeluargaPasangan::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function anak($id)
    {
        $user = KeluargaAnak::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.skp', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.keluarga.data-anak-pegawai', compact('user'));
    }

    public function anakDelete($id)
    {
        $user = KeluargaAnak::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function skp($id)
    {
        $user = Skp::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.penghargaan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.skp.data-skp-pegawai', compact('user'));
    }

    public function skpDelete($id)
    {
        $user = Skp::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function penghargaan($id)
    {
        $user = Penghargaan::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.kinerja', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.penghargaan.data-penghargaan-pegawai', compact('user'));
    }

    public function penghargaanDelete($id)
    {
        $user = Penghargaan::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function kinerja($id)
    {
        $user = Kinerja::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.pns', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.kinerja.data-kinerja-pegawai', compact('user'));
    }

    public function kinerjaDelete($id)
    {
        $user = Kinerja::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function pns($id)
    {
        $user = Pns::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.diklat', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.cpns.data-cpns-pegawai', compact('user'));
    }

    public function pnsDelete($id)
    {
        $user = Pns::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function diklat($id)
    {
        $user = Diklat::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.pmk', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.diklat.data-diklat-pegawai', compact('user'));
    }

    public function diklatDelete($id)
    {
        $user = Diklat::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function pmk($id)
    {
        $user = MasaKerja::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.golongan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.pmk.data-pmk-pegawai', compact('user'));
    }

    public function pmkDelete($id)
    {
        $user = MasaKerja::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function golongan($id)
    {
        $user = Golongan::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.jabatan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.golongan.data-golongan-pegawai', compact('user'));
    }

    public function golonganDelete($id)
    {
        $user = Golongan::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function jabatan($id)
    {
        $user = Jabatan::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.edit', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.jabatan.data-jabatan-pegawai', compact('user'));
    }

    public function jabatanDelete($id)
    {
        $user = Jabatan::with('files')->find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'File tidak ditemukan!');
        }

        $user->delete();

        return redirect()->back()->with('success', 'File berhasil dihapus!');
    }

    public function update(Request $request, $id)
    {
        // Menemukan pengguna terlebih dahulu
        $user = User::findOrFail($id);

        // Validasi input dari request
        $validatedData = $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'no_tel' => 'required',
            'email' => 'required',
            'status' => 'required',
            'nik' => 'nullable',
            'alamat' => 'nullable',
            'tgl_npwp' => 'nullable',
            'agama' => 'nullable',
            'satuan_kerja' => 'nullable',
            'kelas_jabatan' => 'nullable',
            'tgl_lahir' => 'nullable',
            'tempat_lahir' => 'nullable',
            'no_npwp' => 'nullable',
            'lokasi_kerja' => 'nullable',
            'no_bpjs' => 'nullable',
            'no_akta' => 'nullable',
            'no_karis' => 'nullable',
            'no_taspen' => 'nullable',
            'tgl_taspen' => 'nullable',
            'no_tapera' => 'nullable',
            'kppn' => 'nullable',
            'foto' => 'nullable'
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('uploads/photos', 'public');
        }

        // Update data user
        $user->update($validatedData);

        return redirect()->route('user.dataDiri', $id);
    }
}
