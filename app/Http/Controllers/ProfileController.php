<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'nik' => 'required',
            'email' => 'required',
            'password' => 'nullable',
            'no_tel' => 'required',
            'no_hp' => 'required',
            'satuan_kerja' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'jk_user' => 'required|in:laki-laki,perempuan',
            'foto' => 'nullable',
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('uploads/photos', 'public');
        } else {
            unset($validatedData['foto']);
        }

        auth()->user()->update($validatedData);
        return redirect()->route('profile2.show');
    }

    public function optionalUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'lokasi_kerja' => 'nullable',
            'no_npwp' => 'nullable',
            'tgl_npwp' => 'nullable',
            'no_bpjs' => 'nullable',
            'no_taspen' => 'nullable',
            'tgl_taspen' => 'nullable',
            'no_tapera' => 'nullable',
            'kelas_jabatan' => 'nullable',
            'no_karis' => 'nullable',
            'kppn' => 'nullable',
            'no_akta' => 'nullable',
            'no_kk' => 'nullable',
        ]);
        $user = auth()->user();

        $updatedData = array_merge($user->toArray(), $validatedData);

        $user->update($updatedData);
        return redirect()->route('profile.show')->with('success', 'berhasil memperbarui profil anda');
    }
}
