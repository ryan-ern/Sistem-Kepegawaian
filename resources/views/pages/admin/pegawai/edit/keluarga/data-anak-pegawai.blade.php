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
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Edit Data Keluarga</div>
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
                    <a href="/admin/edit-pegawai/data-orangtua"
                        class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
                        Keluarga
                    </a>
                    <a href="/admin/edit-pegawai/data-skp" class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
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
                    <div class="text-[#2F5B6B] font-semibold text-[22px]">Data Anak</div>
                </div>
                <div class="tab flex gap-2 mb-3">
                    <a href="/admin/edit-pegawai/data-orangtua" class="font-medium text-[#B3B3B3] underline">Orang Tua</a>
                    <a href="/admin/edit-pegawai/data-pasangan" class="font-medium text-[#B3B3B3] ">Pasangan</a>
                    <a href="/admin/edit-pegawai/data-anak" class="font-medium text-[#4F8EA5] ">Anak</a>
                </div>
                <div class="wrap-content">
            <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                <div class="wrap">
                    <div class="text-[18px] font-medium">Aisyah</div>
                    <div class="text-[16px]">-Perempuan</div>
                </div>
                <a href="/admin/edit-pegawai/detail-anak" class="link">
                    <img src="../../Assets/book.svg" alt="">
                </a>
            </div>
        </div>
            </div>
        </div>
    </x-sidebar-admin>
</body>

</html>
