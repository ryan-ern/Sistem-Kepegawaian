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
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
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
                        class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
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
                <form action="{{ route('user.diklatUpdate', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="hea flex justify-between">
                        <div class="text-[#2F5B6B] font-semibold text-[22px]">Data Diklat/Kursus</div>
                        <button type="submit" data-modal-target="simpan" data-modal-toggle="simpan"
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
                                        <select name="jenis_diklat" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px] flex-shrink-0"
                                            id="cars">
                                            <option value="Diklat Struktural"
                                                {{ $user->jenis_diklat == 'Diklat Struktural' ? 'selected' : '' }}>
                                                Diklat Struktural</option>
                                            <option value="Diklat Fungsional"
                                                {{ $user->jenis_diklat == 'Diklat Fungsional' ? 'selected' : '' }}>
                                                Diklat Fungsional</option>
                                            <option value="Diklat Teknik"
                                                {{ $user->jenis_diklat == 'Diklat Teknik' ? 'selected' : '' }}>Diklat
                                                Teknik</option>
                                            <option value="Pelatihan Manajerial"
                                                {{ $user->jenis_diklat == 'Pelatihan Manajerial' ? 'selected' : '' }}>
                                                Pelatihan Manajerial</option>
                                            <option value="Pelatihan Sosial Kultural"
                                                {{ $user->jenis_diklat == 'Pelatihan Sosial Kultural' ? 'selected' : '' }}>
                                                Pelatihan Sosial Kultural</option>
                                            <option value="Sosialisasi"
                                                {{ $user->jenis_diklat == 'Sosialisasi' ? 'selected' : '' }}>
                                                Sosialisasi</option>
                                            <option value="Bimbingan Teknis Seminar"
                                                {{ $user->jenis_diklat == 'Bimbingan Teknis Seminar' ? 'selected' : '' }}>
                                                Bimbingan Teknis Seminar</option>
                                            <option value="Magang"
                                                {{ $user->jenis_diklat == 'Magang' ? 'selected' : '' }}>Magang</option>
                                            <option value="Kursus"
                                                {{ $user->jenis_diklat == 'Kursus' ? 'selected' : '' }}>Kursus</option>
                                            <option value="Penataran "
                                                {{ $user->jenis_diklat == 'Penataran ' ? 'selected' : '' }}>Penataran
                                            </option>
                                            <option
                                                value="Pengembangan Kompetensi Dalam Bentuk Pelatihan Klasikal Lainnya
"
                                                {{ $user->jenis_diklat == 'Pengembangan Kompetensi Dalam Bentuk Pelatihan Klasikal Lainnya' ? 'selected' : '' }}>
                                                Pengembangan Kompetensi Dalam Bentuk Pelatihan Klasikal Lainnya
                                            </option>
                                            <option value="Coaching"
                                                {{ $user->jenis_diklat == 'Coaching' ? 'selected' : '' }}>Coaching
                                            </option>
                                            <option value="Mentoring"
                                                {{ $user->jenis_diklat == 'Mentoring' ? 'selected' : '' }}>Mentoring
                                            </option>
                                            <option value="E-Learning"
                                                {{ $user->jenis_diklat == 'E-Learning' ? 'selected' : '' }}>E-Learning
                                            </option>
                                            <option value="Pelatihan Jarak Jauh"
                                                {{ $user->jenis_diklat == 'Pelatihan Jarak Jauh' ? 'selected' : '' }}>
                                                Pelatihan Jarak Jauh</option>
                                            <option value="Detasering (Secondment)"
                                                {{ $user->jenis_diklat == 'Detasering (Secondment)' ? 'selected' : '' }}>
                                                Detasering (Secondment)</option>
                                            <option value="Pembelajaran Alam Terbuka (Outbond)"
                                                {{ $user->jenis_diklat == 'Pembelajaran Alam Terbuka (Outbond)' ? 'selected' : '' }}>
                                                Pembelajaran Alam
                                                Terbuka
                                                (Outbond)
                                            </option>
                                            <option value="Patok Banding (Benchmarking)"
                                                {{ $user->jenis_diklat == 'Patok Banding (Benchmarking)' ? 'selected' : '' }}>
                                                Patok Banding (Benchmarking)
                                            </option>
                                            <option value="Pertukaran Antara PNS Dengan Pegawai"
                                                {{ $user->jenis_diklat == 'Pertukaran Antara PNS Dengan Pegawai' ? 'selected' : '' }}>
                                                Pertukaran Antara PNS
                                                Dengan Pegawai
                                            </option>
                                            <option value="Swasta/Badan Usaha Milik Negara/Badan Usaha"
                                                {{ $user->jenis_diklat == 'Swasta/Badan Usaha Milik Negara/Badan Usaha' ? 'selected' : '' }}>
                                                Swasta/Badan
                                                Usaha
                                                Milik
                                                Negara/Badan Usaha</option>
                                            <option value="Milik Daerah"
                                                {{ $user->jenis_diklat == 'Milik Daerah' ? 'selected' : '' }}>Milik
                                                Daerah</option>
                                            <option value="Belajar Mandiri (Self Development)"
                                                {{ $user->jenis_diklat == 'Belajar Mandiri (Self Development)' ? 'selected' : '' }}>
                                                Belajar Mandiri (Self
                                                Development)
                                            </option>
                                            <option value="Komunitas Belajar (Community Of Practices)"
                                                {{ $user->jenis_diklat == 'Komunitas Belajar (Community Of Practices)' ? 'selected' : '' }}>
                                                Komunitas Belajar
                                                (Community Of
                                                Practices)</option>
                                            <option value="Bimbingan Di Tempat Kerja"
                                                {{ $user->jenis_diklat == 'Bimbingan Di Tempat Kerja' ? 'selected' : '' }}>
                                                Bimbingan Di Tempat Kerja</option>
                                            <option
                                                value="Pengembangan Kompetensi Dalam Bentuk Pelatihan Nonklasikal Lainnya"
                                                {{ $user->jenis_diklat == 'Pengembangan Kompetensi Dalam Bentuk Pelatihan Nonklasikal Lainnya' ? 'selected' : '' }}>
                                                Pengembangan Kompetensi Dalam Bentuk Pelatihan Nonklasikal Lainnya
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Nama
                                            Diklat</label>
                                        <input type="text" name="nama_diklat" value="{{ $user->nama_diklat }}"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Institusi
                                            Penyelenggara</label>
                                        <input type="text" name="institusi" value="{{ $user->institusi }}"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Tahun
                                            Diklat</label>
                                        <input type="text" name="tahun" value="{{ $user->tahun }}" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Tahun
                                            Selesai</label>
                                        <input type="text" name="tahun" value="{{ $user->tahun }}" required
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
                                        <input type="text" name="tgl_mulai" value="{{ $user->tgl_mulai }}"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Durasi
                                            (Jam)</label>
                                        <input type="text" name="durasi" value="{{ $user->durasi }}" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Rumpun
                                            Diklat</label>
                                        <select name="rumpun" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px] flex-shrink-0"
                                            id="cars">
                                            <option value="Tenaga Pendidikan Lainnya"
                                                {{ $user->rumpun == 'Tenaga Pendidikan Lainnya' ? 'selected' : '' }}>
                                                Tenaga Pendidikan Lainnya
                                            </option>
                                            <option value="Keagamaan dan Pendidikan"
                                                {{ $user->rumpun == 'Keagamaan dan Pendidikan' ? 'selected' : '' }}>
                                                Keagamaan dan Pendidikan</option>
                                            <option
                                                value="Pendidikan Tingkat Taman Kanak-Kanak, Dasar, Lanjutan, dan Sekolah Khusus
"
                                                {{ $user->rumpun == 'Pendidikan Tingkat Taman Kanak-Kanak, Dasar, Lanjutan, dan Sekolah Khusus' ? 'selected' : '' }}>
                                                Pendidikan Tingkat Taman Kanak-Kanak, Dasar, Lanjutan, dan Sekolah
                                                Khusus
                                            </option>
                                            <option value="Kebudayaan"
                                                {{ $user->rumpun == 'Kebudayaan' ? 'selected' : '' }}>Kebudayaan
                                            </option>
                                            <option value="Hukum dan Peradilan"
                                                {{ $user->rumpun == 'Hukum dan Peradilan' ? 'selected' : '' }}>Hukum
                                                dan Peradilan</option>
                                            <option value="Pendidikan Lainnya"
                                                {{ $user->rumpun == 'Pendidikan Lainnya' ? 'selected' : '' }}>
                                                Pendidikan Lainnya</option>
                                            <option value="Kekomputeran"
                                                {{ $user->rumpun == 'Kekomputeran' ? 'selected' : '' }}>Kekomputeran
                                            </option>
                                            <option value="Arsitek, Insinyur, dan Yang Berkaitan"
                                                {{ $user->rumpun == 'Arsitek, Insinyur, dan Yang Berkaitan' ? 'selected' : '' }}>
                                                Arsitek, Insinyur,
                                                dan
                                                Yang Berkaitan
                                            </option>
                                            <option value="Administrasi Kependudukan Pencatatan Sipil"
                                                {{ $user->rumpun == 'Administrasi Kependudukan Pencatatan Sipil' ? 'selected' : '' }}>
                                                Administrasi
                                                Kependudukan
                                                Pencatatan Sipil</option>
                                            <option value="Kearsipan"
                                                {{ $user->rumpun == 'Kearsipan' ? 'selected' : '' }}>Kearsipan</option>
                                            <option value="Pendidikan"
                                                {{ $user->rumpun == 'Pendidikan' ? 'selected' : '' }}>Pendidikan
                                            </option>
                                            <option value="Akuntan dan Anggaran"
                                                {{ $user->rumpun == 'Akuntan dan Anggaran' ? 'selected' : '' }}>Akuntan
                                                dan Anggaran</option>
                                            <option value="Penanaman Modal"
                                                {{ $user->rumpun == 'Penanaman Modal' ? 'selected' : '' }}>Penanaman
                                                Modal</option>
                                            <option value="Tenaga Kerja"
                                                {{ $user->rumpun == 'Tenaga Kerja' ? 'selected' : '' }}>Tenaga Kerja
                                            </option>
                                            <option value="Imigrasi, Pajak, dan Asisten Profesional Yang Berkaitan"
                                                {{ $user->rumpun == 'Imigrasi, Pajak, dan Asisten Profesional Yang Berkaitan' ? 'selected' : '' }}>
                                                Imigrasi, Pajak,
                                                dan Asisten Profesional Yang Berkaitan</option>
                                            <option value="Penerangan dan Seni Budaya"
                                                {{ $user->rumpun == 'Penerangan dan Seni Budaya' ? 'selected' : '' }}>
                                                Penerangan dan Seni Budaya
                                            </option>
                                            <option value="Ekonomi dan Keuangan"
                                                {{ $user->rumpun == 'Ekonomi dan Keuangan' ? 'selected' : '' }}>Ekonomi
                                                dan Keuangan</option>
                                            <option value="Matematika, Statistika, dan Yang Berkaitan"
                                                {{ $user->rumpun == 'Matematika, Statistika, dan Yang Berkaitan' ? 'selected' : '' }}>
                                                Matematika,
                                                Statistika, dan Yang
                                                Berkaitan</option>
                                            <option value="Sains dan Lingkungan"
                                                {{ $user->rumpun == 'Sains dan Lingkungan' ? 'selected' : '' }}>Sains
                                                dan Lingkungan</option>
                                            <option value="Manajemen"
                                                {{ $user->rumpun == 'Manajemen' ? 'selected' : '' }}>Manajemen</option>
                                            <option value="Pariwisata"
                                                {{ $user->rumpun == 'Pariwisata' ? 'selected' : '' }}>Pariwisata
                                            </option>
                                            <option value="Perindustrian"
                                                {{ $user->rumpun == 'Perindustrian' ? 'selected' : '' }}>Perindustrian
                                            </option>
                                            <option value="Kepemudaan dan Olahraga"
                                                {{ $user->rumpun == 'Kepemudaan dan Olahraga' ? 'selected' : '' }}>
                                                Kepemudaan dan Olahraga</option>
                                            <option value="Administrasi"
                                                {{ $user->rumpun == 'Administrasi' ? 'selected' : '' }}>Administrasi
                                            </option>
                                            <option value="Fisika, Kimia, dan Yang Berkaiatan"
                                                {{ $user->rumpun == 'Fisika, Kimia, dan Yang Berkaiatan' ? 'selected' : '' }}>
                                                Fisika, Kimia, dan Yang
                                                Berkaiatan
                                            </option>
                                            <option value="Statistik"
                                                {{ $user->rumpun == 'Statistik' ? 'selected' : '' }}>Statistik</option>
                                            <option value="Profesional Bidang Pendidikan Lainnya"
                                                {{ $user->rumpun == 'Profesional Bidang Pendidikan Lainnya' ? 'selected' : '' }}>
                                                Profesional Bidang
                                                Pendidikan Lainnya
                                            </option>
                                            <option value="Komunikasi dan Informatika"
                                                {{ $user->rumpun == 'Komunikasi dan Informatika' ? 'selected' : '' }}>
                                                Komunikasi dan Informatika
                                            </option>
                                            <option value="Energi dan Sumber Daya Mineral"
                                                {{ $user->rumpun == 'Energi dan Sumber Daya Mineral' ? 'selected' : '' }}>
                                                Energi dan Sumber Daya
                                                Mineral
                                            </option>
                                            <option value="Koperasi Usaha Kecil dan Menengah"
                                                {{ $user->rumpun == 'Koperasi Usaha Kecil dan Menengah' ? 'selected' : '' }}>
                                                Koperasi Usaha Kecil dan
                                                Menengah
                                            </option>
                                            <option value="Penelitian"
                                                {{ $user->rumpun == 'Penelitian' ? 'selected' : '' }}>Penelitian
                                            </option>
                                            <option value="Pekerjaan Umum dan Penataan Ruang"
                                                {{ $user->rumpun == 'Pekerjaan Umum dan Penataan Ruang' ? 'selected' : '' }}>
                                                Pekerjaan Umum dan
                                                Penataan
                                                Ruang
                                            </option>
                                            <option value="Pemberdayaan Perempuan dan Perlindungan Anak"
                                                {{ $user->rumpun == 'Pemberdayaan Perempuan dan Perlindungan Anak' ? 'selected' : '' }}>
                                                Pemberdayaan
                                                Perempuan dan
                                                Perlindungan Anak</option>
                                            <option value="Arsiparis, Pustakawan, dan Yang Berkaitan"
                                                {{ $user->rumpun == 'Arsiparis, Pustakawan, dan Yang Berkaitan' ? 'selected' : '' }}>
                                                Arsiparis,
                                                Pustakawan, dan Yang
                                                Berkaitan</option>
                                            <option value="Pengawas Kualitas dan Keamanan"
                                                {{ $user->rumpun == 'Pengawas Kualitas dan Keamanan' ? 'selected' : '' }}>
                                                Pengawas Kualitas dan
                                                Keamanan
                                            </option>
                                            <option value="Keagamaan"
                                                {{ $user->rumpun == 'Keagamaan' ? 'selected' : '' }}>Keagamaan</option>
                                            <option value="Kehutanan"
                                                {{ $user->rumpun == 'Kehutanan' ? 'selected' : '' }}>Kehutanan</option>
                                            <option value="Pangan" {{ $user->rumpun == 'Pangan' ? 'selected' : '' }}>
                                                Pangan</option>
                                            <option value="Penelitian dan Perekayasaan"
                                                {{ $user->rumpun == 'Penelitian dan Perekayasaan' ? 'selected' : '' }}>
                                                Penelitian dan Perekayasaan
                                            </option>
                                            <option value="kelautan dan Perikanan"
                                                {{ $user->rumpun == 'kelautan dan Perikanan' ? 'selected' : '' }}>
                                                kelautan dan Perikanan</option>
                                            <option value="Kesehatan"
                                                {{ $user->rumpun == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                                            <option
                                                value="Asisten Profesional Yang Berhubungan Dengan Keuangan dan Penjualan"
                                                {{ $user->rumpun == 'Asisten Profesional Yang Berhubungan Dengan Keuangan dan Penjualan' ? 'selected' : '' }}>
                                                Asisten
                                                Profesional Yang Berhubungan Dengan Keuangan dan Penjualan</option>
                                            <option value="Hak Cipta, Paten, dan Merek"
                                                {{ $user->rumpun == 'Hak Cipta, Paten, dan Merek' ? 'selected' : '' }}>
                                                Hak Cipta, Paten, dan Merek
                                            </option>
                                            <option value="Ilmu Sosial dan Yang Berkaitan"
                                                {{ $user->rumpun == 'Ilmu Sosial dan Yang Berkaitan' ? 'selected' : '' }}>
                                                Ilmu Sosial dan Yang
                                                Berkaitan
                                            </option>
                                            <option value="Hukum, Politik, dan Pemerintahan"
                                                {{ $user->rumpun == 'Hukum, Politik, dan Pemerintahan' ? 'selected' : '' }}>
                                                Hukum, Politik, dan
                                                Pemerintahan</option>
                                            <option
                                                value="Ketenteraman dan Ketertiban Umum Serta Perlindungan Masyarakat"
                                                {{ $user->rumpun == 'Ketenteraman dan Ketertiban Umum Serta Perlindungan Masyarakat' ? 'selected' : '' }}>
                                                Ketenteraman
                                                dan Ketertiban Umum Serta Perlindungan Masyarakat</option>
                                            <option value="Perdagangan"
                                                {{ $user->rumpun == 'Perdagangan' ? 'selected' : '' }}>Perdagangan
                                            </option>
                                            <option value="Pertahanan"
                                                {{ $user->rumpun == 'Pertahanan' ? 'selected' : '' }}>Pertahanan
                                            </option>
                                            <option value="Pemberdayaan Masyarakat dan Desa"
                                                {{ $user->rumpun == 'Pemberdayaan Masyarakat dan Desa' ? 'selected' : '' }}>
                                                Pemberdayaan Masyarakat
                                                dan
                                                Desa</option>
                                            <option value="Detektif dan Penyidik"
                                                {{ $user->rumpun == 'Detektif dan Penyidik' ? 'selected' : '' }}>
                                                Detektif dan Penyidik</option>
                                            <option value="Kesehatan dan/atau Ilmu Sosial"
                                                {{ $user->rumpun == 'Kesehatan dan/atau Ilmu Sosial' ? 'selected' : '' }}>
                                                Kesehatan dan/atau Ilmu
                                                Sosial
                                            </option>
                                            <option value="Perpustakaan"
                                                {{ $user->rumpun == 'Perpustakaan' ? 'selected' : '' }}>Perpustakaan
                                            </option>
                                            <option value="Pertanian"
                                                {{ $user->rumpun == 'Pertanian' ? 'selected' : '' }}>Pertanian</option>
                                            <option value="SDM" {{ $user->rumpun == 'SDM' ? 'selected' : '' }}>SDM
                                            </option>
                                            <option value="Perhubungan"
                                                {{ $user->rumpun == 'Perhubungan' ? 'selected' : '' }}>Perhubungan
                                            </option>
                                            <option value="Pengendalian Penduduk dan Keluarga Berencana"
                                                {{ $user->rumpun == 'Pengendalian Penduduk dan Keluarga Berencana' ? 'selected' : '' }}>
                                                Pengendalian
                                                Penduduk dan
                                                Keluarga Berencana</option>
                                            <option value="Persandian"
                                                {{ $user->rumpun == 'Persandian' ? 'selected' : '' }}>Persandian
                                            </option>
                                            <option value="Perumahan Rakyat dan Kawasan Pemukiman"
                                                {{ $user->rumpun == 'Perumahan Rakyat dan Kawasan Pemukiman' ? 'selected' : '' }}>
                                                Perumahan Rakyat dan
                                                Kawasan
                                                Pemukiman</option>
                                            <option value="Ilmu Hayat"
                                                {{ $user->rumpun == 'Ilmu Hayat' ? 'selected' : '' }}>Ilmu Hayat
                                            </option>
                                            <option value="Transmigrasi"
                                                {{ $user->rumpun == 'Transmigrasi' ? 'selected' : '' }}>Transmigrasi
                                            </option>
                                            <option value="Sosial" {{ $user->rumpun == 'Sosial' ? 'selected' : '' }}>
                                                Sosial</option>
                                            <option value="Lingkungan Hidup"
                                                {{ $user->rumpun == 'Lingkungan Hidup' ? 'selected' : '' }}>Lingkungan
                                                Hidup</option>
                                            <option value="Politik dan Hubungan Luar Negeri"
                                                {{ $user->rumpun == 'Politik dan Hubungan Luar Negeri' ? 'selected' : '' }}>
                                                Politik dan Hubungan Luar
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
                                        <input type="text" name="no_sertif" value="{{ $user->no_sertif }}"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
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
                            @foreach ($user->files as $file)
                                <tr
                                    class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                    <td class="px-3 py-3">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-3 py-3">
                                        {{ $file->file_name ? $file->file_name : '-' }}
                                    </td>
                                    <td class="px-3 py-3">
                                        <div class="flex items-center space-x-3">
                                            <a href="{{ asset('storage/' . $file->file_path) }}"
                                                download="{{ $file->file_name }}" title="Download">
                                                <img src="{{ asset('Assets/download.svg') }}" alt="Download">
                                            </a>
                                            <button title="Lihat"
                                                onclick="event.preventDefault(); window.open('{{ asset('storage/' . $file->file_path) ? asset('storage/' . $file->file_path) : '#' }}', '_blank');">
                                                <img src="{{ asset('Assets/eye.svg') }}" alt="Lihat">
                                            </button>
                                            <button title="Hapus" onclick="event.preventDefault();"
                                                data-modal-target="confirm-delete-{{ $file->id }}"
                                                data-modal-toggle="confirm-delete-{{ $file->id }}">
                                                <img src="{{ asset('Assets/hapus.svg') }}" alt="Delete">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                {{-- POP UP HAPUS --}}
                                <div id="confirm-delete-{{ $file->id }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div data-modal-hide="confirm-delete-{{ $file->id }}"
                                        class="relative p-4 w-full flex justify-center items-center h-full">
                                        <div
                                            class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                                            <div
                                                class="flex items-center justify-between p-4 md:p-3 border-b rounded-t">
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                    data-modal-hide="confirm-delete-{{ $file->id }}">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                                                <div class="wrap flex items-center gap-8 flex-col">
                                                    <div class="head font-medium text-[28px]">Apakah Anda yakin
                                                        ingin menghapus file ini?</div>
                                                    <div class="icon">
                                                        <img src="../../Assets/sampah.svg" alt="">
                                                    </div>
                                                    <form action="{{ route('file.diklat.delete', $file->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" data-modal-target="hapus"
                                                            data-modal-toggle="hapus"
                                                            class="head p-1 text-white px-5 rounded bg-[#2F5B6B] link">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- POP UP HAPUS --}}
                            @endforeach
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
