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
                                    <label For="" class="text-black font-medium w-[200px]">No Karis/Karsu
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
                                        <div id="accordion-pendidikan" data-accordion="collapse-pendidikan">
                                            @foreach ($pendidikan as $u)
                                                <h2 id="accordion-heading-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[18px] font-medium">
                                                                {{ $u->tingkat_pendidikan }}</div>
                                                            <div class="text-[16px]">- {{ $u->pendidikan }}</div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-{{ $loop->iteration }}" class="hidden"
                                                    aria-labelledby="accordion-heading-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Pendidikan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->pendidikan }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Tingkat
                                                                            Pendidikan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->tingkat_pendidikan }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Tahun
                                                                            Lulus</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->tahun_lulus }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Tanggal
                                                                            Kelulusan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->tgl_lulus }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- KANAN --}}
                                                            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Gelar
                                                                            Depan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->gelar_depan ? $u->gelar_depan : '-' }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Gelar
                                                                            Belakang</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->gelar_belakang ? $u->gelar_belakang : '-' }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                            Ijazah</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->no_ijasah }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Nama
                                                                            Universitas</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->nama_univ }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA PENDIDIKAN --}}

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
                                        <div id="accordion-skp" data-accordion="collapse-skp">
                                            @foreach ($skp as $u)
                                                <h2 id="accordion-heading-skp-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-skp-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-skp-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[18px] font-medium">
                                                                Nilai : {{ $u->nilai }}</div>
                                                            <div class="text-[16px]">- Tahun : {{ $u->tahun }}
                                                            </div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-skp-{{ $loop->iteration }}" class="hidden"
                                                    aria-labelledby="accordion-heading-skp-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Tahun</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->tahun }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Nilai
                                                                            SKP</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->nilai }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Orientasi
                                                                            Pelayanan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->ot }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Integritas</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->integritas }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Komitmen</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->komitmen }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Disiplin</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->disiplin }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Kerja
                                                                            Sama</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->kerja_sama }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Kepemimpinan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->kepemimpinan }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Status
                                                                            Atasan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->status_atasan }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Status
                                                                            Penilai</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->status_penilai }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Nama
                                                                            Atasan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->nama_atasan }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Nama
                                                                            Penilai</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->nama_penilai }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Jenis
                                                                            Jabatan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->jenis_jabatan }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- KANAN --}}
                                                            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Jumlah</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->jumlah }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Nilai
                                                                            Perilaku Kerja</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->perilaku }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Nilai
                                                                            Prestasi Kerja</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->prestasi }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Atasan
                                                                            Non PNS ID</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->atasan_nonpns }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Jabatan
                                                                            Atasan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->atasan_jabatan }} </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Jabatan
                                                                            Penilai</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->penilai_jabatan }} </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Golongan
                                                                            Penilai TMT</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->golongan_penilai_tmt }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Golongan
                                                                            Atasan TMT</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->golongan_atasan_tmt }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Golongan
                                                                            Penilai</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->golongan_penilai }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">Golongan
                                                                            Atasan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->golongan_atasan }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">NIP/NIK
                                                                            Penilai</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->nip_penilai }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="wrap">
                                                                    <div
                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                        <label For=""
                                                                            class="text-black font-medium text-[14px]">NIP/NIK
                                                                            Atasan</label>
                                                                        <div
                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                            {{ $u->nip_atasan }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA SKP --}}

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
                                        <div id="accordion-penghargaan" data-accordion="collapse-penghargaan">
                                            @foreach ($penghargaan as $u)
                                                <h2 id="accordion-heading-penghargaan-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-penghargaan-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-penghargaan-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[18px] font-medium">
                                                                {{ $u->jenis }}</div>
                                                            <div class="text-[16px]">- Tahun : {{ $u->tahun }}
                                                            </div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-penghargaan-{{ $loop->iteration }}"
                                                    class="hidden"
                                                    aria-labelledby="accordion-heading-penghargaan-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div
                                                                class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                {{-- KIRI --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Jenis
                                                                                Penghargaan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->jenis }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tahun
                                                                                Perolehan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tahun }}</div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                {{-- KANAN --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                Surat Keputusan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_surat }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Surat Keputusan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_surat }}</div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA PENGHARGAAN --}}

            {{-- DATA KINERJA --}}
            <div id="datakinerja" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Kinerja
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
                                        <div id="accordion-kinerja" data-accordion="collapse-kinerja">
                                            @foreach ($kinerja as $u)
                                                <h2 id="accordion-heading-kinerja-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-kinerja-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-kinerja-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[18px] font-medium">
                                                                {{ $u->tahun }}</div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-kinerja-{{ $loop->iteration }}"
                                                    class="hidden"
                                                    aria-labelledby="accordion-heading-kinerja-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div
                                                                class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                {{-- KIRI --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tahun</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tahun }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">NIP</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->nip }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nama</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->nama }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Unit
                                                                                Kerja</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->unit_kerja }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Jabatan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->jabatan }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- KANAN --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Hasil
                                                                                Kinerja</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->hasil }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Perilaku
                                                                                Kinerja</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->perilaku }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nama
                                                                                Instansi</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->instansi }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Kuadran
                                                                                Kerja</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->kuadran }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nama
                                                                                Penilai Jabatan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->penilai_jabatan }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nama
                                                                                Penilai </label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->penilai }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA KINERJA --}}

            {{-- DATA CPNS --}}
            <div id="datacpns" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Cpns
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
                                        <div id="accordion-cpns" data-accordion="collapse-cpns">
                                            @foreach ($pns as $u)
                                                <h2 id="accordion-heading-cpns-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-cpns-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-cpns-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[18px] font-medium">{{ $u->status_pns }}
                                                            </div>
                                                            <div class="text-[16px]">{{ $u->no_sk_pns }}</div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-cpns-{{ $loop->iteration }}" class="hidden"
                                                    aria-labelledby="accordion-heading-cpns-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div
                                                                class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                {{-- KIRI --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Status
                                                                                Pegawai</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->status_pns }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                SK CPNS</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_sk_cpns }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                SK PNS</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded min-w-[380px]">
                                                                                {{ $u->no_sk_pns }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                SK STTPL</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_sk_sttpl }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Karpeg</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->karpeg }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                Surat Dokter</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_surat_dokter }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                SPMT</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_spmt }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                Pertek C2TH</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_c2th }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- KANAN --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Surat Keputusan
                                                                                CPNS</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_sk_cpns }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Surat Keputusan
                                                                                PNS</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_sk_pns }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                STTPL</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_sttpl }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                TMT CPNS</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_tmt_cpns }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                TMT PNS</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_tmt_pns }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                SPMT</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_spmt }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Pertek C2TH</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_c2th }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA CPNS --}}

            {{-- DATA DIKLAT --}}
            <div id="datadiklat" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Diklat
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
                                        <div id="accordion-diklat" data-accordion="collapse-diklat">
                                            @foreach ($diklat as $u)
                                                <h2 id="accordion-heading-diklat-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-diklat-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-diklat-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[18px] font-medium">
                                                                {{ $u->jenis_diklat }}</div>
                                                            <div class="text-[16px]">-{{ $u->nama_diklat }}</div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-diklat-{{ $loop->iteration }}"
                                                    class="hidden"
                                                    aria-labelledby="accordion-heading-diklat-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div
                                                                class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                {{-- KIRI --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Jenis
                                                                                Diklat</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->jenis_diklat }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nama
                                                                                Diklat</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->nama_diklat }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Institusi
                                                                                Penyelenggara</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->institusi }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tahun
                                                                                Diklat</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tahun }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tahun
                                                                                Selesai</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_selesai }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- KANAN --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Mulai</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_mulai }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Durasi
                                                                                (Jam)</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->durasi }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Rumpun
                                                                                Diklat</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->rumpun }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                Sertifikat</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_sertif }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA DIKLAT --}}

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
                                        <div id="accordion-pmk" data-accordion="collapse-pmk">
                                            @foreach ($pmk as $u)
                                                <h2 id="accordion-heading-pmk-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-pmk-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-pmk-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[18px] font-medium">
                                                                {{ $u->masa_kerja }}</div>
                                                            <div class="text-[16px]">-{{ $u->instansi }}</div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-pmk-{{ $loop->iteration }}" class="hidden"
                                                    aria-labelledby="accordion-heading-pmk-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div
                                                                class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                {{-- KIRI --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Jenis
                                                                                Peninjauan Masa
                                                                                Kerja</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->masa_kerja }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Instansi/Perusahaan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->instansi }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Awal</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_awal }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Akhir</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_akhir }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Masa
                                                                                Kerja (Bulan)</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->masa_kerja_bulan }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- KANAN --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                Surat Keputusan
                                                                                (SK)</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_sk }}/div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wrap">
                                                                            <div
                                                                                class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                            </div>
                                                                            <div
                                                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                <label For=""
                                                                                    class="text-black font-medium text-[14px]">Tanggal
                                                                                    Surat Keputusan
                                                                                    (SK)</label>
                                                                                <div
                                                                                    class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                    {{ $u->tgl_sk }}</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wrap">
                                                                            <div
                                                                                class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                            </div>
                                                                            <div
                                                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                <label For=""
                                                                                    class="text-black font-medium text-[14px]">Nomor
                                                                                    Pertek BKN</label>
                                                                                <div
                                                                                    class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                    {{ $u->no_bkn }}</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wrap">
                                                                            <div
                                                                                class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                            </div>
                                                                            <div
                                                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                <label For=""
                                                                                    class="text-black font-medium text-[14px]">Tanggal
                                                                                    Pertek BKN</label>
                                                                                <div
                                                                                    class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                    {{ $u->tgl_bkn }}</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wrap">
                                                                            <div
                                                                                class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                            </div>
                                                                            <div
                                                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                <label For=""
                                                                                    class="text-black font-medium text-[14px]">Masa
                                                                                    Kerja (Tahun)</label>
                                                                                <div
                                                                                    class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                    {{ $u->masa_kerja_tahun }}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA PMK --}}

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
                                        <div id="accordion-golongan" data-accordion="collapse-golongan">
                                            @foreach ($golongan as $u)
                                                <h2 id="accordion-heading-golongan-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-golongan-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-golongan-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[16px]">{{ $u->golongan }}</div>
                                                            <div class="text-[16px]">{{ $u->jenis_kp }}</div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-golongan-{{ $loop->iteration }}"
                                                    class="hidden"
                                                    aria-labelledby="accordion-heading-golongan-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div
                                                                class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                {{-- KIRI --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Golongan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->golongan }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Jenis
                                                                                Kenaikan
                                                                                Pangkat</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->jenis_kp }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Masa
                                                                                Kerja Golongan
                                                                                (Tahun)</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->masa_kerja_tahun }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Masa
                                                                                Kerja Golongan
                                                                                (Bulan)</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->masa_kerja_bulan ? $u->masa_kerja_bulan : '-' }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">TMT
                                                                                Golongan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tmt }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- KANAN --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                Surat Keputusan
                                                                                (SK)</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_sk }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                Pertek BKN</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_bkn }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Pertek BKN</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_bkn ? $u->tgl_bkn : '-' }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                Surat Keputusan
                                                                                (SK)
                                                                            </label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_sk }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA GOLONGAN --}}

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
                                        <div id="accordion-jabatan" data-accordion="collapse-jabatan">
                                            @foreach ($jabatan as $u)
                                                <h2 id="accordion-heading-jabatan-{{ $loop->iteration }}">
                                                    <button type="button"
                                                        class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                        data-accordion-target="#accordion-body-jabatan-{{ $loop->iteration }}"
                                                        aria-expanded="false"
                                                        aria-controls="accordion-body-jabatan-{{ $loop->iteration }}">
                                                        <span>
                                                            <div class="text-[18px] font-medium">
                                                                {{ $u->nama_jabatan }}</div>
                                                            <div class="text-[16px]">{{ $u->tgl_tmt }}</div>
                                                        </span>
                                                        <img src="../../../Assets/book.svg" alt="">
                                                    </button>
                                                </h2>
                                                <div id="accordion-body-jabatan-{{ $loop->iteration }}"
                                                    class="hidden"
                                                    aria-labelledby="accordion-heading-jabatan-{{ $loop->iteration }}">
                                                    <div class="p-5">
                                                        <div
                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                            <div
                                                                class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                {{-- KIRI --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Jenis
                                                                                Jabatan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->jenis_jabatan }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Jenis
                                                                                Mutasi</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->mutasi }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Jenis
                                                                                Penugasan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->penugasan }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                SK</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_sk }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                TMT Jabatan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_tmt }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Tanggal
                                                                                TMT Pelantikan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->tgl_tmt_pelantikan }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nomor
                                                                                SK</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->no_sk }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                {{-- KANAN --}}
                                                                <div
                                                                    class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Status
                                                                                Riwayat</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->status_riwayat }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Instansi</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->instansi }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Satuan
                                                                                Kerja</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->sk }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Satuan
                                                                                Kerja Induk</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->sk_induk }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nama
                                                                                Organisasi</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->unit_organisasi }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wrap">
                                                                        <div
                                                                            class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                        </div>
                                                                        <div
                                                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                            <label For=""
                                                                                class="text-black font-medium text-[14px]">Nama
                                                                                Jabatan</label>
                                                                            <div
                                                                                class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                {{ $u->nama_jabatan }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- table --}}
                                                        <div
                                                            class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                            <table
                                                                class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                <thead
                                                                    class="text-base text-white bg-[#4F8EA5] rounded-lg">
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
                                                                    @foreach ($u->files as $file)
                                                                        <tr
                                                                            class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                            <td class="px-3 py-3">
                                                                                {{ $loop->iteration }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                {{ $file->file_name ? $file->file_name : '-' }}
                                                                            </td>
                                                                            <td class="px-3 py-3">
                                                                                <button title="Download"
                                                                                    class="mr-3">
                                                                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                        download="{{ $file->file_name }}"
                                                                                        title="Download">
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
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- DATA JABATAN --}}

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
                                    onclick="showTab('tab1')">Orang
                                    Tua</button>
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
                                                    <div id="accordion-ortu" data-accordion="collapse-ortu">
                                                        @foreach ($ortu as $u)
                                                            <h2 id="accordion-heading-ortu-{{ $loop->iteration }}">
                                                                <button type="button"
                                                                    class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                                    data-accordion-target="#accordion-body-ortu-{{ $loop->iteration }}"
                                                                    aria-expanded="false"
                                                                    aria-controls="accordion-body-ortu-{{ $loop->iteration }}">
                                                                    <span>
                                                                        <div class="text-[18px] font-medium">
                                                                            {{ $u->nama }}</div>
                                                                        <div class="text-[16px]">
                                                                            -{{ $u->jk == 'Laki - Laki' ? 'Ayah' : 'Ibu' }}
                                                                        </div>
                                                                    </span>
                                                                    <img src="../../../Assets/book.svg"
                                                                        alt="">
                                                                </button>
                                                            </h2>
                                                            <div id="accordion-body-ortu-{{ $loop->iteration }}"
                                                                class="hidden"
                                                                aria-labelledby="accordion-heading-ortu-{{ $loop->iteration }}">
                                                                <div class="p-5">
                                                                    <div
                                                                        class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                        <div
                                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                            {{-- KIRI --}}
                                                                            <div
                                                                                class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            HIdup</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_keluarga }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            Pekerjaan Orang
                                                                                            Tua</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_pekerjaan }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nama</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->nama }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            Pernikahan</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_pernikahan }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Jenis
                                                                                            Kelamin</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->jk }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Email</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->email }}</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- KANAN --}}
                                                                            <div
                                                                                class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Tanggal
                                                                                            Lahir</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->tgl_lahir }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Tanggal
                                                                                            Meninggal</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->tgl_meninggal ? $u->tgl_meninggal : '-' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Identitas</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_identitas }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Agama</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->agama }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Telepon</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_tel }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Handphone</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_hp }}</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- table --}}
                                                                    <div
                                                                        class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                                        <table
                                                                            class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                            <thead
                                                                                class="text-base text-white bg-[#4F8EA5] rounded-lg">
                                                                                <tr>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        No
                                                                                    </th>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        Nama Surat
                                                                                    </th>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        Aksi
                                                                                    </th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($u->files as $file)
                                                                                    <tr
                                                                                        class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                                        <td class="px-3 py-3">
                                                                                            {{ $loop->iteration }}
                                                                                        </td>
                                                                                        <td class="px-3 py-3">
                                                                                            {{ $file->file_name ? $file->file_name : '-' }}
                                                                                        </td>
                                                                                        <td class="px-3 py-3">
                                                                                            <button title="Download"
                                                                                                class="mr-3">
                                                                                                <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                                    download="{{ $file->file_name }}"
                                                                                                    title="Download">
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
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content2">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        <div class="w-full p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                                            <div class="w-full flex flex-col gap-3 md:gap-3">
                                                <div class="wrap-content">
                                                    <div id="accordion-pasangan" data-accordion="collapse-pasangan">
                                                        @foreach ($pasangan as $u)
                                                            <h2
                                                                id="accordion-heading-pasangan-{{ $loop->iteration }}">
                                                                <button type="button"
                                                                    class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                                    data-accordion-target="#accordion-body-pasangan-{{ $loop->iteration }}"
                                                                    aria-expanded="false"
                                                                    aria-controls="accordion-body-pasangan-{{ $loop->iteration }}">
                                                                    <span>
                                                                        <div class="text-[18px] font-medium">
                                                                            {{ $u->nama }}</div>
                                                                        <div class="text-[16px]">
                                                                            -{{ $u->jk_kelamin == 'laki-laki' ? 'Suami' : 'Istri' }}
                                                                        </div>
                                                                    </span>
                                                                    <img src="../../../Assets/book.svg"
                                                                        alt="">
                                                                </button>
                                                            </h2>
                                                            <div id="accordion-body-pasangan-{{ $loop->iteration }}"
                                                                class="hidden"
                                                                aria-labelledby="accordion-heading-pasangan-{{ $loop->iteration }}">
                                                                <div class="p-5">
                                                                    <div
                                                                        class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                        <div
                                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                            {{-- KIRI --}}
                                                                            <div
                                                                                class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Suami/Istri
                                                                                            Ke-</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_pasangan }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            Pekerjaan Orang
                                                                                            Tua</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_pekerjaan }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nama</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->nama }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Tanggal
                                                                                            Lahir</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->tgl_lahir }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Identitas</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_identitas }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Jenis
                                                                                            Kelamin</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->jk }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Alamat</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->alamat }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Agama</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->agama }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Karsus/Karis</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_karis }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Telepon</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_tel }}</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- KANAN --}}
                                                                            <div
                                                                                class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            Hidup</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_keluarga }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            Pernikahan</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_pernikahan }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Akta Menikah</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_akta }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Akta
                                                                                            Menikah</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->akta_nikah }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Tanggal
                                                                                            Akta Menikah</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->tgl_nikah }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Email</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->email }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Akta Cerai</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_cerai ? $u->no_cerai : '-' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Akta
                                                                                            Cerai</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->akta_cerai ? $u->akta_cerai : '-' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Tanggal
                                                                                            Akta Cerai</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->tgl_cerai ? $u->tgl_cerai : '-' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            HP</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_hp }}</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- table --}}
                                                                    <div
                                                                        class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                                        <table
                                                                            class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                            <thead
                                                                                class="text-base text-white bg-[#4F8EA5] rounded-lg">
                                                                                <tr>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        No
                                                                                    </th>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        Nama Surat
                                                                                    </th>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        Aksi
                                                                                    </th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($u->files as $file)
                                                                                    <tr
                                                                                        class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                                        <td class="px-3 py-3">
                                                                                            {{ $loop->iteration }}
                                                                                        </td>
                                                                                        <td class="px-3 py-3">
                                                                                            {{ $file->file_name ? $file->file_name : '-' }}
                                                                                        </td>
                                                                                        <td class="px-3 py-3">
                                                                                            <button title="Download"
                                                                                                class="mr-3">
                                                                                                <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                                    download="{{ $file->file_name }}"
                                                                                                    title="Download">
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
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="content3">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        <div class="w-full p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                                            <div class="w-full flex flex-col gap-3 md:gap-3">
                                                <div class="wrap-content">
                                                    <div id="accordion-anak" data-accordion="collapse-anak">
                                                        @foreach ($anak as $u)
                                                            <h2 id="accordion-heading-anak-{{ $loop->iteration }}">
                                                                <button type="button"
                                                                    class="flex items-center justify-between w-full p-3 px-6 text-left border-2 border-[#969BA0] light:bg-gray-800"
                                                                    data-accordion-target="#accordion-body-anak-{{ $loop->iteration }}"
                                                                    aria-expanded="false"
                                                                    aria-controls="accordion-body-anak-{{ $loop->iteration }}">
                                                                    <span>
                                                                        <div class="text-[18px] font-medium">
                                                                            {{ $u->nama }}</div>
                                                                        <div class="text-[16px]">
                                                                            -{{ $u->jk }}</div>
                                                                    </span>
                                                                    <img src="../../../Assets/book.svg"
                                                                        alt="">
                                                                </button>
                                                            </h2>
                                                            <div id="accordion-body-anak-{{ $loop->iteration }}"
                                                                class="hidden"
                                                                aria-labelledby="accordion-heading-anak-{{ $loop->iteration }}">
                                                                <div class="p-5">
                                                                    <div
                                                                        class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                        <div
                                                                            class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                                                            {{-- KIRI --}}
                                                                            <div
                                                                                class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Anak
                                                                                            Ke-</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_anak }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            Pekerjaan Anak</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_pekerjaan }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nama</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->nama }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Tanggal
                                                                                            Lahir</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->tgl_lahir }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Identitas</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_identitas }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Jenis
                                                                                            Kelamin</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->jk }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            Pernikahan</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_nikah }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- KANAN --}}
                                                                            <div
                                                                                class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Tanggal
                                                                                            Meninggal</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->tgl_meninggal ? $u->tgl_meninggal : '-' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Akta Meninggal</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_akta_meninggal ? $u->no_akta_meninggal : '-' }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Akta Kelahiran</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_lahir }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Nomor
                                                                                            Telepon</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->no_tel }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Status
                                                                                            Hidup</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->status_keluarga }}
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Email</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->email }}</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wrap">
                                                                                    <div
                                                                                        class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                                                        <label For=""
                                                                                            class="text-black font-medium text-[14px]">Agama</label>
                                                                                        <div
                                                                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                                                                                            {{ $u->agama }}</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- table --}}
                                                                    <div
                                                                        class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                                                        <table
                                                                            class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                                                            <thead
                                                                                class="text-base text-white bg-[#4F8EA5] rounded-lg">
                                                                                <tr>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        No
                                                                                    </th>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        Nama Surat
                                                                                    </th>
                                                                                    <th scope="col"
                                                                                        class="px-3 py-3">
                                                                                        Aksi
                                                                                    </th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @foreach ($u->files as $file)
                                                                                    <tr
                                                                                        class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                                                        <td class="px-3 py-3">
                                                                                            {{ $loop->iteration }}
                                                                                        </td>
                                                                                        <td class="px-3 py-3">
                                                                                            {{ $file->file_name ? $file->file_name : '-' }}
                                                                                        </td>
                                                                                        <td class="px-3 py-3">
                                                                                            <button title="Download"
                                                                                                class="mr-3">
                                                                                                <a href="{{ asset('storage/' . $file->file_path) }}"
                                                                                                    download="{{ $file->file_name }}"
                                                                                                    title="Download">
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
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
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
