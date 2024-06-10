<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keluarga</title>
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
                        <a href="/admin/edit-pegawai/data-pendidikan"
                            class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                            Pendidikan
                        </a>
                        <a href="/admin/edit-pegawai/data-orangtua"
                            class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
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
                            class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
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
                            class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md ">
                            Golongan
                        </a>
                        <a href="/admin/edit-pegawai/data-jabatan"
                            class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md ">
                            Jabatan
                        </a>
                </div>
            </div>
            <div class="right w-full md:w-[88%]">
                <div class="hea flex justify-between">
                    <div class="text-[#2F5B6B] font-semibold text-[22px]">Data Anak</div>
                    <button class="p-1 text-white px-5 rounded bg-[#2F5B6B]">Simpan</button>
                </div>
                <div class="tab flex gap-2">
                    <a href="/admin/edit-pegawai/data-orangtua" class="font-medium text-[#B3B3B3] underline">Orang
                        Tua</a>
                    <a href="/admin/edit-pegawai/data-pasangan" class="font-medium text-[#B3B3B3] ">Pasangan</a>
                    <a href="/admin/edit-pegawai/data-anak" class="font-medium text-[#4F8EA5] ">Anak</a>
                </div>
                <div class="wrap mt-3">
                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                        {{-- KIRI --}}
                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Anak Ke-</label>
                                    <select
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px] flex-shrink-0"
                                        id="cars">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Status Pekerjaan
                                        Anak</label>
                                    <select
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px] flex-shrink-0"
                                        id="cars">
                                        <option value="Bukan PNS">Bukan PNS</option>
                                        <option value="PNS">PNS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nama</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal
                                        Lahir</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor
                                        Identitas</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Jenis
                                        Kelamin</label>
                                    <select
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px] flex-shrink-0"
                                        id="cars">
                                        <option value="Perempuan">Perempuan</option>
                                        <option value="Laki - Laki">Laki - Laki</option>
                                    </select>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Status
                                        Pernikahan</label>
                                    <select
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px] flex-shrink-0"
                                        id="cars">
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
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
                                        Meninggal</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor Akta
                                        Meninggal</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor Akta
                                        Kelahiran</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor
                                        Telepon</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Status
                                        Hidup</label>
                                    <select
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px] flex-shrink-0"
                                        id="cars">
                                        <option value="Hidup">Hidup</option>
                                        <option value="Meninggal">Meninggal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Email</label>
                                    <input type="text"
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div
                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Agama</label>
                                    <select
                                        class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px] flex-shrink-0"
                                        id="cars">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Lainnya">Lainnya</option>
                                        <option value="Kepercayaan Terhadap Tuhan YME">Kepercayaan Terhadap Tuhan YME
                                        </option>
                                    </select>
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
                                        <button title="Hapus">
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
                                        <button title="Hapus">
                                            <img src="./../../Assets/del.svg" alt="">
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
    </x-sidebar-admin>
</body>

</html>
