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
                    <a href="/admin/edit-pegawai/keluarga-orangtua"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Data Diri
                    </a>
                    <a href="/admin/edit-pegawai/pendidikan"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Pendidikan
                    </a>
                    <a href="/admin/edit-pegawai/keluarga-orangtua"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Keluarga
                    </a>
                    <a href="/admin/edit-pegawai/skp" class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        SKP
                    </a>
                    <a href="/admin/edit-pegawai/penghargaan"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Penghargaan
                    </a>
                    <a href="/admin/edit-pegawai/kinerja"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Laporan Kinerja
                    </a>
                    <a href="/admin/edit-pegawai/cpns"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        CPNS/PNS
                    </a>
                    <a href="/admin/edit-pegawai/diklat"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Diklat/Kursus
                    </a>
                    <a href="/admin/edit-pegawai/pmk"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md text-[14px]">
                        Peninjauan Masa Kerja
                    </a>
                    <a href="/admin/edit-pegawai/golongan"
                        class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
                        Golongan
                    </a>
                    <a href="/admin/edit-pegawai/jabatan"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Jabatan
                    </a>
                </div>
            </div>
            <div class="right w-full md:w-[88%]">
                <div class="hea flex justify-between">
                    <div class="text-[#2F5B6B] font-semibold text-[22px]">Data Golongan</div>
                </div>
                <div class="wrap-content">
            <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                <div class="wrap">
                    <div class="text-[16px]">Penata...</div>
                    <div class="text-[16px]">IIB</div>
                </div>
                <a href="/admin/edit-pegawai/detail-golongan" class="link">
                    <img src="../../Assets/book.svg" alt="">
                </a>
            </div>
            <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                <div class="wrap">
                    <div class="text-[16px]">Penata...</div>
                    <div class="text-[16px]">IVC</div>
                </div>
                <a href="/admin/edit-pegawai/detail-golongan" class="link">
                    <img src="../../Assets/book.svg" alt="">
                </a>
            </div>
            <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                <div class="wrap">
                    <div class="text-[16px]">Penata...</div>
                    <div class="text-[16px]">IA</div>
                </div>
                <a href="/admin/edit-pegawai/detail-golongan" class="link">
                    <img src="../../Assets/book.svg" alt="">
                </a>
            </div>
        </div>
            </div>
        </div>
    </x-sidebar-admin>
</body>

</html>
