<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-admin>
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Edit Data Pegawai</div>
        {{-- as --}}
        <div class="wrap flex flex-col md:flex-row gap-3 md:gap-8">
            <div class="left w-full md:w-[12%] ">
                <div class="avatar">
                    <img class="w-[120px]" src="../../Assets/user3.png" alt="">
                </div>
                <div class="wrap-menu mt-5 flex flex-col gap-3">
                    <a href="{{ route('user.dataDiri', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
                        Data Diri
                    </a>
                    <a href="{{ route('user.pendidikan', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Pendidikan
                    </a>
                    <a href="{{ route('user.ortu', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Keluarga
                    </a>
                    <a href="{{ route('user.skp', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        SKP
                    </a>
                    <a href="{{ route('user.penghargaan', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Penghargaan
                    </a>
                    <a href="{{ route('user.kinerja', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Laporan Kinerja
                    </a>
                    <a href="{{ route('user.pns', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        CPNS/PNS
                    </a>
                    <a href="{{ route('user.diklat', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Diklat/Kursus
                    </a>
                    <a href="{{ route('user.pmk', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md text-[14px]">
                        Peninjauan Masa Kerja
                    </a>
                    <a href="{{ route('user.golongan', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Golongan
                    </a>
                    <a href="{{ route('user.jabatan', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Jabatan
                    </a>
                </div>
            </div>
            <div class="right w-full md:w-[88%]">
                <div class="hea flex justify-between">
                    <div class="text-[#2F5B6B] font-semibold text-[22px]">Data Diklat/Kursus</div>
                    <button data-modal-target="simpan" data-modal-toggle="simpan"
                        class="p-1 bg-[#9BB8C3] hover:bg-[#2F5B6B] px-5 rounded text-white">Simpan</button>
                </div>
                <div class="wrap mt-3">
                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                        {{-- KIRI --}}
                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Jenis
                                        Diklat</label>
                                    <select
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px] flex-shrink-0"
                                        id="cars">
                                        <option value="Diklat Struktural">Diklat Struktural</option>
                                        <option value="Diklat Fungsional">Diklat Fungsional</option>
                                        <option value="Diklat Teknik">Diklat Teknik</option>
                                        <option value="Pelatihan Manajerial">Pelatihan Manajerial</option>
                                        <option value="Pelatihan Sosial Kultural">Pelatihan Sosial Kultural</option>
                                        <option value="Sosialisasi">Sosialisasi</option>
                                        <option value="Bimbingan Teknis Seminar">Bimbingan Teknis Seminar</option>
                                        <option value="Magang">Magang</option>
                                        <option value="Kursus">Kursus</option>
                                        <option value="Penataran ">Penataran </option>
                                        <option
                                            value="Pengembangan Kompetensi Dalam Bentuk Pelatihan Klasikal Lainnya
">
                                            Pengembangan Kompetensi Dalam Bentuk Pelatihan Klasikal Lainnya
                                        </option>
                                        <option value="Coaching">Coaching</option>
                                        <option value="Mentoring">Mentoring</option>
                                        <option value="E-Learning">E-Learning</option>
                                        <option value="Pelatihan Jarak Jauh">Pelatihan Jarak Jauh</option>
                                        <option value="Detasering (Secondment)">Detasering (Secondment)</option>
                                        <option value="Pembelajaran Alam Terbuka (Outbond)">Pembelajaran Alam Terbuka
                                            (Outbond)
                                        </option>
                                        <option value="Patok Banding (Benchmarking)">Patok Banding (Benchmarking)
                                        </option>
                                        <option value="Pertukaran Antara PNS Dengan Pegawai">Pertukaran Antara PNS
                                            Dengan Pegawai
                                        </option>
                                        <option value="Swasta/Badan Usaha Milik Negara/Badan Usaha">Swasta/Badan Usaha
                                            Milik
                                            Negara/Badan Usaha</option>
                                        <option value="Milik Daerah">Milik Daerah</option>
                                        <option value="Belajar Mandiri (Self Development)">Belajar Mandiri (Self
                                            Development)
                                        </option>
                                        <option value="Komunitas Belajar (Community Of Practices)">Komunitas Belajar
                                            (Community Of
                                            Practices)</option>
                                        <option value="Bimbingan Di Tempat Kerja">Bimbingan Di Tempat Kerja</option>
                                        <option
                                            value="Pengembangan Kompetensi Dalam Bentuk Pelatihan Nonklasikal Lainnya">
                                            Pengembangan Kompetensi Dalam Bentuk Pelatihan Nonklasikal Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nama Diklat</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Institusi
                                        Penyelenggara</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tahun
                                        Diklat</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tahun
                                        Selesai</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                        </div>
                        {{-- KANAN --}}
                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal
                                        Mulai</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Durasi
                                        (Jam)</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Rumpun
                                        Diklat</label>
                                    <select
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px] flex-shrink-0"
                                        id="cars">
                                        <option value="Tenaga Pendidikan Lainnya">Tenaga Pendidikan Lainnya</option>
                                        <option value="Keagamaan dan Pendidikan">Keagamaan dan Pendidikan</option>
                                        <option
                                            value="Pendidikan Tingkat Taman Kanak-Kanak, Dasar, Lanjutan, dan Sekolah Khusus
">
                                            Pendidikan Tingkat Taman Kanak-Kanak, Dasar, Lanjutan, dan Sekolah Khusus
                                        </option>
                                        <option value="Kebudayaan">Kebudayaan</option>
                                        <option value="Hukum dan Peradilan">Hukum dan Peradilan</option>
                                        <option value="Pendidikan Lainnya">Pendidikan Lainnya</option>
                                        <option value="Kekomputeran">Kekomputeran</option>
                                        <option value="Arsitek, Insinyur, dan Yang Berkaitan">Arsitek, Insinyur, dan
                                            Yang Berkaitan
                                        </option>
                                        <option value="Administrasi Kependudukan Pencatatan Sipil">Administrasi
                                            Kependudukan
                                            Pencatatan Sipil</option>
                                        <option value="Kearsipan">Kearsipan</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Akuntan dan Anggaran">Akuntan dan Anggaran</option>
                                        <option value="Penanaman Modal">Penanaman Modal</option>
                                        <option value="Tenaga Kerja">Tenaga Kerja</option>
                                        <option value="Imigrasi, Pajak, dan Asisten Profesional Yang Berkaitan">
                                            Imigrasi, Pajak,
                                            dan Asisten Profesional Yang Berkaitan</option>
                                        <option value="Penerangan dan Seni Budaya">Penerangan dan Seni Budaya</option>
                                        <option value="Ekonomi dan Keuangan">Ekonomi dan Keuangan</option>
                                        <option value="Matematika, Statistika, dan Yang Berkaitan">Matematika,
                                            Statistika, dan Yang
                                            Berkaitan</option>
                                        <option value="Sains dan Lingkungan">Sains dan Lingkungan</option>
                                        <option value="Manajemen">Manajemen</option>
                                        <option value="Pariwisata">Pariwisata</option>
                                        <option value="Perindustrian">Perindustrian</option>
                                        <option value="Kepemudaan dan Olahraga">Kepemudaan dan Olahraga</option>
                                        <option value="Administrasi">Administrasi</option>
                                        <option value="Fisika, Kimia, dan Yang Berkaiatan">Fisika, Kimia, dan Yang
                                            Berkaiatan
                                        </option>
                                        <option value="Statistik">Statistik</option>
                                        <option value="Profesional Bidang Pendidikan Lainnya">Profesional Bidang
                                            Pendidikan Lainnya
                                        </option>
                                        <option value="Komunikasi dan Informatika">Komunikasi dan Informatika</option>
                                        <option value="Energi dan Sumber Daya Mineral">Energi dan Sumber Daya Mineral
                                        </option>
                                        <option value="Koperasi Usaha Kecil dan Menengah">Koperasi Usaha Kecil dan
                                            Menengah
                                        </option>
                                        <option value="Penelitian">Penelitian</option>
                                        <option value="Pekerjaan Umum dan Penataan Ruang">Pekerjaan Umum dan Penataan
                                            Ruang
                                        </option>
                                        <option value="Pemberdayaan Perempuan dan Perlindungan Anak">Pemberdayaan
                                            Perempuan dan
                                            Perlindungan Anak</option>
                                        <option value="Arsiparis, Pustakawan, dan Yang Berkaitan">Arsiparis,
                                            Pustakawan, dan Yang
                                            Berkaitan</option>
                                        <option value="Pengawas Kualitas dan Keamanan">Pengawas Kualitas dan Keamanan
                                        </option>
                                        <option value="Keagamaan">Keagamaan</option>
                                        <option value="Kehutanan">Kehutanan</option>
                                        <option value="Pangan">Pangan</option>
                                        <option value="Penelitian dan Perekayasaan">Penelitian dan Perekayasaan
                                        </option>
                                        <option value="kelautan dan Perikanan">kelautan dan Perikanan</option>
                                        <option value="Kesehatan">Kesehatan</option>
                                        <option
                                            value="Asisten Profesional Yang Berhubungan Dengan Keuangan dan Penjualan">
                                            Asisten
                                            Profesional Yang Berhubungan Dengan Keuangan dan Penjualan</option>
                                        <option value="Hak Cipta, Paten, dan Merek">Hak Cipta, Paten, dan Merek
                                        </option>
                                        <option value="Ilmu Sosial dan Yang Berkaitan">Ilmu Sosial dan Yang Berkaitan
                                        </option>
                                        <option value="Hukum, Politik, dan Pemerintahan">Hukum, Politik, dan
                                            Pemerintahan</option>
                                        <option value="Ketenteraman dan Ketertiban Umum Serta Perlindungan Masyarakat">
                                            Ketenteraman
                                            dan Ketertiban Umum Serta Perlindungan Masyarakat</option>
                                        <option value="Perdagangan">Perdagangan</option>
                                        <option value="Pertahanan">Pertahanan</option>
                                        <option value="Pemberdayaan Masyarakat dan Desa">Pemberdayaan Masyarakat dan
                                            Desa</option>
                                        <option value="Detektif dan Penyidik">Detektif dan Penyidik</option>
                                        <option value="Kesehatan dan/atau Ilmu Sosial">Kesehatan dan/atau Ilmu Sosial
                                        </option>
                                        <option value="Perpustakaan">Perpustakaan</option>
                                        <option value="Pertanian">Pertanian</option>
                                        <option value="SDM">SDM</option>
                                        <option value="Perhubungan">Perhubungan</option>
                                        <option value="Pengendalian Penduduk dan Keluarga Berencana">Pengendalian
                                            Penduduk dan
                                            Keluarga Berencana</option>
                                        <option value="Persandian">Persandian</option>
                                        <option value="Perumahan Rakyat dan Kawasan Pemukiman">Perumahan Rakyat dan
                                            Kawasan
                                            Pemukiman</option>
                                        <option value="Ilmu Hayat">Ilmu Hayat</option>
                                        <option value="Transmigrasi">Transmigrasi</option>
                                        <option value="Sosial">Sosial</option>
                                        <option value="Lingkungan Hidup">Lingkungan Hidup</option>
                                        <option value="Politik dan Hubungan Luar Negeri">Politik dan Hubungan Luar
                                            Negeri</option>
                                    </select>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor
                                        Sertifikat</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- table --}}
                    <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                        <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                            <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                                <tr>
                                    <th scope="col" class="px-3 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Nama Surat
                                    </th>
                                    <th scope="col" class="px-3 py-3">
                                        Aksi
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                    <td class="px-3 py-3">
                                        1
                                    </td>
                                    <td class="px-3 py-3">
                                        Dokumen Surat.pdf
                                    </td>
                                    <td class="px-3 py-3">
                                        <button title="Download" class="mr-3">
                                            <img src="./../../Assets/download.svg" alt="">
                                        </button>
                                        <button title="Lihat" class="mr-3">
                                            <img src="./../../Assets/eye.svg" alt="">
                                        </button>
                                        <button data-modal-target="hapus" data-modal-toggle="hapus" class="">
                                            <img src="./../../Assets/del.svg" alt="">
                                        </button>
                                    </td>
                                </tr>
                                <tr
                                    class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                    <td class="px-3 py-3">
                                        1
                                    </td>
                                    <td class="px-3 py-3">
                                        Dokumen Surat.pdf
                                    </td>
                                    <td class="px-3 py-3">
                                        <button title="Download" class="mr-3">
                                            <img src="./../../Assets/download.svg" alt="">
                                        </button>
                                        <button title="Lihat" class="mr-3">
                                            <img src="./../../Assets/eye.svg" alt="">
                                        </button>
                                        <button data-modal-target="hapus" data-modal-toggle="hapus" class="">
                                            <img src="./../../Assets/del.svg" alt="">
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- POP UP simpan --}}
        <div id="simpan" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div data-modal-hide="simpan" class="relative p-4 w-full flex justify-center items-center h-full">
                <!-- Modal content -->
                <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                            data-modal-hide="simpan">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                        <div class="wrap flex items-center gap-8 flex-col">
                            <div class="head font-medium text-[28px]">Data Berhasil Dikirim</div>
                            <div class="icon">
                                <img src="../../Assets/ceklist.svg" alt="">
                            </div>
                            <button data-modal-hide="simpan" class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                Selesai
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- simpan --}}

        {{-- POP UP HAPUS --}}
        <div id="hapus" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div data-modal-hide="hapus" class="relative p-4 w-full flex justify-center items-center h-full">
                <!-- Modal content -->
                <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                            data-modal-hide="hapus">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                        <div class="wrap flex items-center gap-8 flex-col">
                            <div class="head font-medium text-[28px]">Data Berhasil Dihapus</div>
                            <div class="icon">
                                <img src="../../Assets/sampah.svg" alt="">
                            </div>
                            <button data-modal-hide="hapus" class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                Selesai
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- POP UP HAPUS --}}
    </x-sidebar-admin>
</body>

</html>
