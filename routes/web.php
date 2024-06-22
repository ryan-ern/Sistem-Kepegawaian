<?php

use App\Http\Controllers\DiklatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KinerjaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasaKerjaController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\PnsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkpController;

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

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('edit-profile', [GeneralPage::class, 'editProfile'])->name('profile.show');
    Route::get('edit-profile-pendukung', [GeneralPage::class, 'editProfile2'])->name('profile2.show');
    Route::put('edit-profile', [ProfileController::class, 'update'])->name('profile.edit');
    Route::put('edit-profile-pendukung', [ProfileController::class, 'optionalUpdate'])->name('profile2.edit');

    Route::get('dashboard/riwayat-golongan', [GolonganController::class, 'index'])->name('golongan.index');
    Route::get('dashboard/riwayat-golongan/tambah-golongan', [GeneralPage::class, 'tambahGolongan'])->name('golongan.create');
    Route::get('dashboard/riwayat-golongan/lihat-golongan/{id}', [GolonganController::class, 'show'])->name('golongan.show');
    Route::get('dashboard/riwayat-golongan/pengajuan-golongan', [GolonganController::class, 'pengajuanGolongan'])->name('golongan.history');
    Route::post('dashboard/riwayat-golongan/tambah-golongan', [GolonganController::class, 'store'])->name('golongan.store');

    Route::get('/dashboard/riwayat-pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
    Route::get('/dashboard/riwayat-pendidikan/tambah-pendidikan', [GeneralPage::class, 'tambahPendidikan'])->name('pendidikan.create');
    Route::get('/dashboard/riwayat-pendidikan/lihat-pendidikan/{id}', [PendidikanController::class, 'show'])->name('pendidikan.show');
    Route::get('/dashboard/riwayat-pendidikan/pengajuan-pendidikan', [PendidikanController::class, 'pengajuanPendidikan'])->name('pendidikan.history');
    Route::post('/dashboard/riwayat-pendidikan/tambah-pendidikan', [PendidikanController::class, 'store'])->name('pendidikan.store');

    Route::get('/dashboard/riwayat-jabatan', [JabatanController::class, 'index'])->name('jabatan.index');
    Route::get('/dashboard/riwayat-jabatan/tambah-jabatan', [GeneralPage::class, 'tambahJabatan'])->name('jabatan.create');
    Route::get('/dashboard/riwayat-jabatan/lihat-jabatan/{id}', [JabatanController::class, 'show'])->name('jabatan.show');
    Route::get('/dashboard/riwayat-jabatan/pengajuan-jabatan', [JabatanController::class, 'pengajuanJabatan'])->name('jabatan.history');
    Route::post('/dashboard/riwayat-jabatan/tambah-jabatan', [JabatanController::class, 'store'])->name('jabatan.store');

    Route::get('/dashboard/riwayat-pmk', [MasaKerjaController::class, 'index'])->name('pmk.index');
    Route::get('/dashboard/riwayat-pmk/tambah-pmk', [GeneralPage::class, 'tambahPmk'])->name('pmk.create');
    Route::get('/dashboard/riwayat-pmk/lihat-pmk/{id}', [MasaKerjaController::class, 'show'])->name('pmk.show');
    Route::get('/dashboard/riwayat-pmk/pengajuan-pmk', [MasaKerjaController::class, 'pengajuanPmk'])->name('pmk.history');
    Route::post('/dashboard/riwayat-pmk/tambah-pmk', [MasaKerjaController::class, 'store'])->name('pmk.store');

    Route::get('/dashboard/riwayat-cpns', [PnsController::class, 'index'])->name('pns.index');
    Route::get('/dashboard/riwayat-cpns/tambah-cpns', [GeneralPage::class, 'tambahCpns'])->name('pns.create');
    Route::get('/dashboard/riwayat-cpns/lihat-cpns/{id}', [PnsController::class, 'show'])->name('pns.show');
    Route::get('/dashboard/riwayat-cpns/pengajuan-cpns', [PnsController::class, 'pengajuanCpns'])->name('pns.history');
    Route::post('/dashboard/riwayat-cpns/tambah-cpns', [PnsController::class, 'store'])->name('pns.store');

    Route::get('/dashboard/riwayat-diklat', [DiklatController::class, 'index'])->name('diklat.index');
    Route::get('/dashboard/riwayat-diklat/tambah-diklat', [GeneralPage::class, 'tambahDiklat'])->name('diklat.create');
    Route::get('/dashboard/riwayat-diklat/lihat-diklat/{id}', [DiklatController::class, 'show'])->name('diklat.show');
    Route::get('/dashboard/riwayat-diklat/pengajuan-diklat', [DiklatController::class, 'pengajuanDiklat'])->name('diklat.history');
    Route::post('/dashboard/riwayat-diklat/tambah-diklat', [DiklatController::class, 'store'])->name('diklat.store');

    Route::get('/dashboard/riwayat-orangtua', [KeluargaController::class, 'ortu'])->name('orangtua.index');
    Route::get('/dashboard/riwayat-orangtua/tambah-orangtua', [GeneralPage::class, 'tambahOrangtua'])->name('orangtua.create');
    Route::get('/dashboard/riwayat-orangtua/lihat-orangtua/{id}', [KeluargaController::class, 'showOrtu'])->name('orangtua.show');
    Route::get('/dashboard/riwayat-orangtua/pengajuan-orangtua', [KeluargaController::class, 'pengajuanOrtu'])->name('orangtua.history');
    Route::post('/dashboard/riwayat-orangtua/tambah-orangtua', [KeluargaController::class, 'storeOrtu'])->name('orangtua.store');

    Route::get('/dashboard/riwayat-pasangan', [KeluargaController::class, 'pasangan'])->name('pasangan.index');
    Route::get('/dashboard/riwayat-pasangan/tambah-pasangan', [GeneralPage::class, 'tambahPasangan'])->name('pasangan.create');
    Route::get('/dashboard/riwayat-pasangan/lihat-pasangan/{id}', [KeluargaController::class, 'showPasangan'])->name('pasangan.show');
    Route::get('/dashboard/riwayat-pasangan/pengajuan-pasangan', [KeluargaController::class, 'pengajuanPasangan'])->name('pasangan.history');
    Route::post('/dashboard/riwayat-pasangan/tambah-pasangan', [KeluargaController::class, 'storePasangan'])->name('pasangan.store');

    Route::get('/dashboard/riwayat-anak', [KeluargaController::class, 'anak'])->name('anak.index');
    Route::get('/dashboard/riwayat-anak/tambah-anak', [GeneralPage::class, 'tambahAnak'])->name('anak.create');
    Route::get('/dashboard/riwayat-anak/lihat-anak/{id}', [KeluargaController::class, 'showAnak'])->name('anak.show');
    Route::get('/dashboard/riwayat-anak/pengajuan-anak', [KeluargaController::class, 'pengajuanAnak'])->name('anak.history');
    Route::post('/dashboard/riwayat-anak/tambah-anak', [KeluargaController::class, 'storeAnak'])->name('anak.store');

    Route::get('/dashboard/riwayat-skp', [SkpController::class, 'index'])->name('skp.index');
    Route::get('/dashboard/riwayat-skp/tambah-skp', [GeneralPage::class, 'tambahSkp'])->name('skp.create');
    Route::get('/dashboard/riwayat-skp/lihat-skp/{id}', [SkpController::class, 'show'])->name('skp.show');
    Route::get('/dashboard/riwayat-skp/pengajuan-skp', [SkpController::class, 'pengajuanSkp'])->name('skp.history');
    Route::post('/dashboard/riwayat-skp/tambah-skp', [SkpController::class, 'store'])->name('skp.store');

    Route::get('/dashboard/riwayat-penghargaan', [PenghargaanController::class, 'index'])->name('reward.index');
    Route::get('/dashboard/riwayat-penghargaan/tambah-penghargaan', [GeneralPage::class, 'tambahpenghargaan'])->name('reward.create');
    Route::get('/dashboard/riwayat-penghargaan/lihat-penghargaan/{id}', [PenghargaanController::class, 'show'])->name('reward.show');
    Route::get('/dashboard/riwayat-penghargaan/pengajuan-penghargaan', [PenghargaanController::class, 'pengajuanReward'])->name('reward.history');
    Route::post('/dashboard/riwayat-penghargaan/tambah-penghargaan', [PenghargaanController::class, 'store'])->name('reward.store');

    Route::get('/dashboard/riwayat-laporan', [KinerjaController::class, 'index'])->name('kinerja.index');
    Route::get('/dashboard/riwayat-laporan/tambah-laporan', [GeneralPage::class, 'tambahLaporan'])->name('kinerja.create');
    Route::get('/dashboard/riwayat-laporan/lihat-laporan/{id}', [KinerjaController::class, 'show'])->name('kinerja.show');
    Route::get('/dashboard/riwayat-laporan/pengajuan-laporan', [KinerjaController::class, 'pengajuanKinerja'])->name('kinerja.history');
    Route::post('/dashboard/riwayat-laporan/tambah-laporan', [KinerjaController::class, 'store'])->name('kinerja.store');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    // Route::get('/edit-profile', [GeneralPage::class, 'editProfile']);
});


Route::controller(GeneralPage::class)->group(function () {
    // Authorization & Authentication
    Route::get('/', 'loginUser')->name('login');

    Route::get('/user/login', 'loginUser')->name('user.login');
    Route::post('/user/login', [LoginController::class, 'userLogin'])->name('user.login.submit');

    // LOGIN
    Route::get('/admin',  'loginAdmin');
    Route::get('/admin/login',  'loginAdmin')->name('admin.login');
    Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('admin.login.submit');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // USER
    // DASHBOARD
    Route::get('/dashboard', 'dashboard')->name('dashboardUser')->middleware('user');

    Route::get('/admin/dashboard', 'dashboardAdmin')->name('dashboard')->middleware('admin');
    // GOLONGAN
    // Route::get('/dashboard/riwayat-golongan', 'riwayatGolongan');
    // Route::get('/dashboard/riwayat-golongan/tambah-golongan', 'tambahGolongan');
    // Route::get('/dashboard/riwayat-golongan/lihat-golongan', 'lihatGolongan');
    // Route::get('/dashboard/riwayat-golongan/pengajuan-golongan', 'pengajuanGolongan');
    // GOLONGAN
    // PENDIDIKAN
    // Route::get('/dashboard/riwayat-pendidikan', 'riwayatPendidikan');
    // Route::get('/dashboard/riwayat-pendidikan/tambah-pendidikan', 'tambahPendidikan');
    // Route::get('/dashboard/riwayat-pendidikan/lihat-pendidikan', 'lihatPendidikan');
    // Route::get('/dashboard/riwayat-pendidikan/pengajuan-pendidikan', 'pengajuanPendidikan');
    // PENDIDIKAN
    // JABATAN
    // Route::get('/dashboard/riwayat-jabatan', 'riwayatJabatan');
    // Route::get('/dashboard/riwayat-jabatan/tambah-jabatan', 'tambahJabatan');
    // Route::get('/dashboard/riwayat-jabatan/lihat-jabatan', 'lihatJabatan');
    // Route::get('/dashboard/riwayat-jabatan/pengajuan-jabatan', 'pengajuanJabatan');
    // JABATAN
    // PMK
    // Route::get('/dashboard/riwayat-pmk', 'riwayatPmk');
    // Route::get('/dashboard/riwayat-pmk/tambah-pmk', 'tambahPmk');
    // Route::get('/dashboard/riwayat-pmk/lihat-pmk', 'lihatPmk');
    // Route::get('/dashboard/riwayat-pmk/pengajuan-pmk', 'pengajuanPmk');
    // PMK
    // CPNS
    // Route::get('/dashboard/riwayat-cpns', 'riwayatCpns');
    // Route::get('/dashboard/riwayat-cpns/tambah-cpns', 'tambahCpns');
    // Route::get('/dashboard/riwayat-cpns/lihat-cpns', 'lihatCpns');
    // Route::get('/dashboard/riwayat-cpns/pengajuan-cpns', 'pengajuanCpns');
    // CPNS
    // DIKLAT
    // Route::get('/dashboard/riwayat-diklat', 'riwayatDiklat');
    // Route::get('/dashboard/riwayat-diklat/tambah-diklat', 'tambahDiklat');
    // Route::get('/dashboard/riwayat-diklat/lihat-diklat', 'lihatDiklat');
    // Route::get('/dashboard/riwayat-diklat/pengajuan-diklat', 'pengajuanDiklat');
    // DIKLAT
    // KELUARGA
    // ORANGTUA
    // Route::get('/dashboard/riwayat-orangtua', 'riwayatorangtua');
    // Route::get('/dashboard/riwayat-orangtua/tambah-orangtua', 'tambahorangtua');
    // Route::get('/dashboard/riwayat-orangtua/lihat-orangtua', 'lihatorangtua');
    // Route::get('/dashboard/riwayat-orangtua/pengajuan-orangtua', 'pengajuanorangtua');
    // ORANGTUA
    // PASANGAN
    // Route::get('/dashboard/riwayat-pasangan', 'riwayatpasangan');
    // Route::get('/dashboard/riwayat-pasangan/tambah-pasangan', 'tambahpasangan');
    // Route::get('/dashboard/riwayat-pasangan/lihat-pasangan', 'lihatpasangan');
    // Route::get('/dashboard/riwayat-pasangan/pengajuan-pasangan', 'pengajuanpasangan');
    // PASANGAN
    // ANAK
    // Route::get('/dashboard/riwayat-anak', 'riwayatanak');
    // Route::get('/dashboard/riwayat-anak/tambah-anak', 'tambahanak');
    // Route::get('/dashboard/riwayat-anak/lihat-anak', 'lihatanak');
    // Route::get('/dashboard/riwayat-anak/pengajuan-anak', 'pengajuananak');
    // ANAK
    // KELUARGA
    // SKP
    // Route::get('/dashboard/riwayat-skp', 'riwayatSkp');
    // Route::get('/dashboard/riwayat-skp/tambah-skp', 'tambahSkp');
    // Route::get('/dashboard/riwayat-skp/lihat-skp', 'lihatSkp');
    // Route::get('/dashboard/riwayat-skp/pengajuan-skp', 'pengajuanSkp');
    // SKP
    // PENGHARGAAN
    // Route::get('/dashboard/riwayat-penghargaan', 'riwayatpenghargaan');
    // Route::get('/dashboard/riwayat-penghargaan/tambah-penghargaan', 'tambahpenghargaan');
    // Route::get('/dashboard/riwayat-penghargaan/lihat-penghargaan', 'lihatpenghargaan');
    // Route::get('/dashboard/riwayat-penghargaan/pengajuan-penghargaan', 'pengajuanpenghargaan');
    // PENGHARGAAN
    // LAPORAN
    // Route::get('/dashboard/riwayat-laporan', 'riwayatlaporan');
    // Route::get('/dashboard/riwayat-laporan/tambah-laporan', 'tambahlaporan');
    // Route::get('/dashboard/riwayat-laporan/lihat-laporan', 'lihatlaporan');
    // Route::get('/dashboard/riwayat-laporan/pengajuan-laporan', 'pengajuanlaporan');
    // LAPORAN
    // CUTI
    Route::get('/dashboard/riwayat-cuti', 'riwayatcuti');
    // CUTI
    // ABSENSI
    Route::get('/dashboard/riwayat-absensi', 'riwayatabsensi');
    // ABSENSI
    // DASHBOARD
    // -

    // EDIT PROFILE
    // Route::get('/edit-profile', 'editProfile');
    // Route::get('/edit-profile-pendukung', 'editProfile2');
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
    // Route::get('/admin/dashboard', 'dashboardAdmin');
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



    // ADMIN

});