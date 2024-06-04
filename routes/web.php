<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(GeneralPage::class) -> group(function () {
    // USER
    // DASHBOARD
    Route::get('/', 'dashboard');
    Route::get('/dashboard', 'dashboard');
    // GOLONGAN
    Route::get('/dashboard/riwayat-golongan', 'riwayatGolongan');
    Route::get('/dashboard/riwayat-golongan/tambah-golongan', 'tambahGolongan');
    Route::get('/dashboard/riwayat-golongan/lihat-golongan', 'lihatGolongan');
    Route::get('/dashboard/riwayat-golongan/pengajuan-golongan', 'pengajuanGolongan');
    // GOLONGAN
    // PENDIDIKAN
    Route::get('/dashboard/riwayat-pendidikan', 'riwayatPendidikan');
    Route::get('/dashboard/riwayat-pendidikan/tambah-pendidikan', 'tambahPendidikan');
    Route::get('/dashboard/riwayat-pendidikan/lihat-pendidikan', 'lihatPendidikan');
    Route::get('/dashboard/riwayat-pendidikan/pengajuan-pendidikan', 'pengajuanPendidikan');
    // PENDIDIKAN
    // JABATAN
    Route::get('/dashboard/riwayat-jabatan', 'riwayatJabatan');
    Route::get('/dashboard/riwayat-jabatan/tambah-jabatan', 'tambahJabatan');
    Route::get('/dashboard/riwayat-jabatan/lihat-jabatan', 'lihatJabatan');
    Route::get('/dashboard/riwayat-jabatan/pengajuan-jabatan', 'pengajuanJabatan');
    // JABATAN
    // PMK
    Route::get('/dashboard/riwayat-pmk', 'riwayatPmk');
    Route::get('/dashboard/riwayat-pmk/tambah-pmk', 'tambahPmk');
    Route::get('/dashboard/riwayat-pmk/lihat-pmk', 'lihatPmk');
    Route::get('/dashboard/riwayat-pmk/pengajuan-pmk', 'pengajuanPmk');
    // PMK
    // CPNS
    Route::get('/dashboard/riwayat-cpns', 'riwayatCpns');
    Route::get('/dashboard/riwayat-cpns/tambah-cpns', 'tambahCpns');
    Route::get('/dashboard/riwayat-cpns/lihat-cpns', 'lihatCpns');
    Route::get('/dashboard/riwayat-cpns/pengajuan-cpns', 'pengajuanCpns');
    // CPNS
    // DIKLAT
    Route::get('/dashboard/riwayat-diklat', 'riwayatDiklat');
    Route::get('/dashboard/riwayat-diklat/tambah-diklat', 'tambahDiklat');
    Route::get('/dashboard/riwayat-diklat/lihat-diklat', 'lihatDiklat');
    Route::get('/dashboard/riwayat-diklat/pengajuan-diklat', 'pengajuanDiklat');
    // DIKLAT
    // KELUARGA
    // ORANGTUA
    Route::get('/dashboard/riwayat-orangtua', 'riwayatorangtua');
    Route::get('/dashboard/riwayat-orangtua/tambah-orangtua', 'tambahorangtua');
    Route::get('/dashboard/riwayat-orangtua/lihat-orangtua', 'lihatorangtua');
    Route::get('/dashboard/riwayat-orangtua/pengajuan-orangtua', 'pengajuanorangtua');
    // ORANGTUA
    // PASANGAN
    Route::get('/dashboard/riwayat-pasangan', 'riwayatpasangan');
    Route::get('/dashboard/riwayat-pasangan/tambah-pasangan', 'tambahpasangan');
    Route::get('/dashboard/riwayat-pasangan/lihat-pasangan', 'lihatpasangan');
    Route::get('/dashboard/riwayat-pasangan/pengajuan-pasangan', 'pengajuanpasangan');
    // PASANGAN
    // ANAK
    Route::get('/dashboard/riwayat-anak', 'riwayatanak');
    Route::get('/dashboard/riwayat-anak/tambah-anak', 'tambahanak');
    Route::get('/dashboard/riwayat-anak/lihat-anak', 'lihatanak');
    Route::get('/dashboard/riwayat-anak/pengajuan-anak', 'pengajuananak');
    // ANAK
    // KELUARGA
    // SKP
    Route::get('/dashboard/riwayat-skp', 'riwayatSkp');
    Route::get('/dashboard/riwayat-skp/tambah-skp', 'tambahSkp');
    Route::get('/dashboard/riwayat-skp/lihat-skp', 'lihatSkp');
    Route::get('/dashboard/riwayat-skp/pengajuan-skp', 'pengajuanSkp');
    // SKP
    // PENGHARGAAN
    Route::get('/dashboard/riwayat-penghargaan', 'riwayatpenghargaan');
    Route::get('/dashboard/riwayat-penghargaan/tambah-penghargaan', 'tambahpenghargaan');
    Route::get('/dashboard/riwayat-penghargaan/lihat-penghargaan', 'lihatpenghargaan');
    Route::get('/dashboard/riwayat-penghargaan/pengajuan-penghargaan', 'pengajuanpenghargaan');
    // PENGHARGAAN
    // LAPORAN
    Route::get('/dashboard/riwayat-laporan', 'riwayatlaporan');
    Route::get('/dashboard/riwayat-laporan/tambah-laporan', 'tambahlaporan');
    Route::get('/dashboard/riwayat-laporan/lihat-laporan', 'lihatlaporan');
    Route::get('/dashboard/riwayat-laporan/pengajuan-laporan', 'pengajuanlaporan');
    // LAPORAN
    // CUTI
    Route::get('/dashboard/riwayat-cuti', 'riwayatcuti');
    // CUTI
    // ABSENSI
    Route::get('/dashboard/riwayat-diri', 'riwayatdiri');
    Route::get('/dashboard/riwayat-diri/tambah-diri', 'tambahdiri');
    Route::get('/dashboard/riwayat-diri/lihat-diri', 'lihatdiri');
    Route::get('/dashboard/riwayat-diri/pengajuan-diri', 'pengajuandiri');
    // ABSENSI
    // DASHBOARD
    // -

    // EDIT PROFILE
    Route::get('/edit-profile', 'editProfile');
    Route::get('/edit-profile-pendukung', 'editProfile2');
    // EDIT PROFILE
    // -

    // ABSENSI
    Route::get('/absensi', 'absensi');
    Route::get('/absensi/upload-absensi', 'uploadabsensi');
    // ABSENSI
    // -

    // CUTI
    Route::get('/cuti', 'cuti');
    // CUTI
    Route::get('/profile-user', 'profileuser');


    // USER


    // ADMIN
    // DASHBOARD
    Route::get('/admin/dashboard', 'dashboardAdmin');
    // DASHBOARD
    // PEGAWAI
    Route::get('/admin/pegawai', 'pegawaiAdmin');
    Route::get('/admin/edit-pegawai', 'pegawaiEdit');
    Route::get('/admin/edit-pegawai/pendidikan', 'pegawaiPendidikan');
    Route::get('/admin/edit-pegawai/keluarga-orangtua', 'pegawaiOrangtua');
    Route::get('/admin/edit-pegawai/keluarga-pasangan', 'pegawaipasangan');
    Route::get('/admin/edit-pegawai/keluarga-anak', 'pegawaianak');
    Route::get('/admin/edit-pegawai/skp', 'pegawaiskp');
    Route::get('/admin/edit-pegawai/penghargaan', 'pegawaipenghargaan');
    Route::get('/admin/edit-pegawai/kinerja', 'pegawaikinerja');
    Route::get('/admin/edit-pegawai/cpns', 'pegawaicpns');
    Route::get('/admin/edit-pegawai/diklat', 'pegawaidiklat');
    Route::get('/admin/edit-pegawai/pmk', 'pegawaipmk');
    Route::get('/admin/edit-pegawai/golongan', 'pegawaigolongan');
    Route::get('/admin/edit-pegawai/jabatan', 'pegawaijabatan');
    //PENDIDIKAN
    Route::get('/admin/edit-pegawai/data-pendidikan', 'dataPendidikan');
    Route::get('/admin/edit-pegawai/detail-pendidikan', 'detailPendidikan');
    //PENDIDIKAN
    //JABATAN
    Route::get('/admin/edit-pegawai/data-jabatan', 'dataJabatan');
    Route::get('/admin/edit-pegawai/detail-jabatan', 'detailJabatan');
    //JABATAN
    //GOLONGAN
    Route::get('/admin/edit-pegawai/data-golongan', 'dataGolongan');
    Route::get('/admin/edit-pegawai/detail-golongan', 'detailGolongan');
    //GOLONGAN
    //CPNS
    Route::get('/admin/edit-pegawai/data-cpns', 'datacpns');
    Route::get('/admin/edit-pegawai/detail-cpns', 'detailcpns');
    //CPNS
    //DIKLAT
    Route::get('/admin/edit-pegawai/data-diklat', 'dataDiklat');
    Route::get('/admin/edit-pegawai/detail-diklat', 'detailDiklat');
    //DIKLAT
    // Lihat
    Route::get('/admin/lihat-pegawai', 'pegawaiLihat');
    // PEGAWAI

    // ABSENSI
    Route::get('/admin/absensi', 'absensiAdmin');
    Route::get('/admin/absensi/detail-absensi', 'absensiDetail');
    // ABSENSI

    // CUTI
    Route::get('/admin/cuti', 'cutiAdmin');
    Route::get('/admin/cuti/form-cuti', 'cutiForm');
    // CUTI

    // LOGIN
    Route::get('admin/login', 'loginAdmin');
    Route::get('user/login', 'loginUser');
    // ADMIN

});
