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
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Data Pegawai</div>
        <div class="flex justify-end">
            <div class="sears relative">
                <div class="absolute right-[10px] top-[8px]">
                    <img src="./../Assets/cari.svg" alt="">
                </div>
                <input type="text" class="rounded-lg border border-gray-400 pr-10" placeholder="Search here">
            </div>
        </div>
        {{-- table --}}
        <div class="relative w-full overflow-x-auto rounded-lg border border-[#969BA0] overflow-y-auto mt-5">
            <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                    <tr>
                        <th scope="col" class="px-3 py-3">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-3 py-3">
                            NIP
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Nama Pegawai
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Jabatan
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Golongan
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            <div class="w-[73px] h-[82px]">
                                <img class="w-full h-full object-cover" src="./../Assets/man.jpg" alt="">
                            </div>
                        </td>
                        <td class="px-3 py-3">
                            12345678 123456 1 123
                        </td>
                        <td class="px-3 py-3">
                            Muhammad Udin
                        </td>
                        <td class="px-3 py-3">
                            Sekretaris
                        </td>
                        <td class="px-3 py-3">
                            Gol II
                        </td>
                        <td class="px-3 py-3">
                            <div class="p-1 bg-slate-400 rounded-sm text-black inline-block px-4">Aktif</div>
                        </td>
                        <td class="px-3 py-3">
                            <div class="wrap">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown1" type="button">
                                    <div class="inline-block bg-[#9BB8C3] px-5 p-2 rounded-lg">
                                        <img src="./../Assets/titik.svg" alt="">
                                    </div>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown1"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[120px]">
                                    <ul class="py-2 text-sm text-[#4F8EA5]" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="/admin/edit-pegawai"
                                                class=" px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <img src="./../Assets/edit.svg" alt="">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/admin/lihat-pegawai"
                                                class=" px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <img src="./../Assets/lihat.svg" alt="">
                                                Lihat
                                            </a>
                                        </li>
                                        <li>
                                            <button data-modal-target="penghargaan" data-modal-toggle="penghargaan"
                                                class=" px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <img src="./../Assets/hapus.svg" alt="">
                                                Hapus
                                                </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            <div class="w-[73px] h-[82px]">
                                <img class="w-full h-full object-cover" src="./../Assets/man.jpg" alt="">
                            </div>
                        </td>
                        <td class="px-3 py-3">
                            12345678 123456 1 123
                        </td>
                        <td class="px-3 py-3">
                            Muhammad Udin
                        </td>
                        <td class="px-3 py-3">
                            Sekretaris
                        </td>
                        <td class="px-3 py-3">
                            Gol II
                        </td>
                        <td class="px-3 py-3">
                            <div class="p-1 bg-slate-400 rounded-sm text-black inline-block px-4">Aktif</div>
                        </td>
                        <td class="px-3 py-3">
                            <div class="wrap">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown2" type="button">
                                    <div class="inline-block bg-[#9BB8C3] px-5 p-2 rounded-lg">
                                        <img src="./../Assets/titik.svg" alt="">
                                    </div>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown2"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[120px]">
                                    <ul class="py-2 text-sm text-[#4F8EA5]" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="/admin/edit-pegawai"
                                                class=" px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <img src="./../Assets/edit.svg" alt="">
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/admin/lihat-pegawai"
                                                class=" px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <img src="./../Assets/lihat.svg" alt="">
                                                Lihat
                                            </a>
                                        </li>
                                        <li>
                                            <button data-modal-target="penghargaan" data-modal-toggle="penghargaan"
                                                class=" px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                <img src="./../Assets/hapus.svg" alt="">
                                                Hapus
                                                </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            {{-- hapus --}}
            <div id="penghargaan" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div data-modal-hide="penghargaan" class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="penghargaan">
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
                                <button data-modal-hide="penghargaan" class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                    Selesai
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- hapus --}}
        </div>
    </x-sidebar-admin>
</body>

</html>
