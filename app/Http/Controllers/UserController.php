<?php

namespace App\Http\Controllers;

use App\Models\DataDiri;
use App\Models\Diklat;
use App\Models\DiklatFile;
use App\Models\Golongan;
use App\Models\GolonganFile;
use App\Models\Jabatan;
use App\Models\JabatanFile;
use App\Models\KeluargaAnak;
use App\Models\KeluargaAnakFile;
use App\Models\KeluargaOrtu;
use App\Models\KeluargaOrtuFile;
use App\Models\KeluargaPasangan;
use App\Models\KeluargaPasanganFile;
use App\Models\Kinerja;
use App\Models\KinerjaFile;
use App\Models\MasaKerja;
use App\Models\MasaKerjaFile;
use App\Models\Pendidikan;
use App\Models\PendidikanFile;
use App\Models\Penghargaan;
use App\Models\PenghargaanFile;
use App\Models\Pns;
use App\Models\PnsFile;
use App\Models\Skp;
use App\Models\SkpFile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        if(!empty($search)){
            $users = User::where('name', 'LIKE', '%' . $search . '%')->get();
        }else {
            $users = User::all();
        }
        return view('pages.admin.pegawai.pegawai', compact('users','search'));
    }

    public function show($id)
    {
        $user = User::find($id);

        $diri = DataDiri::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($diri->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $pendidikan = Pendidikan::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($pendidikan->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $anak = KeluargaAnak::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($anak->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $ortu = KeluargaOrtu::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($ortu->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $pasangan = KeluargaPasangan::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($pasangan->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $skp = Skp::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($skp->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $penghargaan = Penghargaan::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($penghargaan->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $kinerja = Kinerja::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($kinerja->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $pns = Pns::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($pns->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $diklat = Diklat::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($diklat->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $pmk = MasaKerja::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($pmk->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $golongan = Golongan::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($golongan->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        $jabatan = Jabatan::with('files')->where('user_id', $id)->where('status', 'diterima')->get();
        if ($jabatan->isEmpty()) {
            session()->flash('error', 'Beberapa dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.lihat.lihat-pegawai', compact('user', 'diri', 'pendidikan', 'anak', 'ortu', 'pasangan', 'skp', 'penghargaan', 'kinerja', 'pns', 'diklat', 'pmk', 'golongan', 'jabatan'));
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
        $user = DataDiri::with('files')->where('user_id', $id)->get();

        if ($user->isEmpty()) {
            return redirect()->route('user.pendidikan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.diri.data-diri-pegawai', compact('user'));
    }

    public function dataDiriShow($id)
    {
        $user = DataDiri::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.pendidikan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return $user;
    }

    public function dataDiriUpdate(Request $request, $id)
    {
        $user = DataDiri::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data pendidikan tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data pendidikan berhasil diupdate!');
    }

    public function dataDiriDelete($id)
    {
        $user = DataDiri::find($id);

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

    public function pendidikanShow($id)
    {
        $user = Pendidikan::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.jabatan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.pendidikan.detail-pendidikan-pegawai', compact('user'));
    }


    public function pendidikanUpdate(Request $request, $id)
    {
        $user = Pendidikan::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data pendidikan tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data pendidikan berhasil diupdate!');
    }


    public function pendidikanDelete($id)
    {
        $user = PendidikanFile::find($id);

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

    public function ortuShow($id)
    {
        $user = KeluargaOrtu::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.pasangan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.keluarga.detail-orangtua-pegawai', compact('user'));
    }


    public function ortuUpdate(Request $request, $id)
    {
        $user = KeluargaOrtu::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data ortu tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data ortu berhasil diupdate!');
    }

    public function ortuDelete($id)
    {
        $user = KeluargaOrtuFile::find($id);

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

    public function pasanganShow($id)
    {
        $user = KeluargaPasangan::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.anak', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.keluarga.detail-pasangan-pegawai', compact('user'));
    }


    public function pasanganUpdate(Request $request, $id)
    {
        $user = KeluargaPasangan::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data pasangan tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data pasangan berhasil diupdate!');
    }

    public function pasanganDelete($id)
    {
        $user = KeluargaPasanganFile::find($id);

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

    public function anakShow($id)
    {
        $user = KeluargaAnak::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.skp', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.keluarga.detail-anak-pegawai', compact('user'));
    }


    public function anakUpdate(Request $request, $id)
    {
        $user = KeluargaAnak::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data anak tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data anak berhasil diupdate!');
    }


    public function anakDelete($id)
    {
        $user = KeluargaAnakFile::find($id);

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

    public function skpShow($id)
    {
        $user = Skp::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.penghargaan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.skp.detail-skp-pegawai', compact('user'));
    }


    public function skpUpdate(Request $request, $id)
    {
        $user = Skp::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data SKP tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data SKP berhasil diupdate!');
    }


    public function skpDelete($id)
    {
        $user = SkpFile::find($id);

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

    public function penghargaanShow($id)
    {
        $user = Penghargaan::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.kinerja', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.penghargaan.detail-penghargaan-pegawai', compact('user'));
    }


    public function penghargaanUpdate(Request $request, $id)
    {
        $user = Penghargaan::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data penghargaan tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data penghargaan berhasil diupdate!');
    }


    public function penghargaanDelete($id)
    {
        $user = PenghargaanFile::find($id);

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

    public function kinerjaShow($id)
    {
        $user = Kinerja::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.pns', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.kinerja.detail-kinerja-pegawai', compact('user'));
    }


    public function kinerjaUpdate(Request $request, $id)
    {
        $user = Kinerja::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data kinerja tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data kinerja berhasil diupdate!');
    }


    public function kinerjaDelete($id)
    {
        $user = KinerjaFile::find($id);

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

    public function pnsShow($id)
    {
        $user = Pns::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.diklat', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.cpns.detail-cpns-pegawai', compact('user'));
    }


    public function pnsUpdate(Request $request, $id)
    {
        $user = Pns::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data cpns tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data cpns berhasil diupdate!');
    }


    public function pnsDelete($id)
    {
        $user = PnsFile::find($id);

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

    public function diklatShow($id)
    {
        $user = Diklat::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.pmk', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.diklat.detail-diklat-pegawai', compact('user'));
    }


    public function diklatUpdate(Request $request, $id)
    {
        $user = Diklat::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data diklat tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data diklat berhasil diupdate!');
    }


    public function diklatDelete($id)
    {
        $user = DiklatFile::find($id);

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

    public function pmkShow($id)
    {
        $user = MasaKerja::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.golongan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.pmk.detail-pmk-pegawai', compact('user'));
    }


    public function pmkUpdate(Request $request, $id)
    {
        $pmk = MasaKerja::find($id);
        if (!$pmk) {
            return redirect()->back()->with('error', 'Data diklat tidak ditemukan!');
        }

        $pmk->update($request->all());

        return redirect()->back()->with('success', 'Data diklat berhasil diupdate!');
    }

    public function pmkDelete($id)
    {
        $user = MasaKerjaFile::find($id);

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

    public function golonganShow($id)
    {
        $user = Golongan::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.jabatan', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.golongan.detail-golongan-pegawai', compact('user'));
    }


    public function golonganUpdate(Request $request, $id)
    {
        $user = Golongan::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data golongan tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data golongan berhasil diupdate!');
    }


    public function golonganDelete($id)
    {
        $user = GolonganFile::find($id);

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

    public function jabatanShow($id)
    {
        $user = Jabatan::with('files')->find($id);

        if (!$user) {
            return redirect()->route('user.edit', $id)->with('error', 'kebutuhan dokumen belum diisi oleh pegawai!');
        }

        return view('pages.admin.pegawai.edit.jabatan.detail-jabatan-pegawai', compact('user'));
    }


    public function jabatanUpdate(Request $request, $id)
    {
        $user = Jabatan::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'Data jabatan tidak ditemukan!');
        }

        $user->update($request->all());

        return redirect()->back()->with('success', 'Data jabatan berhasil diupdate!');
    }


    public function jabatanDelete($id)
    {
        $user = JabatanFile::find($id);

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

    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->role == 'admin') {
            return redirect()->back()->with('errors', 'Tidak dapat menghapus pengguna admin.');
        }
        $user->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus pengguna');
    }
}