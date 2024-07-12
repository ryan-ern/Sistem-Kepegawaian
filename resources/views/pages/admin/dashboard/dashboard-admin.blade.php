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
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
    <style>
        .tab-active {
            color: #2F5B6B !important;
            text-decoration: underline !important;
        }

        .password-container {
            position: relative;
        }

        .eye-icon {
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(5%);
            cursor: pointer;
        }

        #eye-close {
            display: none;
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
                    <img src="../../Assets/total.svg" alt="">
                    <div class="text-[#616262]">Total Pegawai</div>
                    <div class="font-medium text-[22px]">{{ $sumPegawai }}</div>
                </div>
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/wanita.svg" alt="">
                    <div class="text-[#616262]">Wanita</div>
                    <div class="font-medium text-[22px]">{{ $sumWoman }}</div>
                </div>
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/pria.svg" alt="">
                    <div class="text-[#616262]">Pria</div>
                    <div class="font-medium text-[22px]">{{ $sumMan }}</div>
                </div>
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/cuti4.svg" alt="">
                    <div class="text-[#616262]">Cuti Hari Ini</div>
                    <div class="font-medium text-[22px]">{{ $sumCuti }}</div>
                </div>
                <!-- Kotak 1 -->
                <div
                    class=" p-4 text-center shadow-lg flex flex-col gap-2 items-center h-[180px] justify-center rounded-[15px] bg-white">
                    <img src="../../Assets/masuk.svg" alt="">
                    <div class="text-[#616262]">Pegawai Tidak Masuk Hari Ini</div>
                    <div class="font-medium text-[22px]">{{ $absen }}</div>
                </div>
            </div>
        </div>
        <div class="wrap mt-6 flex flex-col md:flex-row gap-7 md:gap-7">
            <div class="left w-full md:w-1/2 p-3 bg-white rounded-[10px] overflow-y-hidden shadow-lg h-[55vh]">
                <div class="add flex justify-end">
                    <button data-modal-target="tambah" data-modal-toggle="tambah"
                        class="bg-white hover:bg-slate-200 border border-black p-1 rounded-[8px] flex gap-2 items-center text-[14px] font-semibold px-3">
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
                            @foreach ($user as $u)
                                <tr class="bg-white hover:bg-gray-50 text-black hover:text-black">
                                    <td class="px-3 py-3">
                                        <div class="wrap flex gap-2 items-center text-[16px] font-semibold">
                                            <img src="{{ asset('storage/' . $u->foto) }}" alt="" width="8%">
                                            {{ $u->name }}
                                        </div>
                                    </td>
                                    <td class="px-3 py-3 text-[14px] text-[#969696]">
                                        {{ $u->role }}
                                    </td>
                                </tr>
                            @endforeach
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
                    <button id="tab1" class="text-[#969696] font-medium flex items-center gap-1"
                        onclick="showTab('tab1')">
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
                                @foreach ($cuti as $a)
                                    <div class="head text-[14px] flex justify-between">
                                        <div class="n">{{ $a->user->name }}</div>
                                        <div class="font-medium"> @php
                                            $startDate = \Carbon\Carbon::parse($a->start_date);
                                            $endDate = \Carbon\Carbon::parse($a->end_date);
                                            $daysDiff = $endDate->diffInDays($startDate);
                                        @endphp
                                            {{ $daysDiff }} hari</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="content2" class="hidden">
                            <div class="wrap flex flex-col gap-2 mt-3">
                                @foreach ($user as $sisa)
                                    <div class="head text-[14px] flex justify-between">
                                        <div class="n">{{ $sisa->name }}</div>
                                        <div class="font-medium">{{ $sisa->total_kuota_cuti }} Hari</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf
                {{-- Pop up tambah akun --}}
                <div id="tambah" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full flex justify-center items-center h-full">
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
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-[#B3B3B3] font-medium text-[14px]">Nama</label>
                                                    <input type="text" name="name" required
                                                        class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[380px]"
                                                        placeholder="Masukkan Nama">
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-[#B3B3B3] font-medium text-[14px]">NIP</label>
                                                    <input type="text" name="nip" required
                                                        class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[380px]"
                                                        placeholder="Masukkan NIP">
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-[#B3B3B3] font-medium text-[14px]">Jabatan</label>
                                                    <input type="text" name="jabatan" required
                                                        class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[380px]"
                                                        placeholder="Masukkan Jabatan">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- KANAN --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                            <div class="wrap">
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For="image"
                                                        class="text-[#B3B3B3] font-medium text-[14px]">Foto
                                                        Profil</label>
                                                    <div class="relative">
                                                        <input id="image" type="file" name="foto"
                                                            accept="image/*" class="hidden" />
                                                        <label for="image"
                                                            class="cursor-pointer bg-[#2F5B6B] text-white py-2 px-4 rounded-lg inline-block">
                                                            Unggah File
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-[#B3B3B3] font-medium text-[14px]">Nomer
                                                        Telepon</label>
                                                    <input type="text" name="no_tel" required
                                                        class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[340px]"
                                                        placeholder="Masukkan Nomer Telepon">
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-[#B3B3B3] font-medium text-[14px]">Password</label>
                                                    <input type="password" name="password" id="password"
                                                        placeholder="Masukkan Password"
                                                        class="isi font-medium text-[#4F8EA5] p-2 px-4 border focus:ring-[#4F8EA5] focus:border-[#4F8EA5] border-[#4F8EA5] rounded-[8px] w-[340px]"
                                                        required>
                                                    <div class="eye-icon absolute right-10 top-[69%] z-30">
                                                        <button type="button" class="cursor-pointer" id="eye-open"
                                                            onclick="togglePasswordVisibility('open')">
                                                            <svg id="eye-open" class="bi bi-eye-fill width="30"
                                                                height="30" viewBox="0 0 30 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M5.88773 4.11249C5.77118 3.99594 5.63282 3.90349 5.48054 3.84041C5.32827 3.77734 5.16506 3.74487 5.00023 3.74487C4.83541 3.74487 4.6722 3.77734 4.51992 3.84041C4.36764 3.90349 4.22928 3.99594 4.11273 4.11249C3.87735 4.34787 3.74512 4.66711 3.74512 4.99999C3.74512 5.33286 3.87735 5.65211 4.11273 5.88749L11.1502 12.925C10.705 13.7533 10.5385 14.703 10.6753 15.6333C10.8122 16.5636 11.2452 17.4251 11.9102 18.0901C12.5751 18.755 13.4366 19.188 14.3669 19.3249C15.2973 19.4618 16.247 19.2952 17.0752 18.85L24.1127 25.8875C24.2289 26.0046 24.3672 26.0976 24.5195 26.1611C24.6718 26.2246 24.8352 26.2572 25.0002 26.2572C25.1652 26.2572 25.3286 26.2246 25.481 26.1611C25.6333 26.0976 25.7715 26.0046 25.8877 25.8875C26.0049 25.7713 26.0979 25.633 26.1613 25.4807C26.2248 25.3284 26.2575 25.165 26.2575 25C26.2575 24.835 26.2248 24.6716 26.1613 24.5193C26.0979 24.3669 26.0049 24.2287 25.8877 24.1125L5.88773 4.11249ZM15.0002 16.875C14.503 16.875 14.026 16.6774 13.6744 16.3258C13.3228 15.9742 13.1252 15.4973 13.1252 15C13.1252 15 13.1252 14.9375 13.1252 14.9125L15.0752 16.8625L15.0002 16.875Z"
                                                                    fill="#231F20" fill-opacity="0.55" />
                                                                <path
                                                                    d="M15.2751 21.25C9.90009 21.375 6.37508 16.7625 5.27508 15C6.05817 13.7509 6.99929 12.6081 8.07508 11.6L6.25008 9.83752C4.83924 11.1669 3.6306 12.6956 2.66259 14.375C2.55288 14.565 2.49512 14.7806 2.49512 15C2.49512 15.2194 2.55288 15.435 2.66259 15.625C3.45009 16.9875 7.66259 23.75 15.0251 23.75H15.3376C16.722 23.709 18.0885 23.4255 19.3751 22.9125L17.4001 20.9375C16.7055 21.1202 15.9928 21.225 15.2751 21.25Z"
                                                                    fill="#231F20" fill-opacity="0.55" />
                                                                <path
                                                                    d="M27.3375 14.375C26.5375 12.9875 22.125 6.02496 14.6625 6.24996C13.2781 6.29103 11.9115 6.57449 10.625 7.08746L12.6 9.06246C13.2945 8.87975 14.0073 8.77494 14.725 8.74996C20.0875 8.61246 23.6125 13.2375 24.725 15C23.9226 16.2528 22.9603 17.3958 21.8625 18.4L23.75 20.1625C25.1786 18.8366 26.4042 17.3077 27.3875 15.625C27.4897 15.4306 27.5389 15.2127 27.5301 14.9933C27.5213 14.7738 27.4549 14.5606 27.3375 14.375Z"
                                                                    fill="#231F20" fill-opacity="0.55" />
                                                            </svg>

                                                        </button>
                                                        <button type="button" class="" id="eye-close"
                                                            onclick="togglePasswordVisibility('close')">
                                                            <svg id="eye-icon" class="bi bi-eye-fill" width="30"
                                                                height="30" viewBox="0 0 30 30" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2.5 15C2.5 15 6.25 6.25 15 6.25C23.75 6.25 27.5 15 27.5 15C27.5 15 23.75 23.75 15 23.75C6.25 23.75 2.5 15 2.5 15Z"
                                                                    stroke="#868484" stroke-width="3"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path
                                                                    d="M15 18.75C17.0711 18.75 18.75 17.0711 18.75 15C18.75 12.9289 17.0711 11.25 15 11.25C12.9289 11.25 11.25 12.9289 11.25 15C11.25 17.0711 12.9289 18.75 15 18.75Z"
                                                                    stroke="#868484" stroke-width="3"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-center mt-10">
                                        <button data-modal-target="simpan" data-modal-toggle="simpan"
                                            data-modal-hide="tambah"
                                            class="bg-[#4F8EA5] hover:bg-[#396b7e] text-white py-2 px-[20px] text-center w-[200px] rounded-lg">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- tambah akun --}}
                {{-- POP UP simpan --}}
                <div id="simpan" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div data-modal-hide="simpan" class="relative p-4 w-full flex justify-center items-center h-full">
                        <!-- Modal content -->
                        <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                    data-modal-hide="simpan">
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
                                    <div class="head font-medium text-[28px]">Akun Berhasil Ditambahkan</div>
                                    <div class="icon">
                                        <img src="../../Assets/ceklist.svg" alt="">
                                    </div>
                                    <button data-modal-hide="simpan"
                                        class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                        Selesai
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- POP UP simpan --}}
            </form>
        </div>
    </x-sidebar-admin>

    <script>
        // TAB CUTI
        document.addEventListener("DOMContentLoaded", function() {
            // Hide all tab contents except the first one
            document.querySelectorAll('[id^="content"]').forEach((el, index) => {
                if (index !== 0) {
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

        function togglePasswordVisibility(action) {
            var passwordInput = document.getElementById("password");
            var eyeOpenIcon = document.getElementById("eye-open");
            var eyeCloseIcon = document.getElementById("eye-close");

            if (action === "open") {
                passwordInput.type = "text";
                eyeOpenIcon.style.display = "none";
                eyeCloseIcon.style.display = "block";
            } else {
                passwordInput.type = "password";
                eyeOpenIcon.style.display = "block";
                eyeCloseIcon.style.display = "none";
            }
        }
    </script>
</body>

</html>
