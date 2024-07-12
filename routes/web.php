<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\DiklatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\KinerjaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasaKerjaController;
use App\Http\Controllers\NotifController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\PnsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkpController;
use App\Http\Controllers\UserController;

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

    Route::get('/absensi', [AbsenController::class, 'index'])->name('absen.index');
    Route::get('/absensi/upload-absensi', [AbsenController::class, 'upload'])->name('absen.upload');
    Route::post('/absensi/store-absensi', [AbsenController::class, 'store'])->name('absen.store');
    Route::get('/absensi/today', [AbsenController::class, 'getToday'])->name('absen.today');
    Route::get('/absensi/all', [AbsenController::class, 'getAll'])->name('absen.all');

    Route::get('/cuti', [CutiController::class, 'create'])->name('cuti.index');
    Route::post('/cuti', [CutiController::class, 'store'])->name('cuti.store');

    Route::get('/dashboard/riwayat-cuti', [CutiController::class, 'riwayatCuti'])->name('cuti.riwayat');


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

    Route::get('/dashboard/riwayat-diri', [DataDiriController::class, 'index'])->name('diri.index');
    Route::get('/dashboard/riwayat-diri/tambah-diri', [GeneralPage::class, 'tambahdiri'])->name('diri.create');
    Route::get('/dashboard/riwayat-diri/lihat-diri/{id}', [DataDiriController::class, 'show'])->name('diri.show');
    Route::get('/dashboard/riwayat-diri/pengajuan-diri', [DataDiriController::class, 'pengajuandiri'])->name('diri.history');
    Route::post('/dashboard/riwayat-diri/tambah-diri', [DataDiriController::class, 'store'])->name('diri.store');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/admin/absensi', [AbsenController::class, 'show'])->name('absensi.show');
    Route::get('/admin/absensi/detail/{id}', [AbsenController::class, 'showDetail'])->name('absensi.detail');

    Route::get('/admin/cuti', [CutiController::class, 'index'])->name('cuti.home');
    Route::get('/admin/cuti/form-cuti/{id}', [CutiController::class, 'edit'])->name('cuti.edit');
    Route::put('/admin/cuti/form-cuti/{id}', [CutiController::class, 'update'])->name('cuti.update');

    Route::get('/admin/pegawai', [UserController::class, 'index'])->name('user.index');
    Route::post('/admin/dashboard', [UserController::class, 'store'])->name('user.store');
    Route::get('/admin/edit-pegawai/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/admin/lihat-pegawai/{id}', [UserController::class, 'show'])->name('user.show');
    Route::put('/admin/edit-pegawai/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/admin/delete-pegawai/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('/admin/edit-pegawai/data-diri/{id}', [UserController::class, 'dataDiri'])->name('user.dataDiri');
    Route::delete('/file/delete/diri/{id}', [UserController::class, 'dataDiriDelete'])->name('file.dataDiri.delete');
    Route::get('/admin/edit-pegawai/data-diri/show/{id}', [UserController::class, 'dataDiriShow'])->name('user.dataDiriShow');
    Route::put('/admin/edit-pegawai/data-diri/update/{id}', [UserController::class, 'dataDiriUpdate'])->name('user.dataDiriUpdate');

    Route::get('/admin/edit-pegawai/data-pendidikan/{id}', [UserController::class, 'pendidikan'])->name('user.pendidikan');
    Route::get('/admin/edit-pegawai/data-pendidikan/show/{id}', [UserController::class, 'pendidikanShow'])->name('user.pendidikanShow');
    Route::put('/admin/edit-pegawai/data-pendidikan/update/{id}', [UserController::class, 'pendidikanUpdate'])->name('user.pendidikanUpdate');
    Route::delete('/file/delete/pendidikan/{id}', [UserController::class, 'pendidikanDelete'])->name('file.pendidikan.delete');

    Route::get('/admin/edit-pegawai/data-ortu/{id}', [UserController::class, 'ortu'])->name('user.ortu');
    Route::get('/admin/edit-pegawai/data-ortu/show/{id}', [UserController::class, 'ortuShow'])->name('user.ortuShow');
    Route::put('/admin/edit-pegawai/data-ortu/update/{id}', [UserController::class, 'ortuUpdate'])->name('user.ortuUpdate');
    Route::delete('/file/delete/ortu/{id}', [UserController::class, 'ortuDelete'])->name('file.ortu.delete');

    Route::get('/admin/edit-pegawai/data-pasangan/{id}', [UserController::class, 'pasangan'])->name('user.pasangan');
    Route::get('/admin/edit-pegawai/data-pasangan/show/{id}', [UserController::class, 'pasanganShow'])->name('user.pasanganShow');
    Route::put('/admin/edit-pegawai/data-pasangan/update/{id}', [UserController::class, 'pasanganUpdate'])->name('user.pasanganUpdate');
    Route::delete('/file/delete/pasangan/{id}', [UserController::class, 'pasanganDelete'])->name('file.pasangan.delete');

    Route::get('/admin/edit-pegawai/data-anak/{id}', [UserController::class, 'anak'])->name('user.anak');
    Route::get('/admin/edit-pegawai/data-anak/show/{id}', [UserController::class, 'anakShow'])->name('user.anakShow');
    Route::put('/admin/edit-pegawai/data-anak/update/{id}', [UserController::class, 'anakUpdate'])->name('user.anakUpdate');
    Route::delete('/file/delete/anak/{id}', [UserController::class, 'anakDelete'])->name('file.anak.delete');

    Route::get('/admin/edit-pegawai/data-skp/{id}', [UserController::class, 'skp'])->name('user.skp');
    Route::get('/admin/edit-pegawai/data-skp/show/{id}', [UserController::class, 'skpShow'])->name('user.skpShow');
    Route::put('/admin/edit-pegawai/data-skp/update/{id}', [UserController::class, 'skpUpdate'])->name('user.skpUpdate');
    Route::delete('/file/delete/skp/{id}', [UserController::class, 'skpDelete'])->name('file.skp.delete');

    Route::get('/admin/edit-pegawai/data-penghargaan/{id}', [UserController::class, 'penghargaan'])->name('user.penghargaan');
    Route::get('/admin/edit-pegawai/data-penghargaan/show/{id}', [UserController::class, 'penghargaanShow'])->name('user.penghargaanShow');
    Route::put('/admin/edit-pegawai/data-penghargaan/update/{id}', [UserController::class, 'penghargaanUpdate'])->name('user.penghargaanUpdate');
    Route::delete('/file/delete/penghargaan/{id}', [UserController::class, 'penghargaanDelete'])->name('file.penghargaan.delete');

    Route::get('/admin/edit-pegawai/data-kinerja/{id}', [UserController::class, 'kinerja'])->name('user.kinerja');
    Route::get('/admin/edit-pegawai/data-kinerja/show/{id}', [UserController::class, 'kinerjaShow'])->name('user.kinerjaShow');
    Route::put('/admin/edit-pegawai/data-kinerja/update/{id}', [UserController::class, 'kinerjaUpdate'])->name('user.kinerjaUpdate');
    Route::delete('/file/delete/kinerja/{id}', [UserController::class, 'kinerjaDelete'])->name('file.kinerja.delete');

    Route::get('/admin/edit-pegawai/data-pns/{id}', [UserController::class, 'pns'])->name('user.pns');
    Route::get('/admin/edit-pegawai/data-pns/show/{id}', [UserController::class, 'pnsShow'])->name('user.pnsShow');
    Route::put('/admin/edit-pegawai/data-pns/update/{id}', [UserController::class, 'pnsUpdate'])->name('user.pnsUpdate');
    Route::delete('/file/delete/pns/{id}', [UserController::class, 'pnsDelete'])->name('file.pns.delete');

    Route::get('/admin/edit-pegawai/data-diklat/{id}', [UserController::class, 'diklat'])->name('user.diklat');
    Route::get('/admin/edit-pegawai/data-diklat/show/{id}', [UserController::class, 'diklatShow'])->name('user.diklatShow');
    Route::put('/admin/edit-pegawai/data-diklat/update/{id}', [UserController::class, 'diklatUpdate'])->name('user.diklatUpdate');
    Route::delete('/file/delete/diklat/{id}', [UserController::class, 'diklatDelete'])->name('file.diklat.delete');

    Route::get('/admin/edit-pegawai/data-pmk/{id}', [UserController::class, 'pmk'])->name('user.pmk');
    Route::get('/admin/edit-pegawai/data-pmk/show/{id}', [UserController::class, 'pmkShow'])->name('user.pmkShow');
    Route::put('/admin/edit-pegawai/data-pmk/update/{id}', [UserController::class, 'pmkUpdate'])->name('user.pmkUpdate');
    Route::delete('/file/delete/pmk/{id}', [UserController::class, 'pmkDelete'])->name('file.pmk.delete');

    Route::get('/admin/edit-pegawai/data-golongan/{id}', [UserController::class, 'golongan'])->name('user.golongan');
    Route::get('/admin/edit-pegawai/data-golongan/show/{id}', [UserController::class, 'golonganShow'])->name('user.golonganShow');
    Route::put('/admin/edit-pegawai/data-golongan/update/{id}', [UserController::class, 'golonganUpdate'])->name('user.golonganUpdate');
    Route::delete('/file/delete/golongan/{id}', [UserController::class, 'golonganDelete'])->name('file.golongan.delete');


    Route::get('/admin/edit-pegawai/data-jabatan/{id}', [UserController::class, 'jabatan'])->name('user.jabatan');
    Route::get('/admin/edit-pegawai/data-jabatan/show/{id}', [UserController::class, 'jabatanShow'])->name('user.jabatanShow');
    Route::put('/admin/edit-pegawai/data-jabatan/update/{id}', [UserController::class, 'jabatanUpdate'])->name('user.jabatanUpdate');
    Route::delete('/file/delete/jabatan/{id}', [UserController::class, 'jabatanDelete'])->name('file.jabatan.delete');

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

    // Route::get('/admin/dashboard', 'dashboardAdmin')->name('dashboard')->middleware('admin');
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
    // Route::get('/dashboard/riwayat-cuti', 'riwayatcuti');
    // CUTI
    // ABSENSI
    // Route::get('/dashboard/riwayat-diri', 'riwayatdiri');
    // Route::get('/dashboard/riwayat-diri/tambah-diri', 'tambahdiri');
    // Route::get('/dashboard/riwayat-diri/lihat-diri', 'lihatdiri');
    // Route::get('/dashboard/riwayat-diri/pengajuan-diri', 'pengajuandiri');
    // ABSENSI
    // DASHBOARD
    // -

    // EDIT PROFILE
    // Route::get('/edit-profile', 'editProfile');
    // Route::get('/edit-profile-pendukung', 'editProfile2');
    // EDIT PROFILE
    // -

    // ABSENSI
    // Route::get('/absensi', 'absensi');
    // Route::get('/absensi/upload-absensi', 'uploadabsensi');
    // ABSENSI
    // -

    // CUTI
    // Route::get('/cuti', 'cuti');
    // CUTI
    Route::get('/profile-user', 'profileuser');


    // USER


    // ADMIN
    // DASHBOARD
    // Route::get('/admin/dashboard', 'dashboardAdmin');
    // DASHBOARD
    // PEGAWAI
    // Route::get('/admin/pegawai', 'pegawaiAdmin');
    // Route::get('/admin/edit-pegawai', 'pegawaiEdit');

    //PENDIDIKAN
    // Route::get('/admin/edit-pegawai/data-pendidikan', 'dataPendidikan');
    // Route::get('/admin/edit-pegawai/detail-pendidikan', 'detailPendidikan');
    // //PENDIDIKAN
    // //JABATAN
    // Route::get('/admin/edit-pegawai/data-jabatan', 'dataJabatan');
    // Route::get('/admin/edit-pegawai/detail-jabatan', 'detailJabatan');
    // //JABATAN
    // //GOLONGAN
    // Route::get('/admin/edit-pegawai/data-golongan', 'dataGolongan');
    // Route::get('/admin/edit-pegawai/detail-golongan', 'detailGolongan');
    // //GOLONGAN
    // //CPNS
    // Route::get('/admin/edit-pegawai/data-cpns', 'datacpns');
    // Route::get('/admin/edit-pegawai/detail-cpns', 'detailcpns');
    // //CPNS
    // //DIKLAT
    // Route::get('/admin/edit-pegawai/data-diklat', 'dataDiklat');
    // Route::get('/admin/edit-pegawai/detail-diklat', 'detailDiklat');
    // //DIKLAT
    // //PENGHARGAAN
    // Route::get('/admin/edit-pegawai/data-penghargaan', 'dataPenghargaan');
    // Route::get('/admin/edit-pegawai/detail-penghargaan', 'detailPenghargaan');
    // //PENGHARGAAN
    // //KINERJA
    // Route::get('/admin/edit-pegawai/data-kinerja', 'dataKinerja');
    // Route::get('/admin/edit-pegawai/detail-kinerja', 'detailKinerja');
    // //KINERJA
    // //PMK
    // Route::get('/admin/edit-pegawai/data-pmk', 'dataPmk');
    // Route::get('/admin/edit-pegawai/detail-pmk', 'detailPmk');
    // //PMK
    // //SKP
    // Route::get('/admin/edit-pegawai/data-skp', 'dataSkp');
    // Route::get('/admin/edit-pegawai/detail-skp', 'detailSkp');
    //SKP
    //KELUARGA-ORANGTUA
    // Route::get('/admin/edit-pegawai/data-orangtua', 'dataOrangtua');
    // Route::get('/admin/edit-pegawai/detail-orangtua', 'detailOrangtua');
    // //KELUARGA-ORANGTUA
    // //KELUARGA-PASANGAN
    // Route::get('/admin/edit-pegawai/data-pasangan', 'dataPasangan');
    // Route::get('/admin/edit-pegawai/detail-pasangan', 'detailPasangan');
    // //KELUARGA-PASANGAN
    // //KELUARGA-ANAK
    // Route::get('/admin/edit-pegawai/data-anak', 'dataAnak');
    // Route::get('/admin/edit-pegawai/detail-anak', 'detailAnak');
    //KELUARGA-ANAK
    //DATA DIRI
    // Route::get('/admin/edit-pegawai/data-diri', 'dataDiri');
    // Route::get('/admin/edit-pegawai/detail-diri', 'detailDiri');
    //DATA DIRI
    // Lihat
    // Route::get('/admin/lihat-pegawai', 'pegawaiLihat');
    // PEGAWAI

    // ABSENSI
    // Route::get('/admin/absensi', 'absensiAdmin');
    // Route::get('/admin/absensi/detail-absensi', 'absensiDetail');
    // ABSENSI

    // CUTI
    // Route::get('/admin/cuti', 'cutiAdmin');
    // Route::get('/admin/cuti/form-cuti', 'cutiForm');
    // CUTI



    // ADMIN

});