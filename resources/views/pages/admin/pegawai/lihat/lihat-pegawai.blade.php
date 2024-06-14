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
                    <img class="w-[120px]" src="../../Assets/user3.png" alt="">
                </div>
                <div class="wrap-menu mt-5 flex flex-col gap-3">
                    <button data-modal-target="Data Diri" data-modal-toggle="Data Diri"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Data Diri
                </button>
                    <button data-modal-target="pendidikan" data-modal-toggle="pendidikan"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Pendidikan
                    </button>
                    <button data-modal-target="keluarga" data-modal-toggle="keluarga"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Keluarga
                    </button>
                    <button data-modal-target="skp" data-modal-toggle="skp"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        SKP
                    </button>
                    <button data-modal-target="penghargaan" data-modal-toggle="penghargaan"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Penghargaan
                    </button>
                    <button data-modal-target="kinerja" data-modal-toggle="kinerja"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Laporan Kinerja
                    </button>
                    <button data-modal-target="cpns" data-modal-toggle="cpns"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        CPNS/PNS
                    </button>
                    <button data-modal-target="diklat" data-modal-toggle="diklat"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Diklat/Kursus
                    </button>
                    <button data-modal-target="pmk" data-modal-toggle="pmk"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md text-[14px]">
                        Peninjauan Masa Kerja
                    </button>
                    <button data-modal-target="golongan" data-modal-toggle="golongan"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Golongan
                    </button>
                    <button data-modal-target="jabatan" data-modal-toggle="jabatan"
                        class="w-full p-3 text-white bg-[#4F8EA5] hover:bg-[#093545]  text-center rounded-md">
                        Jabatan
                        </a>
                </div>
            </div>
            <div class="right w-full md:w-[88%]">
                <div class="wrap mt-3">
                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                            <div class="wrap">
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For=""
                                        class="text-black font-medium w-[200px] flex-shrink-0">Nama</label>
                                    <div title="Monica Adella" class="is">
                                        Monica Adella</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">NIP</label>
                                    <div title="120563458" class="is">
                                        120563458</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">NIK </label>
                                    <div title="120563458" class="is">
                                        12345678902</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No Kartu Keluarga</label>
                                    <div title="1879562345789" class="is">
                                        1879562345789</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Nomor Telepon</label>
                                    <div title="08123456789" class="is">
                                        08123456789</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px] ">Status</label>
                                    <div title="Aktif" class="is">
                                        Aktif</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For=""
                                        class="text-black font-medium w-[200px] flex-shrink-0 ">Alamat</label>
                                    <div title="Gajah Mada, Kota Baru, Tanjung Tarang Timur" class="is">
                                        Gajah Mada, Kota Baru, Tanjung Tarang Timur</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Agama</label>
                                    <div title="Islam" class="is">
                                        Islam</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Satuan Kerja</label>
                                    <div title="Pegawai" class="is">
                                        Pegawai</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Kelas Jabatan(Angka)</label>
                                    <div title="2" class="is">
                                        2</div>
                                </div>
                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                            </div>
                            <div class="wrap">
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Email</label>
                                    <div title="monica123@gmail.com" class="is">
                                        monica123@gmail.com</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Tanggal Lahir</label>
                                    <div class="is">
                                        23/06/1992</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Tempat Lahir
                                    </label>
                                    <div title="Bandar Lampung" class="is">
                                        Bandar Lampung</div>
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
                                        1879562345789</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Tanggal NPWP
                                    </label>
                                    <div class="is">
                                        12/03/2002</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Lokasi Kerja
                                    </label>
                                    <div title="Lampung" class="is">
                                        Lampung</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No BPJS Kesehatan
                                    </label>
                                    <div title="2356889" class="is">
                                        2356889</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No Akta Kelahitan
                                    </label>
                                    <div title="235689784512" class="is">
                                        235689784512</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No Karis/Kasus
                                    </label>
                                    <div title="12345678902" class="is">
                                        12345678902</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No TASPEN </label>
                                    <div title="12345678902" class="is">
                                        12345678902</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">Tanggal TASPEN</label>
                                    <div class="is">
                                        23/01/2000</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No TAPERA </label>
                                    <div title="12345678902" class="is">
                                        12345678902</div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                    <label For="" class="text-black font-medium w-[200px]">No KPPN/Kantor
                                        Pembayaran Gaji</label>
                                    <div title="5623" class="is">
                                        5623</div>
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
                                            <th scope="col" class="px-5 py-3">
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
                                            <td title="Dokumen Surat" class="px-3 py-3">
                                                Dokumen Surat
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
                                            <td title="Dokumen Surat" class="px-3 py-3">
                                                Dokumen Surat
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
            {{-- PENDIDIKAN --}}
            <div id="pendidikan" tabindex="-1" aria-hidden="true"
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
                                data-modal-hide="pendidikan">
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
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tingkat Pendidikan</label>
                                            <div title="S1-Teknik Informatika" class="isi">
                                                S1-Teknik Informatika</div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                        <div
                                            class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                            <label For=""
                                                class="text-black font-medium w-[200px] flex-shrink-0">Tahun Lulus</label>
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
                                                02/03/1989</div>
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
            {{-- PENDIDIKAN --}}

            {{-- SKP --}}
            <div id="skp" tabindex="-1" aria-hidden="true"
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
                                data-modal-hide="skp">
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
            {{-- SKP --}}

            {{-- PENGHARGAAN --}}
            <div id="penghargaan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div  class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Penghargaan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="penghargaan">
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
            {{-- PENGHARGAAN --}}

            {{-- KINERJA --}}
            <div id="kinerja" tabindex="-1" aria-hidden="true"
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
                                data-modal-hide="kinerja">
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
            {{-- KINERJA --}}

            {{-- CPNS --}}
            <div id="cpns" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div  class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data CPNS/PNS
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="cpns">
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
                                            <div title="821/1673/IV.04/KPTS/MSJ/2016/00007866/DIKLAT" class="isi">
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
            {{-- CPNS --}}

            {{-- DIKLAT --}}
            <div id="diklat" tabindex="-1" aria-hidden="true"
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
                                data-modal-hide="diklat">
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
            {{-- DIKLAT --}}

            {{-- PMK --}}
            <div id="pmk" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div  class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Peninjauan Masa Kerja
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="pmk">
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
            {{-- PMK --}}

            {{-- GOLONGAN --}}
            <div id="golongan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div  class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <h3 class="text-[30px] font-semibold text-gray-900 ">
                                Data Golongan
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="golongan">
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
            {{-- GOLONGAN --}}

            {{-- JABATAN --}}
            <div id="jabatan" tabindex="-1" aria-hidden="true"
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
                                data-modal-hide="jabatan">
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
            {{-- JABATAN --}}
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
                                <button id="tab1" class="font-medium text-[#B3B3B3]" onclick="showTab('tab1')">Orang Tua</button>
                                <button id="tab2" class="font-medium text-[#B3B3B3]" onclick="showTab('tab2')">Pasangan</button>
                                <button id="tab3" class="font-medium text-[#B3B3B3]" onclick="showTab('tab3')">Anak</button>
                            </div>
                            <div id="tabContent">
                                <div id="content1">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        {{-- KIRI --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                            <div class="wrap">
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Hidup</label>
                                                    <div title="-" class="isi">
                                                        -</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Pekerjaan Orang Tua</label>
                                                    <div title="PNS" class="isi">
                                                        PNS</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nama</label>
                                                    <div title="M.Yusuf" class="isi">
                                                        M.Yusuf</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Pernikahan</label>
                                                    <div title="Cerai Mati" class="isi">
                                                        Cerai Mati</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Jenis Kelamin</label>
                                                    <div title="Laki-laki" class="isi">
                                                        Laki-laki</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Email</label>
                                                    <div title="yusuf@gmail.com" class="isi">
                                                        yusuf@gmail.com</div>
                                                </div>
                                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                            </div>
                                        </div>
                                        {{-- KANAN --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                            <div class="wrap">
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Tanggal Lahir</label>
                                                    <div class="isi">
                                                        13/02/1950</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Tanggal  Meninggal</label>
                                                    <div class="isi">
                                                        12/02/2020</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Identitas</label>
                                                    <div title="2356898784512" class="isi">
                                                        2356898784512</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Agama</label>
                                                    <div title="Islam" class="isi">
                                                        Islam</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Telepon</label>
                                                    <div title="08121235689" class="isi">
                                                        08121235689</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Handphone</label>
                                                    <div title="085645125623" class="isi">
                                                        085645125623</div>
                                                </div>
                                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
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
                                                <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
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
                                                <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
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
                                <div id="content2" class="hidden">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        {{-- KIRI --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                            <div class="wrap">
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Suami/Istri Ke-</label>
                                                    <div title="1" class="isi">
                                                        1</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Pekerjaan Orang Tua</label>
                                                    <div title="PNS" class="isi">
                                                        PNS</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nama</label>
                                                    <div title="Rafi Ramadhan" class="isi">
                                                        Rafi Ramadhan</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Tanggal Lahir</label>
                                                    <div class="isi">
                                                        03/12/1980</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Identitas</label>
                                                    <div title="1879456231202" class="isi">
                                                        1879456231202</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Jenis Kelamin</label>
                                                    <div title="Laki-laki" class="isi">
                                                        Laki-laki</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Alamat</label>
                                                    <div title="Pahoman, Bandar Lampung" class="isi">
                                                        Pahoman, Bandar Lampung</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Agama</label>
                                                    <div title="Islam" class="isi">
                                                        Islam</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Karsus/Karis</label>
                                                    <div title="-" class="isi">
                                                        -</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Telepon</label>
                                                    <div title="56897845" class="isi">
                                                        56897845</div>
                                                </div>
                                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                            </div>
                                        </div>
                                        {{-- KANAN --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                            <div class="wrap">
                                                
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Hidup</label>
                                                    <div title="Hidup" class="isi">
                                                        Hidup</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Pernikahan</label>
                                                    <div title="Kawin" class="isi">
                                                        Kawin</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Akta Menikah</label>
                                                    <div title="56238978" class="isi">
                                                        56238978</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Akta Menikah</label>
                                                    <div title="5623" class="isi">
                                                        5623</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Tanggal  Akta Menikah</label>
                                                    <div class="isi">
                                                        06/03/2023</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Email</label>
                                                    <div title="rafi@gmail.com" class="isi">
                                                        rafi@gmail.com</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Akta Cerai</label>
                                                    <div title="-" class="isi">
                                                        -</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Akta Cerai</label>
                                                    <div title="-" class="isi">
                                                        -</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Tanggal Akta Cerai</label>
                                                    <div title="-" class="isi">
                                                        -</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor HP</label>
                                                    <div title="085645122356" class="isi">
                                                        085645122356</div>
                                                </div>
                                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
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
                                                <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
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
                                                <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
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
                                <div id="content3" class="hidden">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        {{-- KIRI --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                            <div class="wrap">
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Anak Ke-</label>
                                                    <div title="1" class="isi">
                                                        1</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Pekerjaan Anak</label>
                                                    <div title="Bukan PNS" class="isi">
                                                        Bukan PNS</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nama</label>
                                                    <div title="Yasmin Aisyah" class="isi">
                                                        Yasmin Aisyah</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Tanggal Lahir</label>
                                                    <div class="isi">
                                                        23/20/2000</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Identitas</label>
                                                    <div title="1856897845523" class="isi">
                                                        1856897845523</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Jenis Kelamin</label>
                                                    <div title="Perempuan" class="isi">
                                                        Perempuan</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Pernikahan</label>
                                                    <div title="Belum kawin" class="isi">
                                                        Belum kawin</div>
                                                </div>
                                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
                                            </div>
                                        </div>
                                        {{-- KANAN --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-3">
                                            <div class="wrap">
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Tanggal Meninggal</label>
                                                    <div class="isi">
                                                        -</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Akta Meninggal</label>
                                                    <div title="-" class="isi">
                                                        -</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Akta Kelahiran</label>
                                                    <div title="235689784512" class="isi">
                                                        235689784512</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Nomor Telepon</label>
                                                    <div title="235698" class="isi">
                                                        235698</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Status Hidup</label>
                                                    <div title="Hidup" class="isi">
                                                        Hidup</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Email</label>
                                                    <div title="yasmin@gmail.com" class="isi">
                                                        yasmin@gmail.com</div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]"></div>
                                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                    <label For="" class="text-black font-medium w-[240px] flex-shrink-0">Agama</label>
                                                    <div title="Islam" class="isi">
                                                        Islam</div>
                                                </div>
                                                <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]"></div>
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
                                                <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
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
                                                <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
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
                </div>
            </div>
            {{-- KELUARGA --}}
            {{-- MODAL --}}
        </div>
    </x-sidebar-admin>

    <script>
        // TAB KELUARGA
        document.addEventListener("DOMContentLoaded", function() {
            // Hide all tab contents except the first one
            document.querySelectorAll('[id^="content"]').forEach((el, index) => {
                if(index !== 0) {
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
