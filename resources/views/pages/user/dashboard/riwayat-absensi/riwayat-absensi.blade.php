<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Riwayat Absensi">
        <div class="font-semibold text-[#2F5B6B] mb-2 md:mb-6">Berikut tampilan riwayat pengajuan absensi</div>
        {{-- hari --}}
        <div class="flex">
            <div class="wrap flex">
                <div class="car flex gap-1 md:gap-5 flex-col md:flex-row">
                    <div class="lef">
                        <div class="text-[25px]">JAM : 08:00:50</div>
                    </div>
                    <div class="ri">
                        <div class="text-[25px]">TANGGAL : 13-02-2024</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <div class="wrap flex">
                <div class="car flex gap-2 items-center">
                    <div class="lef">
                        <input type="date" class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-4 text-w-full bg-transparent">
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
                <thead class="text-base text-white bg-[#2F5B6B] rounded-lg">
                    <tr>
                        <th scope="col" class="px-3 py-3">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Jam Masuk
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Jam Keluar
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Keterangan
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            12-03-2024
                        </td>
                        <td class="px-3 py-3">
                            08:30:15
                        </td>
                        <td class="px-3 py-3">
                            16:00:30
                        </td>
                        <td class="px-3 py-3">
                            Masuk
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            2
                        </td>
                        <td class="px-3 py-3">
                            12-03-2024
                        </td>
                        <td class="px-3 py-3">
                            -
                        </td>
                        <td class="px-3 py-3">
                            -
                        </td>
                        <td class="px-3 py-3">
                            Sakit
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            3
                        </td>
                        <td class="px-3 py-3">
                            12-03-2024
                        </td>
                        <td class="px-3 py-3">
                            08:30:15
                        </td>
                        <td class="px-3 py-3">
                            16:00:30
                        </td>
                        <td class="px-3 py-3">
                            Masuk
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            4
                        </td>
                        <td class="px-3 py-3">
                            12-03-2024
                        </td>
                        <td class="px-3 py-3">
                            08:30:15
                        </td>
                        <td class="px-3 py-3">
                            16:00:30
                        </td>
                        <td class="px-3 py-3">
                            Masuk
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-sidebar-user>
</body>

</html>
