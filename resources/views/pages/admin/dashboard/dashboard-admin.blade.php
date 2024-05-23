<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./Assets/logoo.png">
    <style>
        .tab-active {
            color: #2F5B6B !important;
            text-decoration: underline !important;
        }
    </style>
</head>

<body>
    <x-sidebar-admin>
        <div class="head">
            <div class="grid w-full h-full grid-cols-2 md:grid-cols-5 gap-2 md:gap-[25px]">
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/pegawai.svg" alt="">
                    <div class="text-[#616262]">Total Pegawai</div>
                    <div class="font-medium text-[22px]">35</div>
                </div>
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/pegawai.svg" alt="">
                    <div class="text-[#616262]">Wanita</div>
                    <div class="font-medium text-[22px]">15</div>
                </div>
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/pegawai.svg" alt="">
                    <div class="text-[#616262]">Pria</div>
                    <div class="font-medium text-[22px]">20</div>
                </div>
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/pegawai.svg" alt="">
                    <div class="text-[#616262]">Cuti Hari Ini</div>
                    <div class="font-medium text-[22px]">2</div>
                </div>
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/pegawai.svg" alt="">
                    <div class="text-[#616262]">Pegawai Masuk</div>
                    <div class="font-medium text-[22px]">5</div>
                </div>
            </div>
        </div>
        <div class="wrap mt-6 flex flex-col md:flex-row gap-7 md:gap-7">
            <div class="left w-full md:w-1/2 p-3 bg-white rounded-[10px] overflow-y-hidden shadow-lg h-[55vh]">
                <div class="add flex justify-end">
                    <button data-modal-target="tambah" data-modal-toggle="tambah" class="bg-white hover:bg-slate-200 border border-black p-1 rounded-[8px] flex gap-2 items-center text-[14px] font-semibold px-3">
                        <img class="w-[12px]" src="./../../Assets/add.svg" alt="">
                        Tambah Akun
                    </button>
                </div>
                {{-- table --}}
                <div class="relative w-full overflow-x-auto rounded-lg shadow max-h-full overflow-y-auto mt-5">
                    <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                        <thead class="text-base text-white bg-slate-50 shadow-lg rounded-lg">
                            <tr>
                                <th scope="col" class="px-3 py-3 text-[#4F8EA5] text-center">
                                    Nama
                                </th>
                                <th scope="col" class="px-3 py-3 text-[#4F8EA5]">
                                    Role
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">
                                    <div class="wrap flex gap-2 items-center text-[16px] font-semibold">
                                        <img src="./../../Assets/role.svg" alt="">
                                        Monica Adela
                                    </div>
                                </td>
                                <td class="px-3 py-3 text-[14px] text-[#969696]">
                                    Admin
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">
                                    <div class="wrap flex gap-2 items-center text-[16px] font-semibold">
                                        <img src="./../../Assets/role.svg" alt="">
                                        Monica Adela
                                    </div>
                                </td>
                                <td class="px-3 py-3 text-[14px] text-[#969696]">
                                    Admin
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">
                                    <div class="wrap flex gap-2 items-center text-[16px] font-semibold">
                                        <img src="./../../Assets/role.svg" alt="">
                                        Monica Adela
                                    </div>
                                </td>
                                <td class="px-3 py-3 text-[14px] text-[#969696]">
                                    Admin
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">
                                    <div class="wrap flex gap-2 items-center text-[16px] font-semibold">
                                        <img src="./../../Assets/role.svg" alt="">
                                        Monica Adela
                                    </div>
                                </td>
                                <td class="px-3 py-3 text-[14px] text-[#969696]">
                                    Admin
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">
                                    <div class="wrap flex gap-2 items-center text-[16px] font-semibold">
                                        <img src="./../../Assets/role.svg" alt="">
                                        Monica Adela
                                    </div>
                                </td>
                                <td class="px-3 py-3 text-[14px] text-[#969696]">
                                    Admin
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">
                                    <div class="wrap flex gap-2 items-center text-[16px] font-semibold">
                                        <img src="./../../Assets/role.svg" alt="">
                                        Monica Adela
                                    </div>
                                </td>
                                <td class="px-3 py-3 text-[14px] text-[#969696]">
                                    Admin
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">
                                    <div class="wrap flex gap-2 items-center text-[16px] font-semibold">
                                        <img src="./../../Assets/role.svg" alt="">
                                        Monica Adela
                                    </div>
                                </td>
                                <td class="px-3 py-3 text-[14px] text-[#969696]">
                                    Admin
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="right w-full md:w-1/2 p-3 bg-[#F9F9F9] rounded-[10px] overflow-y-hidden shadow-lg h-[55vh]">
                <div class="add flex justify-between">
                    <div class="font-semibold">
                        Data Cuti Pegawai
                    </div>
                    <a href="/admin/cuti">See all</a>
                </div>
                <div class="tab flex gap-4 mt-1">
                    <button id="tab1" class="text-[#969696] font-medium flex items-center gap-1" onclick="showTab('tab1')">
                        Cuti
                    </button>
                    <button id="tab2" class="text-[#969696] flex items-center gap-1" onclick="showTab('tab2')">
                        Kuota Cuti
                    </button>
                </div>
                <div class="head text-[14px] font-medium mt-1 flex justify-between">
                    <div class="n">Nama</div>
                    <div class="n">Hari</div>
                </div>
                {{-- table --}}
                <div class="relative w-full overflow-x-auto rounded-lg max-h-full overflow-y-auto">
                    <div id="tabContent">
                        <div id="content1">
                            <div class="wrap flex flex-col gap-2 mt-3">
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                            </div>
                        </div>
                        <div id="content2" class="hidden">
                            <div class="wrap flex flex-col gap-2 mt-3">
                                
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                                <div class="head text-[14px] flex justify-between">
                                    <div class="n">Rafi Ramadhan Pratama</div>
                                    <div class="font-medium">3d ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pop up tambah akun --}}
            <div id="tambah" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white w-[65%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <div class="text-[#4F8EA5] font-semibold text-[22px]">
                                Tambah Akun
                            </div>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="tambah">
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
                            <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                {{-- KIRI --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                    <div class="wrap">
                                        <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                            <label For="" class="text-[#B3B3B3] font-medium text-[14px]">Nama</label>
                                            <input type="text" class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[380px]" placeholder="Masukkan Nama">
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                        <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                            <label For="" class="text-[#B3B3B3] font-medium text-[14px]">NIP</label>
                                            <input type="text" class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[380px]" placeholder="Masukkan NIP">
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                        <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                            <label For="" class="text-[#B3B3B3] font-medium text-[14px]">Jabatan</label>
                                            <input type="text" class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[380px]" placeholder="Masukkan Jabatan">
                                        </div>
                                    </div>
                                </div>
                                {{-- KANAN --}}
                                <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                    <div class="wrap">
                                        <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                            <label For="image" class="text-[#B3B3B3] font-medium text-[14px]">Nama</label>
                                            <div class="relative">
                                                <input type="file" id="image" accept="image/*" class="hidden"  />
                                                <label for="image"
                                                    class="cursor-pointer bg-[#4F8EA5] text-white  py-2 px-4 rounded-lg inline-block w-[380px]">
                                                    Unggah File
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                        <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                            <label For="" class="text-[#B3B3B3] font-medium text-[14px]">Nomer Telepon</label>
                                            <input type="text" class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[380px]" placeholder="Masukkan Nomer Telepon">
                                        </div>
                                    </div>
                                    <div class="wrap">
                                        <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                        <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                            <label For="" class="text-[#B3B3B3] font-medium text-[14px]">Password</label>
                                            <input type="password" class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[380px]" placeholder="Masukkan Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center mt-10">
                                <button class="bg-[#4F8EA5] hover:bg-[#396b7e] text-white py-2 px-[20px] text-center w-[200px] rounded-lg">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- tambah akun --}}
        </div>
    </x-sidebar-admin>

    <script>
        // TAB CUTI
        document.addEventListener("DOMContentLoaded", function() {
            // Hide all tab contents except the first one
            document.querySelectorAll('[id^="content"]').forEach((el, index) => {
                if(index !== 0) {
                    el.classList.add('hidden');
                }
            });
        });

        function showTab(tab) {
            // Hide all tab contents
            document.querySelectorAll('[id^="content"]').forEach((el) => {
                el.classList.add('hidden');
            });

            // Remove active class from all buttons
            document.querySelectorAll('[id^="tab"]').forEach((btn) => {
                btn.classList.remove('tab-active');
            });

            // Show the selected tab content
            document.getElementById('content' + tab.slice(-1)).classList.remove('hidden');
            // Add active class to the clicked button
            document.getElementById(tab).classList.add('tab-active');
        }
    </script>
</body>

</html>
