<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-admin>
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Data Absensi Pegawai</div>
        {{-- konten --}}
        <div class="">
            <div class="flex justify-between">
                <div class="left flex gap-2">
                    <button class="bg-[#9BB8C3] hover:bg-[#485e66] p-1 rounded px-6">Hari Ini</button>
                    <button class="bg-[#9BB8C3] hover:bg-[#485e66] p-1 rounded px-6">Semua</button>
                </div>
                <div class="wrap flex gap-3">
                    <div class="sears relative">
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-4 text-w-full bg-transparent"
                            placeholder="Search here Name">
                    </div>
                    <div class="car flex gap-2 items-center">
                        <div class="lef">
                            <input type="date"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-4 text-w-full bg-transparent">
                        </div>
                        <div class="ri">
                            <button class="bg-[#9BB8C3] p-1 rounded px-6">Cari</button>
                        </div>
                    </div>
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
                                Tanggal
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Jam
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
                                12314534534534
                            </td>
                            <td class="px-3 py-3">
                                13-02-2024
                            </td>
                            <td class="px-3 py-3">
                                08:00:50
                            </td>
                            <td class="px-3 py-3 flex items-center gap-2">
                                <div class="under inline-block p-1 px-3 bg-[#E9F6FB] text-black w-[70px] text-center rounded-sm">Sakit</div>
                                <img class="bg-[#4F8EA5] py-1 px-3 rounded-sm" src="../../Assets/doc.svg" alt="">
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
                                12314534534534
                            </td>
                            <td class="px-3 py-3">
                                13-02-2024
                            </td>
                            <td class="px-3 py-3">
                                08:00:50
                            </td>
                            <td class="px-3 py-3 flex items-center gap-2">
                                <div class="under inline-block p-1 px-3 bg-[#E9F6FB] text-black w-[70px] text-center rounded-sm">Izin</div>
                                <img class="bg-[#4F8EA5] py-1 px-3 rounded-sm" src="../../Assets/doc.svg" alt="">
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
                                12314534534534
                            </td>
                            <td class="px-3 py-3">
                                13-02-2024
                            </td>
                            <td class="px-3 py-3">
                                08:00:50
                            </td>
                            <td class="px-3 py-3 flex items-center gap-2">
                                <div class="under inline-block p-1 px-3 bg-[#E9F6FB] text-black w-[70px] text-center rounded-sm">Sakit</div>
                                <img class="bg-[#4F8EA5] py-1 px-3 rounded-sm" src="../../Assets/doc.svg" alt="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-sidebar-admin>
</body>

</html>
