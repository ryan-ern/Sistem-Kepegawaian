<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Cuti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Riwayat Cuti">
        <div class="font-semibold text-[#2F5B6B] mb-2 md:mb-6">Berikut tampilan riwayat pengajuan cuti</div>
        {{-- hari --}}
        <div class="flex justify-center">
            <div class="wrap flex m-auto">
                <div class="car text-white flex gap-5 w-auto items-center bg-[#093545] rounded p-3">
                    <div class="left flex flex-col">
                        <div class="text-[40px] font-semibold">12 Hari</div>
                        <div class="text-[20px]">Sisa Cuti</div>
                    </div>
                    <div class="ri">
                        <img src="../Assets/cut.svg" alt="">
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
                            NIP
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Tanggal Awal
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Tanggal Akhir
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Jenis Cuti
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
                        <td title="1231456562" class="px-3 py-3">
                            1231456562
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
                            <div class="p-1 bg-[#F5F2BD] inline-block rounded text-center">Proses</div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            2
                        </td>
                        <td title="1231456562" class="px-3 py-3">
                            1231456562
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
                            <div class="p-1 bg-[#4BBB85] inline-block rounded text-center">Diterima</div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            3
                        </td>
                        <td title="1231456562" class="px-3 py-3">
                            1231456562
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
                            <div class="p-1 bg-[#FF0606] inline-block rounded text-center">Ditolak</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-sidebar-user>
</body>

</html>
