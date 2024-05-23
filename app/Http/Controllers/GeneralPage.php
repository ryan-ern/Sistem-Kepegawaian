<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPage extends Controller
{
    // USER
    // DASHBOARD
    function dashboard () {
        return view('pages/user/dashboard/dashboard');
    }
    // GOLONGAN
    function riwayatGolongan () {
        return view('pages/user/dashboard/riwayat-golongan/riwayat-golongan');
    }
    function lihatGolongan () {
        return view('pages/user/dashboard/riwayat-golongan/lihat-golongan');
    }
    function tambahGolongan () {
        return view('pages/user/dashboard/riwayat-golongan/tambah-golongan');
    }
    function pengajuanGolongan () {
        return view('pages/user/dashboard/riwayat-golongan/pengajuan-golongan');
    }
    // GOLONGAN
    // PENDIDIKAN
    function riwayatPendidikan () {
        return view('pages/user/dashboard/riwayat-pendidikan/riwayat-pendidikan');
    }
    function lihatPendidikan () {
        return view('pages/user/dashboard/riwayat-pendidikan/lihat-pendidikan');
    }
    function tambahPendidikan () {
        return view('pages/user/dashboard/riwayat-pendidikan/tambah-pendidikan');
    }
    function pengajuanPendidikan () {
        return view('pages/user/dashboard/riwayat-pendidikan/pengajuan-pendidikan');
    }
    // PENDIDIKAN
    // JABATAN
    function riwayatJabatan () {
        return view('pages/user/dashboard/riwayat-jabatan/riwayat-jabatan');
    }
    function lihatJabatan () {
        return view('pages/user/dashboard/riwayat-jabatan/lihat-jabatan');
    }
    function tambahJabatan () {
        return view('pages/user/dashboard/riwayat-jabatan/tambah-jabatan');
    }
    function pengajuanJabatan () {
        return view('pages/user/dashboard/riwayat-jabatan/pengajuan-jabatan');
    }
    // JABATAN
    // PMK
    function riwayatPmk () {
        return view('pages/user/dashboard/riwayat-pmk/riwayat-pmk');
    }
    function lihatPmk () {
        return view('pages/user/dashboard/riwayat-pmk/lihat-pmk');
    }
    function tambahPmk () {
        return view('pages/user/dashboard/riwayat-pmk/tambah-pmk');
    }
    function pengajuanPmk () {
        return view('pages/user/dashboard/riwayat-pmk/pengajuan-pmk');
    }
    // PMK
    // CPNS
    function riwayatCpns () {
        return view('pages/user/dashboard/riwayat-cpns/riwayat-cpns');
    }
    function lihatCpns () {
        return view('pages/user/dashboard/riwayat-cpns/lihat-cpns');
    }
    function tambahCpns () {
        return view('pages/user/dashboard/riwayat-cpns/tambah-cpns');
    }
    function pengajuanCpns () {
        return view('pages/user/dashboard/riwayat-cpns/pengajuan-cpns');
    }
    // CPNS
    // DIKLAT
    function riwayatDiklat () {
        return view('pages/user/dashboard/riwayat-diklat/riwayat-diklat');
    }
    function lihatDiklat () {
        return view('pages/user/dashboard/riwayat-diklat/lihat-diklat');
    }
    function tambahDiklat () {
        return view('pages/user/dashboard/riwayat-diklat/tambah-diklat');
    }
    function pengajuanDiklat () {
        return view('pages/user/dashboard/riwayat-diklat/pengajuan-diklat');
    }
    // DIKLAT
    // KELUARGA
    // ORANGTUA
    function riwayatorangtua () {
        return view('pages/user/dashboard/riwayat-keluarga/orangtua/riwayat-orangtua');
    }
    function lihatorangtua () {
        return view('pages/user/dashboard/riwayat-keluarga/orangtua/lihat-orangtua');
    }
    function tambahorangtua () {
        return view('pages/user/dashboard/riwayat-keluarga/orangtua/tambah-orangtua');
    }
    function pengajuanorangtua () {
        return view('pages/user/dashboard/riwayat-keluarga/orangtua/pengajuan-orangtua');
    }
    // ORANGTUA
    // PASANGAN
    function riwayatpasangan () {
        return view('pages/user/dashboard/riwayat-keluarga/pasangan/riwayat-pasangan');
    }
    function lihatpasangan () {
        return view('pages/user/dashboard/riwayat-keluarga/pasangan/lihat-pasangan');
    }
    function tambahpasangan () {
        return view('pages/user/dashboard/riwayat-keluarga/pasangan/tambah-pasangan');
    }
    function pengajuanpasangan () {
        return view('pages/user/dashboard/riwayat-keluarga/pasangan/pengajuan-pasangan');
    }
    // PASANGAN
    // ANAK
    function riwayatanak () {
        return view('pages/user/dashboard/riwayat-keluarga/anak/riwayat-anak');
    }
    function lihatanak () {
        return view('pages/user/dashboard/riwayat-keluarga/anak/lihat-anak');
    }
    function tambahanak () {
        return view('pages/user/dashboard/riwayat-keluarga/anak/tambah-anak');
    }
    function pengajuananak () {
        return view('pages/user/dashboard/riwayat-keluarga/anak/pengajuan-anak');
    }
    // ANAK
    // KELUARGA
    // SKP
    function riwayatSkp () {
        return view('pages/user/dashboard/riwayat-skp/riwayat-skp');
    }
    function lihatSkp () {
        return view('pages/user/dashboard/riwayat-skp/lihat-skp');
    }
    function tambahSkp () {
        return view('pages/user/dashboard/riwayat-skp/tambah-skp');
    }
    function pengajuanSkp () {
        return view('pages/user/dashboard/riwayat-skp/pengajuan-skp');
    }
    // SKP
    // PENGHARGAAN
    function riwayatpenghargaan () {
        return view('pages/user/dashboard/riwayat-penghargaan/riwayat-penghargaan');
    }
    function lihatpenghargaan () {
        return view('pages/user/dashboard/riwayat-penghargaan/lihat-penghargaan');
    }
    function tambahpenghargaan () {
        return view('pages/user/dashboard/riwayat-penghargaan/tambah-penghargaan');
    }
    function pengajuanpenghargaan () {
        return view('pages/user/dashboard/riwayat-penghargaan/pengajuan-penghargaan');
    }
    // PENGHARGAAN
    // LAPORAN
    function riwayatlaporan () {
        return view('pages/user/dashboard/riwayat-laporan/riwayat-laporan');
    }
    function lihatlaporan () {
        return view('pages/user/dashboard/riwayat-laporan/lihat-laporan');
    }
    function tambahlaporan () {
        return view('pages/user/dashboard/riwayat-laporan/tambah-laporan');
    }
    function pengajuanlaporan () {
        return view('pages/user/dashboard/riwayat-laporan/pengajuan-laporan');
    }
    // LAPORAN
    // CUTI
    function riwayatcuti () {
        return view('pages/user/dashboard/riwayat-cuti/riwayat-cuti');
    }
    // CUTI
    // ABSENSI
    function riwayatabsensi () {
        return view('pages/user/dashboard/riwayat-absensi/riwayat-absensi');
    }
    // ABSENSI
    // DASHBOARD
    // -

    // EDIT PROFILE
    function editProfile () {
        return view('pages/user/edit-profile/edit-profile');
    }
    function editProfile2 () {
        return view('pages/user/edit-profile/edit-profile-pendukung');
    }
    // EDIT PROFILE
    // -

    // ABSENSI
    function absensi () {
        return view('pages/user/absensi/absensi');
    }
    function uploadabsensi () {
        return view('pages/user/absensi/upload-absensi');
    }
    // ABSENSI
    // -

    // CUTI
    function cuti () {
        return view('pages/user/cuti/cuti');
    }
    // CUTI

    function profileuser () {
        return view('pages/user/profile-user');
    }


    // USER

    // ADMIN
    // DASHBOARD
    function dashboardAdmin () {
        return view('pages/admin/dashboard/dashboard-admin');
    }
    // DASHBOARD
    // PEGAWAI
    function pegawaiAdmin () {
        return view('pages/admin/pegawai/pegawai');
    }
    function pegawaiEdit () {
        return view('pages/admin/pegawai/edit/edit-pegawai');
    }
    function pegawaiPendidikan () {
        return view('pages/admin/pegawai/edit/pendidikan-pegawai');
    }
    function pegawaiOrangtua () {
        return view('pages/admin/pegawai/edit/keluarga-orangtua');
    }
    function pegawaianak () {
        return view('pages/admin/pegawai/edit/keluarga-anak');
    }
    function pegawaipasangan () {
        return view('pages/admin/pegawai/edit/keluarga-pasangan');
    }
    function pegawaiskp () {
        return view('pages/admin/pegawai/edit/skp-pegawai');
    }
    function pegawaipenghargaan () {
        return view('pages/admin/pegawai/edit/penghargaan-pegawai');
    }
    function pegawaikinerja () {
        return view('pages/admin/pegawai/edit/kinerja-pegawai');
    }
    function pegawaicpns () {
        return view('pages/admin/pegawai/edit/cpns-pegawai');
    }
    function pegawaidiklat () {
        return view('pages/admin/pegawai/edit/diklat-pegawai');
    }
    function pegawaipmk () {
        return view('pages/admin/pegawai/edit/pmk-pegawai');
    }
    function pegawaigolongan () {
        return view('pages/admin/pegawai/edit/golongan-pegawai');
    }
    function pegawaijabatan () {
        return view('pages/admin/pegawai/edit/jabatan-pegawai');
    }
    // LIHAT
    function pegawaiLihat () {
        return view('pages/admin/pegawai/lihat/lihat-pegawai');
    }
    // PEGAWAI

    // ABESENSI
    function absensiAdmin () {
        return view('pages/admin/absensi/absensi');
    }
    function absensiDetail () {
        return view('pages/admin/absensi/detail-absensi');
    }
    // ABESENSI

    // CUTI
    function cutiAdmin () {
        return view('pages/admin/cuti/cuti');
    }
    function cutiForm () {
        return view('pages/admin/cuti/form-cuti');
    }
    // CUTI

    // LOGIN
    function loginAdmin () {
        return view('pages/admin/login/login');
    }
    function loginUser () {
        return view('pages/user/login/login');
    }
    // LOGIN
    // ADMIN

}
