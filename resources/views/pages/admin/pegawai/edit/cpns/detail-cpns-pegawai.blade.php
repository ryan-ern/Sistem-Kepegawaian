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
                    <a href="/admin/edit-pegawai/data-diri"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Data Diri
                    </a>
                    <a href="/admin/edit-pegawai/data-pendidikan"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Pendidikan
                    </a>
                    <a href="/admin/edit-pegawai/data-orangtua"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Keluarga
                    </a>
                    <a href="/admin/edit-pegawai/data-skp"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        SKP
                    </a>
                    <a href="/admin/edit-pegawai/data-penghargaan"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Penghargaan
                    </a>
                    <a href="/admin/edit-pegawai/data-kinerja"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Laporan Kinerja
                    </a>
                    <a href="/admin/edit-pegawai/data-cpns"
                        class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
                        CPNS/PNS
                    </a>
                    <a href="/admin/edit-pegawai/data-diklat"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Diklat/Kursus
                    </a>
                    <a href="/admin/edit-pegawai/data-pmk"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md text-[14px]">
                        Peninjauan Masa Kerja
                    </a>
                    <a href="/admin/edit-pegawai/data-golongan"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Golongan
                    </a>
                    <a href="/admin/edit-pegawai/data-jabatan"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Jabatan
                    </a>
                </div>
            </div>
            <div class="right w-full md:w-[88%]">
                <div class="hea flex justify-between">
                    <div class="text-[#2F5B6B] font-semibold text-[22px]">Data CPNS/PNS</div>
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
                                    <label For="" class="text-black font-medium text-[14px]">Status
                                        Pegawai</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor SK
                                        CPNS</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor SK
                                        PNS</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor SK
                                        STTPL</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Karpeg</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor Surat
                                        Dokter</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor SPMT</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor Pertek
                                        C2TH</label>
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
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal Surat
                                        Keputusan CPNS</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal Surat
                                        Keputusan PNS</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal
                                        STTPL</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal TMT
                                        CPNS</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal TMT
                                        PNS</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal
                                        SPMT</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal Pertek
                                        C2TH</label>
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
