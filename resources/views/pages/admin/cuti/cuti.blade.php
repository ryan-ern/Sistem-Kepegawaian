<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-admin>
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Data Cuti Pegawai</div>
        {{-- konten --}}
        <div class="">
            <div class="flex justify-end">
                <div class="sears relative">
                    <div class="absolute right-[10px] top-[8px]">
                        <img src="../../Assets/cari.svg" alt="">
                    </div>
                    <input type="text" class="rounded-lg border border-gray-400 pr-10" placeholder="Search here">
                </div>
            </div>
        {{-- hari --}}
        {{-- table --}}
        <div class="relative w-full overflow-x-auto rounded-lg shadow border border-[#969BA0] overflow-y-auto mt-5">
            <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                    <tr>
                        <th scope="col" class="px-3 py-3">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-3 py-3">
                            NIP
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Jabatan
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Golongan
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Tanggal Awal
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Tanggal Akhir
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Jenis
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Keterangan
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            Monica Adela
                        </td>
                        <td class="px-3 py-3">
                            123423423
                        </td>
                        <td class="px-3 py-3">
                            Kepala Bidang
                        </td>
                        <td class="px-3 py-3">
                            IIB
                        </td>
                        <td class="px-3 py-3">
                            12-03-2024
                        </td>
                        <td class="px-3 py-3">
                            20-03-2024
                        </td>
                        <td class="px-3 py-3">
                            Sakit
                        </td>
                        <td class="px-3 py-3">
                            Saya mengajukan cuti...
                        </td>
                        <td class="px-3 py-3">
                            <a href="/admin/cuti/form-cuti" class="flex justify-center" >
                                <img src="./../../Assets/aksi.svg" alt="">
                            </a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            Monica Adela
                        </td>
                        <td class="px-3 py-3">
                            123423423
                        </td>
                        <td class="px-3 py-3">
                            Kepala Bidang
                        </td>
                        <td class="px-3 py-3">
                            IIB
                        </td>
                        <td class="px-3 py-3">
                            12-03-2024
                        </td>
                        <td class="px-3 py-3">
                            20-03-2024
                        </td>
                        <td class="px-3 py-3">
                            Sakit
                        </td>
                        <td class="px-3 py-3">
                            Saya mengajukan cuti...
                        </td>
                        <td class="px-3 py-3 text-center">
                            <div href="/admin/absensi/detail-absensi" class="bg-[#D9D9D9] p-1 rounded px-6" >
                                Ditolak
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            Monica Adela
                        </td>
                        <td class="px-3 py-3">
                            123423423
                        </td>
                        <td class="px-3 py-3">
                            Kepala Bidang
                        </td>
                        <td class="px-3 py-3">
                            IIB
                        </td>
                        <td class="px-3 py-3">
                            12-03-2024
                        </td>
                        <td class="px-3 py-3">
                            20-03-2024
                        </td>
                        <td class="px-3 py-3">
                            Sakit
                        </td>
                        <td class="px-3 py-3">
                            Saya mengajukan cuti...
                        </td>
                        <td class="px-3 py-3 text-center">
                            <div href="/admin/absensi/detail-absensi" class="bg-[#D9D9D9] p-1 rounded px-6" >
                                Disetujui
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </x-sidebar-admin>
</body>

</html>
