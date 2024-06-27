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
    <style>
        .tab-active {
            color: #4F8EA5 !important;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <x-sidebar-admin>
        <div class="hea flex justify-between">
            <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Profil Pegawai</div>
            <div class=" flex items-center">
                <a href="/admin/pegawai" class="p-1 text-white px-5 rounded bg-[#2F5B6B]">Kembali</a>
            </div>
        </div>
        {{-- as --}}
        <div class="wrap flex flex-col md:flex-row gap-3 md:gap-8">
            <div class="left w-full md:w-[12%] ">
                <div class="avatar">
                    <img class="w-[100%]" src="{{ asset('storage/' . $user->foto) }}" alt="">
                </div>
                <div class="wrap-menu mt-5 flex flex-col gap-3">
                    <button data-modal-target="Data Diri" data-modal-toggle="Data Diri"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Data Diri
                    </button>
                    <button data-modal-target="datapendidikan" data-modal-toggle="datapendidikan"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Pendidikan
                    </button>
                    <button data-modal-target="keluarga" data-modal-toggle="keluarga"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Keluarga
                    </button>
                    <button data-modal-target="dataskp" data-modal-toggle="dataskp"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        SKP
                    </button>
                    <button data-modal-target="datapenghargaan" data-modal-toggle="datapenghargaan"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Penghargaan
                    </button>
                    <button data-modal-target="datakinerja" data-modal-toggle="datakinerja"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Laporan Kinerja
                    </button>
                    <button data-modal-target="datacpns" data-modal-toggle="datacpns"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        CPNS/PNS
                    </button>
                    <button data-modal-target="datadiklat" data-modal-toggle="datadiklat"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Diklat/Kursus
                    </button>
                    <button data-modal-target="datapmk" data-modal-toggle="datapmk"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md text-[14px]">
                        Peninjauan Masa Kerja
                    </button>
                    <button data-modal-target="datagolongan" data-modal-toggle="datagolongan"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Golongan
                    </button>
                    <button data-modal-target="datajabatan" data-modal-toggle="datajabatan"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Jabatan
                        </a>
                </div>
            </div>
            <div class="right w-full md:w-[88%]">
                <div class="wrap mt-3">
                    @if (session('error'))
                        <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3 my-4"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <span class="block sm:inline">
                                {{ session('error') }}
                            </span>
                        </div>
                    @endif

                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                            <div class="wrap">
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For=""
                                        class="text-black font-medium w-[200px] flex-shrink-0">Nama</label>
                                    <div title="Monica Adella" class="is">
                                        {{ $user->name }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">NIP</label>
                                    <div title="120563458" class="is">
                                        {{ $user->nip }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">NIK </label>
                                    <div title="120563458" class="is">
                                        {{ $user->nik }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No Kartu
                                        Keluarga</label>
                                    <div title="1879562345789" class="is">
                                        {{ $user->no_kk }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Nomor Telepon</label>
                                    <div title="08123456789" class="is">
                                        {{ $user->no_tel }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px] ">Status</label>
                                    <div title="Aktif" class="is">
                                        {{ $user->status }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For=""
                                        class="text-black font-medium w-[200px] flex-shrink-0 ">Alamat</label>
                                    <div title="Gajah Mada, Kota Baru, Tanjung Tarang Timur" class="is">
                                        {{ $user->alamat }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Agama</label>
                                    <div title="Islam" class="is">
                                        {{ $user->agama }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Satuan
                                        Kerja</label>
                                    <div title="Pegawai" class="is">
                                        {{ $user->satuan_kerja }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Kelas
                                        Jabatan(Angka)</label>
                                    <div title="2" class="is">
                                        {{ $user->kelas_jabatan }}</div>
                                </div>
                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                            </div>
                            <div class="wrap">
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Email</label>
                                    <div title="monica123@gmail.com" class="is">
                                        {{ $user->email }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Tanggal
                                        Lahir</label>
                                    <div class="is">
                                        {{ $user->tgl_lahir }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Tempat Lahir
                                    </label>
                                    <div title="Bandar Lampung" class="is">
                                        {{ $user->tempat_lahir }}</div>
                                </div>
                            </div>
                            <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>

                        </div>
                        {{-- KANAN --}}
                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                            <div class="wrap">
                            </div>
                            <div class="wrap">
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No NPWP </label>
                                    <div title="1879562345789" class="is">
                                        {{ $user->no_npwp }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Tanggal NPWP
                                    </label>
                                    <div class="is">
                                        {{ $user->tgl_npwp }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Lokasi Kerja
                                    </label>
                                    <div title="Lampung" class="is">
                                        {{ $user->lokasi_kerja }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No BPJS Kesehatan
                                    </label>
                                    <div title="2356889" class="is">
                                        {{ $user->no_bpjs }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No Akta Kelahitan
                                    </label>
                                    <div title="235689784512" class="is">
                                        {{ $user->no_akta }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No Karis/Kasus
                                    </label>
                                    <div title="12345678902" class="is">
                                        {{ $user->no_karis }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No TASPEN </label>
                                    <div title="12345678902" class="is">
                                        {{ $user->no_taspen }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Tanggal
                                        TASPEN</label>
                                    <div class="is">
                                        {{ $user->tgl_taspen }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No TAPERA </label>
                                    <div title="12345678902" class="is">
                                        {{ $user->no_tapera }}</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No KPPN/Kantor
                                        Pembayaran Gaji</label>
                                    <div title="5623" class="is">
                                        {{ $user->kppn }}</div>
                                </div>
                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- MODAL --}}
            {{-- DATA DIRI --}}
            <div id="Data Diri" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Diri
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="Data Diri">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                    <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                                        <tr>
                                            <th scope="col" class="px-3 py-3">
                                                No
                                            </th>
                                            <th scope="col" class="px-3 py-3">
                                                Nama
                                            </th>
                                            <th scope="col" class="px-3 py-3">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($diri as $u)
                                            @foreach ($u->files as $file)
                                                <tr
                                                    class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                    <td class="px-3 py-3">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="px-3 py-3">
                                                        {{ $u->nama }}
                                                    </td>
                                                    <td class="px-3 py-3">
                                                        <button title="Download" class="mr-3">
                                                            <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                download="{{ $file->file_name }}" title="Download">
                                                                <img src="{{ asset('Assets/download.svg') }}"
                                                                    alt="">
                                                            </a>
                                                        </button>
                                                        <button title="Lihat">
                                                            <a href="{{ asset('storage/' . $file->file_path) ? asset('storage/' . $file->file_path) : '#' }}"
                                                                target="_blank">
                                                                <img src="{{ asset('Assets/eye.svg') }}"
                                                                    alt="">
                                                            </a>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- DATA PENDIDIKAN --}}
            <div id="datapendidikan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Pendidikan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="datapendidikan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        @foreach ($pendidikan as $u)
                                            <div
                                                class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                                <div class="wrap">
                                                    <div class="text-[18px] font-medium">{{ $u->tingkat_pendidikan }}
                                                    </div>
                                                    <div class="text-[16px]">- {{ $u->pendidikan }}</div>
                                                </div>
                                                <button data-modal-target="detailpendidikan-{{ $loop->iteration }}"
                                                    data-modal-toggle="detailpendidikan">
                                                    <img src="../../../Assets/book.svg" alt="">
                                                </button>
                                                <a href="{{ route('user.pendidikanShow', $u->id) }}" class="link">
                                                    <img src="../../../Assets/book.svg" alt="">
                                                </a>
                                                {{ $u->tgl_lulus }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA PENDIDIKAN --}}

            {{-- DETAIL PENDIDIKAN --}}
            <div id="detailpendidikan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Pendidikan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailpendidikan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Pendidikan</label>
                                            <div title="Sarjana" class="isi">
                                                Sarjana</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tingkat
                                                Pendidikan</label>
                                            <div title="S1-Teknik Informatika" class="isi">
                                                S1-Teknik Informatika</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tahun
                                                Lulus</label>
                                            <div title="1989" class="isi">
                                                1989</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal
                                                Kelulusan</label>
                                            <div class="isi">
                                                {{ $pendidikan[0]->tgl_lulus }}</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Gelar
                                                Depan</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Gelar
                                                Belakang</label>
                                            <div title="S.Kom" class="isi">
                                                S.Kom</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nomor
                                                Ijazah</label>
                                            <div title="2342256897845" class="isi">
                                                2342256897845</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nama
                                                Universitas</label>
                                            <div title="Instititut Teknologi Sumatera" class="isi">
                                                Instititut Teknologi Sumatera</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL PENDIDIKAN --}}

            {{-- DATA SKP --}}
            <div id="dataskp" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data SKP
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="dataskp">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Nilai SKP : 100</div>
                                                <div class="text-[16px]">Tahun : 2010</div>
                                            </div>
                                            <button data-modal-target="detailskp" data-modal-toggle="detailskp">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Nilai SKP : 100</div>
                                                <div class="text-[16px]">Tahun : 2010</div>
                                            </div>
                                            <button data-modal-target="detailskp" data-modal-toggle="detailskp">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA SKP --}}

            {{-- DETAIL SKP --}}
            <div id="detailskp" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data SKP
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailskp">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tahun</label>
                                            <div title="2021" class="isi">
                                                2021</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nilai
                                                SKP</label>
                                            <div title="85.45" class="isi">
                                                85.45</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Orientasi
                                                Pelayanan</label>
                                            <div title="80" class="isi">
                                                80</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Integritas</label>
                                            <div title="80" class="isi">
                                                80</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Komitmen</label>
                                            <div title="85" class="isi">
                                                85</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Disiplin</label>
                                            <div title="85" class="isi">
                                                85</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Kerja
                                                Sama</label>
                                            <div title="85" class="isi">
                                                85</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Kepemimpinan</label>
                                            <div title="80" class="isi">
                                                80</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Status
                                                Atasan</label>
                                            <div title="PNS" class="isi">
                                                PNS</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Status
                                                Penilai</label>
                                            <div title="PNS" class="isi">
                                                PNS</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nama
                                                Atasan</label>
                                            <div title="Ridwan" class="isi">
                                                Ridwan</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nama
                                                Penilai</label>
                                            <div title="Emidianti" class="isi">
                                                Emidianti</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Jenis
                                                Jabatan</label>
                                            <div title="2" class="isi">
                                                2</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Jumlah</label>
                                            <div title="505" class="isi">
                                                505</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nilai
                                                Perilaku Kerja</label>
                                            <div title="35" class="isi">
                                                35</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nilai
                                                Prestasi Kerja</label>
                                            <div title="86" class="isi">
                                                86</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Atasan
                                                Non PNS ID</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Jabatan
                                                Atasan</label>
                                            <div title="KEPALA BADAN PEMBANGUNAN SISTEM INFORMASI" class="isi">
                                                KEPALA BADAN PEMBANGUNAN.... </div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Jabatan
                                                Penilai</label>
                                            <div title="KEPALA BIDANG PERENCANAAN MAKROMIA" class="isi">
                                                KEPALA BIDANG PERENCANAAN MAKRO.... </div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Golongan
                                                Penilai TMT</label>
                                            <div class="isi">
                                                12/03/2014</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Golongan
                                                Atasan TMT</label>
                                            <div class="isi">
                                                06/03/2023</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Golongan
                                                Penilai</label>
                                            <div title="40" class="isi">
                                                40</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Golongan
                                                Atasan</label>
                                            <div title="50" class="isi">
                                                50</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">NIP/NIK
                                                Penilai</label>
                                            <div title="12345678945" class="isi">
                                                12345678945</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">NIP/NIK
                                                Atasan</label>
                                            <div title="1879456231245" class="isi">
                                                1879456231245</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>

                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL SKP --}}

            {{-- DATA PENGHARGAAN --}}
            <div id="datapenghargaan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Penghargaan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="datapenghargaan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Olimpiade</div>
                                                <div class="text-[16px]">Tahun : 2010</div>
                                            </div>
                                            <button data-modal-target="detailpenghargaan"
                                                data-modal-toggle="detailpenghargaan">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Wira Karya</div>
                                                <div class="text-[16px]">Tahun : 2010</div>
                                            </div>
                                            <button data-modal-target="detailpenghargaan"
                                                data-modal-toggle="detailpenghargaan">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA PENGHARGAAN --}}

            {{-- DETAIL PENGHARGAAN --}}
            <div id="detailpenghargaan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Penghargaan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailpenghargaan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[400px] flex-shrink-0">Jenis
                                                Penghargaan</label>
                                            <div title="Olimpiade" class="isi">
                                                Olimpiade</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[400px] flex-shrink-0">Tahun
                                                Perolehan</label>
                                            <div title="2012" class="isi">
                                                2012</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[400px] flex-shrink-0">Nomor Surat
                                                Keputusan</label>
                                            <div title="65/TK/TAHUN2012" class="isi">
                                                65/TK/TAHUN2012</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[400px] flex-shrink-0">Tanggal Surat
                                                Keputusan</label>
                                            <div class="isi">
                                                12/02/2012</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL PENGHARGAAN --}}

            {{-- DATA KINERJA --}}
            <div id="datakinerja" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Laporan Kinerja
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="datakinerja">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">2020</div>
                                            </div>
                                            <button data-modal-target="detailkinerja"
                                                data-modal-toggle="detailkinerja">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">2021</div>
                                            </div>
                                            <button data-modal-target="detailkinerja"
                                                data-modal-toggle="detailkinerja">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA KINERJA --}}

            {{-- DETAIL KINERJA --}}
            <div id="detailkinerja" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Laporan Kinerja
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailkinerja">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tahun</label>
                                            <div title="20" class="isi ">
                                                2020</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">NIP</label>
                                            <div title="1856457213" class="isi ">
                                                1856457213</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nama</label>
                                            <div title="Monica Adella" class="isi ">
                                                Monica Adella</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Unit
                                                Kerja</label>
                                            <div title="-" class="isi ">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal</label>
                                            <div class="isi ">
                                                02/03/1989</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Jabatan</label>
                                            <div title="Pegawai" class="isi ">
                                                Pegawai</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Hasil
                                                Kinerja</label>
                                            <div title="Sesuai Ekspektasi" class="isi ">
                                                Sesuai Ekspektasi</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Perilaku
                                                Kinerja</label>
                                            <div title="Diatas Ekspektasi" class="isi ">
                                                Diatas Ekspektasi</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nama
                                                Instansi</label>
                                            <div title="Pemerintah Provinsi Lampung" class="isi ">
                                                Pemerintah Provinsi Lampung</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Kuadran
                                                Kerja</label>
                                            <div title="Baik" class="isi ">
                                                Baik</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nama Penilai
                                                Jabatan</label>
                                            <div title="Plt. Kepala Dinas Kesehatan Provinsi Lampung" class="isi ">
                                                Plt. Kepala Dinas Kesehatan Provinsi Lampung</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nama Penilai
                                            </label>
                                            <div title="Ridwan" class="isi ">
                                                Ridwan</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL KINERJA --}}

            {{-- DATA CPNS --}}
            <div id="datacpns" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data CPNS/PNS
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="datacpns">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Monica Adella Aisyah Renaldi
                                                </div>
                                                <div class="text-[16px]">Pemerintahan Provinsi Lampung</div>
                                                <div class="text-[16px]">1234567899654</div>
                                            </div>
                                            <button data-modal-target="detailcpns" data-modal-toggle="detailcpns">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA CPNS --}}


            {{-- DETAIL CPNS --}}
            <div id="detailcpns" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data CPNS/PNS
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailcpns">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Status
                                                Pegawai</label>
                                            <div title="P" class="isi">
                                                P</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nomor SK
                                                CPNS</label>
                                            <div title="813/579/IV.04/KPTS/MSJ/2015" class="isi">
                                                813/579/IV.04/KPTS/MSJ/2015</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nomor SK
                                                PNS</label>
                                            <div title="821/1673/IV.04/KPTS/MSJ/2016/00007866/DIKLAT"
                                                class="isi">
                                                821/1673/IV.04/KPTS/MSJ/2016/00007866/DIKLAT</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nomor SK
                                                STTPL</label>
                                            <div title="PRAJABATAN III/18/1801/LAN/2015" class="isi">
                                                PRAJABATAN III/18/1801/LAN/2015</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Karpeg</label>
                                            <div title="B 05005563" class="isi">
                                                B 05005563</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nomor Surat
                                                Dokter</label>
                                            <div title="441/388/1.3/VII/2015" class="isi">
                                                441/388/1.3/VII/2015</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nomor
                                                SPMT</label>
                                            <div title="813/579/IV.04/KPTS/MSJ/2014" class="isi">
                                                813/579/IV.04/KPTS/MSJ/2014</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nomor Pertek
                                                C2TH</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mT-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal Surat
                                                Keputusan CPNS</label>
                                            <div class="isi">
                                                05/05/2015</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal Surat
                                                Keputusan PNS</label>
                                            <div class="isi">
                                                17/12/2016</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal
                                                STTPL</label>
                                            <div class="isi">
                                                17/12/2018</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal TMT
                                                CPNS</label>
                                            <div class="isi">
                                                18/02/2019</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal TMT
                                                PNS</label>
                                            <div class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal
                                                SPMT</label>
                                            <div class="isi">
                                                06/03/2023</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal Pertek
                                                C2TH</label>
                                            <div class="isi">
                                                02/03/2023</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL CPNS --}}

            {{-- DATA DIKLAT --}}
            <div id="datadiklat" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Diklat/Kursus
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="datadiklat">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Diklat Struktur</div>
                                                <div class="text-[16px]">-Sepada</div>
                                            </div>
                                            <button data-modal-target="detaildiklat"
                                                data-modal-toggle="detaildiklat">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Diklat Struktur</div>
                                                <div class="text-[16px]">-Sepada</div>
                                            </div>
                                            <button data-modal-target="detaildiklat"
                                                data-modal-toggle="detaildiklat">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA DIKLAT --}}

            {{-- DETAIL DIKLAT --}}
            <div id="detaildiklat" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Diklat/Kursus
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detaildiklat">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Jenis
                                                Diklat</label>
                                            <div title="Diklat Struktural" class="isi">
                                                Diklat Struktural</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nama
                                                Diklat</label>
                                            <div title="SEPALA/ADUM/DIKLAT PIM TK.II" class="isi">
                                                SEPALA/ADUM/DIKLAT PIM TK.II</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Institusi
                                                Penyelenggara</label>
                                            <div title="PEMPROV LAMPUNG" class="isi">
                                                PEMPROV LAMPUNG</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tahun
                                                Diklat</label>
                                            <div title="2012" class="isi">
                                                2012</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tahun
                                                Selesai</label>
                                            <div class="isi">
                                                12/02/2012</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tanggal
                                                Mulai</label>
                                            <div class="isi">
                                                12/02/2012</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Durasi
                                                (Jam)</label>
                                            <div title="315" class="isi">
                                                315</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Rumpun
                                                Diklat</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Nomor
                                                Sertifikat</label>
                                            <div title="549/I.09/DIKLATPIM TK.IV/LAN/2012" class="isi">
                                                549/I.09/DIKLATPIM TK.IV/LAN/2012</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL DIKLAT --}}

            {{-- DATA PMK --}}
            <div id="datapmk" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Peninjauan Masa Kerja
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="datapmk">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Negeri</div>
                                                <div class="text-[16px]">-Dinas Kesehatan Kabupaten Mesuji</div>
                                            </div>
                                            <button data-modal-target="detailpmk" data-modal-toggle="detailpmk">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Negeri</div>
                                                <div class="text-[16px]">-Dinas Kesehatan Kabupaten Mesuji</div>
                                            </div>
                                            <button data-modal-target="detailpmk" data-modal-toggle="detailpmk">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA PMK --}}

            {{-- DETAIL PMK --}}
            <div id="detailpmk" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Peninjauan Masa Kerja
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailpmk">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Jenis
                                                Peninjauan Masa Kerja</label>
                                            <div class="isi">
                                                Negeri</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Instansi/Perusahaan</label>
                                            <div title="Dinas Kesehatan Kabupaten" class="isi">
                                                Dinas Kesehatan Kabupaten</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Tanggal
                                                Awal</label>
                                            <div class="isi">
                                                23/03/2014</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Tanggal
                                                Akhir</label>
                                            <div class="isi">
                                                02/03/208</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Masa Kerja
                                                (Bulan)</label>
                                            <div title="0" class="isi">
                                                0</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Nomor Surat
                                                Keputusan (SK)</label>
                                            <div title="823.3/88/VI.04/2024" class="isi">
                                                823.3/88/VI.04/2024</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Tanggal Surat
                                                Keputusan (SK)</label>
                                            <div class="isi">
                                                03/02/2022</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Nomor Pertek
                                                BKN</label>
                                            <div title="FG-256897845" class="isi">
                                                FG-256897845</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Tanggal Pertek
                                                BKN</label>
                                            <div class="isi">
                                                06/03/2023</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[250px] flex-shrink-0">Masa Kerja
                                                (Tahun)</label>
                                            <div title="0" class="isi">
                                                0</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL PMK --}}

            {{-- DATA GOLONGAN --}}
            <div id="datagolongan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Golongan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="datagolongan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div title="Penata..." class="text-[16px]">Penata...</div>
                                                <div class="text-[16px]">IIB</div>
                                            </div>
                                            <button data-modal-target="detailgolongan"
                                                data-modal-toggle="detailgolongan">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div title="Penata..." class="text-[16px]">Penata...</div>
                                                <div class="text-[16px]">IVC</div>
                                            </div>
                                            <button data-modal-target="detailgolongan"
                                                data-modal-toggle="detailgolongan">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div title="Penata..." class="text-[16px]">Penata...</div>
                                                <div class="text-[16px]">IA</div>
                                            </div>
                                            <button data-modal-target="detailgolongan"
                                                data-modal-toggle="detailgolongan">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA GOLONGAN --}}

            {{-- DETAIL GOLONGAN --}}
            <div id="detail golongan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Golongan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detail golongan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">Golongan</label>
                                            <div title="II/B" class="isi">
                                                II/B</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">Jenis Kenaikan
                                                Pangkat</label>
                                            <div title="Reguler" class="isi">
                                                Reguler</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">Masa Kerja
                                                Golongan (Tahun)</label>
                                            <div title="9" class="isi">
                                                9</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">Masa Kerja
                                                Golongan (Bulan)</label>
                                            <div title="1" class="isi">
                                                1</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">TMT
                                                Golongan</label>
                                            <div class="isi">
                                                02/03/2023</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">Nomor Surat
                                                Keputusan (SK)</label>
                                            <div title="823.3/88/VI.04/2024" class="isi">
                                                823.3/88/VI.04/2024</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">Tanggal Surat
                                                Keputusan (SK)</label>
                                            <div class="isi">
                                                03/02/2022</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">Nomor Pertek
                                                BKN</label>
                                            <div title="FG-256897845" class="isi">
                                                FG-256897845</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[260px] flex-shrink-0">Tanggal Pertek
                                                BKN</label>
                                            <div class="isi">
                                                06/03/2023</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL GOLONGAN --}}

            {{-- DATA JABATAN --}}
            <div id="datajabatan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Jabatan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="datajabatan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                <div class="w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap-content">
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Analisis</div>
                                                <div class="text-[16px]">-2020</div>
                                            </div>
                                            <button data-modal-target="detailjabatan"
                                                data-modal-toggle="detailjabatan">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                        <div
                                            class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                            <div class="wrap">
                                                <div class="text-[18px] font-medium">Kepala</div>
                                                <div class="text-[16px]">-S1</div>
                                            </div>
                                            <button data-modal-target="detailjabatan"
                                                data-modal-toggle="detailjabatan">
                                                <img src="../../../Assets/book.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA JABATAN --}}


            {{-- DETAIL JABATAN --}}
            <div id="detailjabatan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Jabatan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailjabatan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Jenis
                                                Jabatan</label>
                                            <div title="Jabatan Pelaksana" class="isi">
                                                Jabatan Pelaksana</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Jenis
                                                Mutasi</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Jenis
                                                Penugasan</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal
                                                SK</label>
                                            <div class="isi">
                                                02/03/1989</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal TMT
                                                Jabatan</label>
                                            <div class="isi">
                                                02/03/1989</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal TMT
                                                Pelantikan</label>
                                            <div class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                SK</label>
                                            <div title="8902/79/AT/VI.01" class="isi">
                                                8902/79/AT/VI.01</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Riwayat</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Instansi</label>
                                            <div title="Pemerintahan Kab.Mesuji" class="isi">
                                                Pemerintahan Kab.Mesuji</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Satuan
                                                Kerja</label>
                                            <div title="Pemerintahan Kab.Mesuji" class="isi">
                                                Pemerintahan Kab.Mesuji</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Satuan Kerja
                                                Induk</label>
                                            <div title="Mesuji" class="isi">
                                                Mesuji</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Unit
                                                Organisasi</label>
                                            <div title="RSUD KABUPATEN MESUJI" class="isi">
                                                RSUD KABUPATEN MESUJI</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nama
                                                Jabatan</label>
                                            <div title="Staff" class="isi">
                                                Staff</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL JABATAN --}}

            {{-- KELUARGA --}}
            <div id="keluarga" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Keluarga
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="keluarga">
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
                            <div class="tab flex gap-4">
                                <button id="tab1" class="font-medium text-[#B3B3B3]"
                                    onclick="showTab('tab1')">Orang Tua</button>
                                <button id="tab2" class="font-medium text-[#B3B3B3]"
                                    onclick="showTab('tab2')">Pasangan</button>
                                <button id="tab3" class="font-medium text-[#B3B3B3]"
                                    onclick="showTab('tab3')">Anak</button>
                            </div>
                            <div id="tabContent">
                                <div id="content1">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        <div class="w-full p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                                            <div class="w-full flex flex-col gap-3 md:gap-3">
                                                <div class="wrap-content">
                                                    <div
                                                        class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                                        <div class="wrap">
                                                            <div class="text-[18px] font-medium">Susaton</div>
                                                            <div class="text-[16px]">-Ayah</div>
                                                        </div>
                                                        <button data-modal-target="detailorangtua"
                                                            data-modal-toggle="detailorangtua">
                                                            <img src="../../../Assets/book.svg" alt="">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content2" class="hidden">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        <div class="w-full p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                                            <div class="w-full flex flex-col gap-3 md:gap-3">
                                                <div class="wrap-content">
                                                    <div
                                                        class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                                        <div class="wrap">
                                                            <div class="text-[18px] font-medium">Rafi Ramadhan</div>
                                                            <div class="text-[16px]">-Suami</div>
                                                        </div>
                                                        <button data-modal-target="detailpasangan"
                                                            data-modal-toggle="detailpasangan">
                                                            <img src="../../../Assets/book.svg" alt="">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content3" class="hidden">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        <div class="w-full p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                                            <div class="w-full flex flex-col gap-3 md:gap-3">
                                                <div class="wrap-content">
                                                    <div
                                                        class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                                                        <div class="wrap">
                                                            <div class="text-[18px] font-medium">Aisyah</div>
                                                            <div class="text-[16px]">-Perempuan</div>
                                                        </div>
                                                        <button data-modal-target="detailanak"
                                                            data-modal-toggle="detailanak">
                                                            <img src="../../../Assets/book.svg" alt="">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- KELUARGA --}}

            {{-- MODAL --}}
            {{-- DETAIL ORANGTUA --}}
            <div id="detailorangtua" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Orang Tua
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailorangtua">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Hidup</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Pekerjaan Orang Tua</label>
                                            <div title="PNS" class="isi">
                                                PNS</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nama</label>
                                            <div title="M.Yusuf" class="isi">
                                                M.Yusuf</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Pernikahan</label>
                                            <div title="Cerai Mati" class="isi">
                                                Cerai Mati</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Jenis
                                                Kelamin</label>
                                            <div title="Laki-laki" class="isi">
                                                Laki-laki</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Email</label>
                                            <div title="yusuf@gmail.com" class="isi">
                                                yusuf@gmail.com</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal
                                                Lahir</label>
                                            <div class="isi">
                                                13/02/1950</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal
                                                Meninggal</label>
                                            <div class="isi">
                                                12/02/2020</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Identitas</label>
                                            <div title="2356898784512" class="isi">
                                                2356898784512</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Agama</label>
                                            <div title="Islam" class="isi">
                                                Islam</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Telepon</label>
                                            <div title="08121235689" class="isi">
                                                08121235689</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Handphone</label>
                                            <div title="085645125623" class="isi">
                                                085645125623</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL ORANGTUA --}}

            {{-- DETAIL PASANGAN --}}
            <div id="detailpasangan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Pasangan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailpasangan">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Suami/Istri
                                                Ke-</label>
                                            <div title="1" class="isi">
                                                1</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Pekerjaan Orang Tua</label>
                                            <div title="PNS" class="isi">
                                                PNS</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nama</label>
                                            <div title="Rafi Ramadhan" class="isi">
                                                Rafi Ramadhan</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal
                                                Lahir</label>
                                            <div class="isi">
                                                03/12/1980</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Identitas</label>
                                            <div title="1879456231202" class="isi">
                                                1879456231202</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Jenis
                                                Kelamin</label>
                                            <div title="Laki-laki" class="isi">
                                                Laki-laki</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Alamat</label>
                                            <div title="Pahoman, Bandar Lampung" class="isi">
                                                Pahoman, Bandar Lampung</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Agama</label>
                                            <div title="Islam" class="isi">
                                                Islam</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Karsus/Karis</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Telepon</label>
                                            <div title="56897845" class="isi">
                                                56897845</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">

                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Hidup</label>
                                            <div title="Hidup" class="isi">
                                                Hidup</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Pernikahan</label>
                                            <div title="Kawin" class="isi">
                                                Kawin</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Akta
                                                Menikah</label>
                                            <div title="56238978" class="isi">
                                                56238978</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Akta
                                                Menikah</label>
                                            <div title="5623" class="isi">
                                                5623</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal
                                                Akta Menikah</label>
                                            <div class="isi">
                                                06/03/2023</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Email</label>
                                            <div title="rafi@gmail.com" class="isi">
                                                rafi@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Akta
                                                Cerai</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Akta
                                                Cerai</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal
                                                Akta Cerai</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                HP</label>
                                            <div title="085645122356" class="isi">
                                                085645122356</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL PASANGAN --}}

            {{-- DETAIL ANAK --}}
            <div id="detailanak" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Anak
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="detailanak">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Anak
                                                Ke-</label>
                                            <div title="1" class="isi">
                                                1</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Pekerjaan Anak</label>
                                            <div title="Bukan PNS" class="isi">
                                                Bukan PNS</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nama</label>
                                            <div title="Yasmin Aisyah" class="isi">
                                                Yasmin Aisyah</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal
                                                Lahir</label>
                                            <div class="isi">
                                                23/20/2000</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Identitas</label>
                                            <div title="1856897845523" class="isi">
                                                1856897845523</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Jenis
                                                Kelamin</label>
                                            <div title="Perempuan" class="isi">
                                                Perempuan</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Pernikahan</label>
                                            <div title="Belum kawin" class="isi">
                                                Belum kawin</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                    <div class="wrap">
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Tanggal
                                                Meninggal</label>
                                            <div class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Akta
                                                Meninggal</label>
                                            <div title="-" class="isi">
                                                -</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Akta
                                                Kelahiran</label>
                                            <div title="235689784512" class="isi">
                                                235689784512</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Nomor
                                                Telepon</label>
                                            <div title="235698" class="isi">
                                                235698</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Status
                                                Hidup</label>
                                            <div title="Hidup" class="isi">
                                                Hidup</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Email</label>
                                            <div title="yasmin@gmail.com" class="isi">
                                                yasmin@gmail.com</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[240px] flex-shrink-0">Agama</label>
                                            <div title="Islam" class="isi">
                                                Islam</div>
                                        </div>
                                        <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                    </div>
                                </div>
                            </div>
                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
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
                                                <button title="Lihat">
                                                    <img src="./../../Assets/eye.svg" alt="">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DETAIL ANAK --}}
        </div>
    </x-sidebar-admin>

    <script>
        // TAB KELUARGA
        document.addEventListener("DOMContentLoaded", function() {
            // Hide all tab contents except the first one
            document.querySelectorAll('[id^="content"]').forEach((el, index) => {
                if (index !== 0) {
                    el.classList.add('hidden');
                }
            });
        });

        function showTab(tab) {
            // Hide all tab contents
            document.querySelectorAll('[id^="content"]').forEach((el) => {
                el.classList.add('hidden');
            });

            // Remove active class from all buttons
            document.querySelectorAll('[id^="tab"]').forEach((btn) => {
                btn.classList.remove('tab-active');
            });

            // Show the selected tab content
            document.getElementById('content' + tab.slice(-1)).classList.remove('hidden');
            // Add active class to the clicked button
            document.getElementById(tab).classList.add('tab-active');
        }
    </script>
</body>

</html>
