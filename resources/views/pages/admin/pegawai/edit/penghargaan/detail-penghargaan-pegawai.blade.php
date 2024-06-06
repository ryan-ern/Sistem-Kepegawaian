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
                <a href="/admin/edit-pegawai/data-diri" class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Data Diri
                    </a>
                    <a href="/admin/edit-pegawai/data-pendidikan"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Pendidikan
                    </a>
                    <a href="/admin/edit-pegawai/data-keluarga-orangtua"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Keluarga
                    </a>
                    <a href="/admin/edit-pegawai/data-skp" class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        SKP
                    </a>
                    <a href="/admin/edit-pegawai/data-penghargaan"
                        class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
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
                    <div class="text-[#2F5B6B] font-semibold text-[22px]">Data Penghargaan</div>
                    <button class="p-1 text-white px-5 rounded bg-[#2F5B6B]">Simpan</button>
                </div>
                <div class="wrap mt-3">
                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                        {{-- KIRI --}}
                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Jenis Penghargaan</label>
                                    <select
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px] flex-shrink-0"
                            id="cars">
                            <option value="Bintang">Bintang</option>
                            <option value="R.I Adipurna">R.I Adipurna</option>
                            <option value="R.I Adipradana">R.I Adipradana</option>
                            <option value="R.I Utama">R.I Utama</option>
                            <option value="R.I Pratama">R.I Pratama</option>
                            <option value="R.I Nararya">R.I Nararya</option>
                            <option value="Mahaputera Adipurna">Mahaputera Adipurna</option>
                            <option value="Mahaputera Adipradana">Mahaputera Adipradana</option>
                            <option value="Mahaputera Utama">Mahaputera Utama</option>
                            <option value="Mahaputera Pratama">Mahaputera Pratama</option>
                            <option value="Mahaputera Nararya">Mahaputera Nararya</option>
                            <option value="Tanda Perhargaan Trikora">Tanda Perhargaan Trikora</option>
                            <option value="TP Pembebasan Irian Barat">TP Pembebasan Irian Barat</option>
                            <option value="Satyalancana Karya Satya 10 Tahun">Satyalancana Karya Satya 10 Tahun</option>
                            <option value="Satyalancana Karya Satya 20 Tahun">Satyalancana Karya Satya 20 Tahun</option>
                            <option value="Satyalancana Karya Satya 20 Tahun">Satyalancana Karya Satya 20 Tahun</option>
                            <option value="Satyalancana Karya Satya 30 Tahun">Satyalancana Karya Satya 30 Tahun</option>
                            <option value="Satyalancana Wira Karya">Satyalancana Wira Karya</option>
                            <option value="Satyalancana Perintis Kemerdekaan">Satyalancana Perintis Kemerdekaan</option>
                            <option value="Satyalancana Pembangunan">Satyalancana Pembangunan</option>
                            <option value="Satyalancana Kebaktian Sosial">Satyalancana Kebaktian Sosial</option>
                            <option value="Satyalancana Kebudayaan">Satyalancana Kebudayaan</option>
                            <option value="Satyalancana Pendidikan">Satyalancana Pendidikan</option>
                            <option value="Satyalancana Dharma Olahraga">Satyalancana Dharma Olahraga</option>
                            <option value="Satyalancana Dharma Pemuda">Satyalancana Dharma Pemuda</option>
                            <option value="Satyalancana Kepariwisataan">Satyalancana Kepariwisataan</option>
                            <option value="Satyalancana Karya Bhakti Praja Nugraha">Satyalancana Karya Bhakti Praja Nugraha</option>
                            <option value="Satyalancana Karya Bhakti">Satyalancana Karya Bhakti</option>
                            <option value="Tanda Jasa Lainnya">Tanda Jasa Lainnya</option>
                            <option value="TP Sidhakarya Adhyaksa">TP Sidhakarya Adhyaksa</option>
                            <option value="TP Purnabakti Adhyaksa">TP Purnabakti Adhyaksa</option>
                            <option value="TP Dharma Adhyaksa">TP Dharma Adhyaksa</option>
                            <option value="TP Teladan TK Nasional">TP Teladan TK Nasional</option>
                            <option value="TP Teladan TK Propinsi">TP Teladan TK Propinsi</option>
                            <option value="TP Teladan TK Kabupaten/Kota">TP Teladan TK Kabupaten/Kota</option>
                            <option value="TP PNS Luar Biasa Prestasinya">TP PNS Luar Biasa Prestasinya</option>
                            <option value="TP Penemuan Bermanfaat bagi Negara">TP Penemuan Bermanfaat bagi Negara</option>
                            <option value="Siswa Teladan">Siswa Teladan</option>
                            <option value="Olimpiade">Olimpiade</option>
                            <option value="Tanda Penghargaan Lainnya">Tanda Penghargaan Lainnya</option>
                            <option value="Bintang Jawa Utama ">Bintang Jawa Utama </option>
                        </select>
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tahun Perolehan</label>
                                    <input type="text" class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            
                        </div>
                        {{-- KANAN --}}
                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Nomor Surat Keputusan</label>
                                    <input type="text" class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
                                </div>
                            </div>
                            <div class="wrap">
                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                    <label For="" class="text-black font-medium text-[14px]">Tanggal Surat Keputusan</label>
                                    <input type="text" class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded w-[380px]">
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
                </div>
            </div>
        </div>
    </x-sidebar-admin>
</body>

</html>
