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
                        class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
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
                <form action="{{ route('user.skpUpdate', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="hea flex justify-between">
                        <div class="text-[#2F5B6B] font-semibold text-[22px]">Data SKP</div>
                        <button type="submit" data-modal-target="tambah" data-modal-toggle="tambah"
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
                                        <label For="" class="text-black font-medium text-[14px]">Tahun</label>
                                        <input type="text" value="{{ $user->tahun }}" name="tahun" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Nilai
                                            SKP</label>
                                        <input type="text" value="{{ $user->nilai }}" name="nilai" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Orientasi
                                            Pelayanan</label>
                                        <input type="text" value="{{ $user->ot }}" name="ot" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For=""
                                            class="text-black font-medium text-[14px]">Integritas</label>
                                        <input type="text" value="{{ $user->integritas }}" name="integritas"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For=""
                                            class="text-black font-medium text-[14px]">Komitmen</label>
                                        <input type="text" value="{{ $user->komitmen }}" name="komitmen" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For=""
                                            class="text-black font-medium text-[14px]">Disiplin</label>
                                        <input type="text" value="{{ $user->disiplin }}" name="disiplin" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Kerja
                                            Sama</label>
                                        <input type="text" value="{{ $user->kerja_sama }}" name="kerja_sama"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For=""
                                            class="text-black font-medium text-[14px]">Kepemimpinan</label>
                                        <input type="text" value="{{ $user->kepemimpinan }}" name="kepemimpinan"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Status
                                            Atasan</label>
                                        <input type="text" value="{{ $user->status_atasan }}"
                                            name="status_atasan" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Status
                                            Penilai</label>
                                        <input type="text" value="{{ $user->status_penilai }}"
                                            name="status_penilai" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Nama
                                            Atasan</label>
                                        <input type="text" value="{{ $user->nama_atasan }}" name="nama_atasan"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Nama
                                            Penilai</label>
                                        <input type="text" value="{{ $user->nama_penilai }}" name="nama_penilai"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Jenis
                                            Jabatan</label>
                                        <input type="text" value="{{ $user->jenis_jabatan }}"
                                            name="jenis_jabatan" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                            </div>
                            {{-- KANAN --}}
                            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For=""
                                            class="text-black font-medium text-[14px]">Jumlah</label>
                                        <input type="text" value="{{ $user->jumlah }}" name="jumlah" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Nilai
                                            Perilaku
                                            Kerja</label>
                                        <input type="text" value="{{ $user->perilaku }}" name="perilaku" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Nilai
                                            Prestasi
                                            Kerja</label>
                                        <input type="text" value="{{ $user->prestasi }}" name="prestasi" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Atasan Non
                                            PNS
                                            ID</label>
                                        <input type="text" value="{{ $user->atasan_nonpns }}"
                                            name="atasan_nonpns" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Jabatan
                                            Atasan</label>
                                        <input type="text" value="{{ $user->atasan_jabatan }}"
                                            name="atasan_jabatan" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Jabatan
                                            Penilai</label>
                                        <input type="text" value="{{ $user->penilai_jabatan }}"
                                            name="penilai_jabatan" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Golongan
                                            Penilai
                                            TMT</label>
                                        <input type="text" value="{{ $user->golongan_penilai_tmt }}"
                                            name="golongan_penilai_tmt" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Golongan
                                            Atasan
                                            TMT</label>
                                        <input type="text" value="{{ $user->golongan_atasan_tmt }}"
                                            name="golongan_atasan_tmt" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Golongan
                                            Penilai</label>
                                        <input type="text" value="{{ $user->golongan_penilai }}"
                                            name="golongan_penilai" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Golongan
                                            Atasan</label>
                                        <input type="text" value="{{ $user->golongan_atasan }}"
                                            name="golongan_atasan" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">NIP/NIK
                                            Penilai</label>
                                        <input type="text" value="{{ $user->nip_penilai }}" name="nip_penilai"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">NIP/NIK
                                            Atasan</label>
                                        <input type="text" value="{{ $user->nip_atasan }}" name="nip_atasan"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
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
                                                    <form action="{{ route('file.skp.delete', $file->id) }}"
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
                                <button data-modal-hide="simpan"
                                    class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
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
