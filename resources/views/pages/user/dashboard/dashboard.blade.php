<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Dashboard">
        <div class="wrap pb-3 h-full w-full md:p-[20px] flex items-center">
            <div class="grid w-full h-full grid-cols-2 md:grid-cols-4 gap-2 md:gap-[25px]">
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-golongan"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/golongan.svg" alt="">
                    Riwayat Golongan
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-pendidikan"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/pendidikan.svg" alt="">
                    Riwayat Pendidikan
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-jabatan"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/jabatan.svg" alt="">
                    Riwayat Jabatan
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-pmk"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/peninjauan.svg" alt="">
                    Riwayat Peninjauan Masa Kerja
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-cpns"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/cpns.svg" alt="">
                    Riwayat CPNS/PNS
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-diklat"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/diklat.svg" alt="">
                    Riwayat Diklat/Kursus
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-orangtua"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/keluarga.svg" alt="">
                    Riwayat Keluarga
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-skp"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/skp.svg" alt="">
                    Riwayat SKP
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-penghargaan"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/penghargaan.svg" alt="">
                    Riwayat Penghargaan
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-laporan"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/laporan2.svg" alt="">
                    Riwayat Laporan Kinerja
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-cuti"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/Cuti.svg" alt="">
                    Riwayat Cuti
                </a>
                <!-- Kotak 1 -->
                <a href="/dashboard/riwayat-diri"
                    class=" p-4 text-white text-center hover:bg-[#4F8EA5] shadow flex flex-col gap-1 items-center h-[180px] justify-center rounded bg-[#093545]">
                    <img src="./Assets/diri.svg" alt="">
                    Riwayat Data Diri
                </a>
            </div>
        </div>
    </x-sidebar-user>
</body>

</html>
