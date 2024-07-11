<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <style>
        /* Menambahkan CSS khusus */

        body {
            font-family: 'Poppins', sans-serif;
        }

        .menu-toggle {
            display: none;
        }

        @media (max-width: 768px) {
            .admin {
                display: flex;
            }

            .side {
                position: fixed;
                top: 0;
                left: -73%;
                /* Sembunyikan sidebar di luar layar */
                transition: left 0.6s ease;
                /* Animasi saat sidebar muncul */
                /* width: 200px; */
                height: 100vh;
                background-color: white;
                /* Warna latar belakang sidebar */
                z-index: 10;

                --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
                --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }

            .menu-toggle {
                display: block;
            }

            .content {
                flex: 1;
                padding-left: 0;
            }

            .head {
                padding-left: 20px;
            }

            .menu {
                margin-top: 25px;
            }

            .side.show {
                left: 0;
                /* Tampilkan sidebar saat kelas 'show' ditambahkan */
            }

            /* Style untuk ikon close (X) */
            .menu-toggle.open .close-icon {
                display: block;
            }

            .menu-toggle.open .hamburger-icon {
                display: none;
            }

            .menu-toggle .close-icon {
                display: none;
            }

            .menu-toggle .hamburger-icon {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="admin">
        @php
            $dashboard = ['admin/dashboard'];
        @endphp
        @php
            $pegawai = [
                'admin/pegawai',
                'admin/edit-pegawai/' . request()->route('id'),
                'admin/edit-pegawai/data-diri/' . request()->route('id'),
                'admin/edit-pegawai/data-pendidikan/'. request()->route('id'),
                'admin/edit-pegawai/data-pendidikan/show/'. request()->route('id'),
                'admin/edit-pegawai/data-ortu/'. request()->route('id'),
                'admin/edit-pegawai/data-ortu/show/'. request()->route('id'),
                'admin/edit-pegawai/data-anak/'. request()->route('id'),
                'admin/edit-pegawai/data-anak/show/'. request()->route('id'),
                'admin/edit-pegawai/data-pasangan/'. request()->route('id'),
                'admin/edit-pegawai/data-pasangan/show/'. request()->route('id'),
                'admin/edit-pegawai/data-skp/'. request()->route('id'),
                'admin/edit-pegawai/data-skp/show/'. request()->route('id'),
                'admin/edit-pegawai/data-penghargaan/'. request()->route('id'),
                'admin/edit-pegawai/data-penghargaan/show/'. request()->route('id'),
                'admin/edit-pegawai/data-kinerja/'. request()->route('id'),
                'admin/edit-pegawai/data-kinerja/show/'. request()->route('id'),
                'admin/edit-pegawai/data-pns/'. request()->route('id'),
                'admin/edit-pegawai/data-pns/show/'. request()->route('id'),
                'admin/edit-pegawai/data-diklat/'. request()->route('id'),
                'admin/edit-pegawai/data-diklat/show/'. request()->route('id'),
                'admin/edit-pegawai/data-pmk/'. request()->route('id'),
                'admin/edit-pegawai/data-pmk/show/'. request()->route('id'),
                'admin/edit-pegawai/data-golongan/'. request()->route('id'),
                'admin/edit-pegawai/data-golongan/show/'. request()->route('id'),
                'admin/edit-pegawai/data-jabatan/'. request()->route('id'),
                'admin/edit-pegawai/data-jabatan/show/'. request()->route('id'),
                'admin/lihat-pegawai'. request()->route('id'),
            ];
        @endphp
        @php
            $cuti = ['admin/cuti', 'admin/cuti/form-cuti'];
        @endphp
        @php
            $absensi = ['admin/absensi', 'admin/absensi/detail-absensi'];
        @endphp
        {{-- NAVBAR --}}
        <div
            class="head h-[65px] md:h-[70px] shadow-lg bg-white px-5 w-full fixed top-0  z-10 flex items-center justify-between">
            <div class="wrap w-full flex items-center justify-between">
                <div class="head pt-3 text-[#2F5B6B] hidden gap-1 items-center font-semibold text-[12px] mb-4 md:flex">
                    <div class="logo w-[45px] aspect-auto">
                        <img class="w-full" src="../../../../Assets/logoo.png" alt="">
                    </div>
                    Laboratorium Kesehatan <br> Provinsi Lampung
                </div>
                <div class="wrap flex gap-6 md:gap-[60px]">
                    <div class="notif flex items-center">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="notifikasi" class="relative">
                            <img class="w-[35px]" src="./../../Assets/notif.svg" alt="">
                            @if ($notifications->count() > 0)
                                <span
                                    class="absolute top-[-10px] inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                                    {{ $notifications->count() }}
                                </span>
                            @endif
                        </button>
                        <!-- Dropdown menu -->
                        <div id="notifikasi"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow max-h-[350px] overflow-y-auto">
                            <ul class="py-2 text-sm text-[#4F8EA5]" aria-labelledby="dropdownDefaultButton">
                                @foreach ($notifications as $notification)
                                    <li>
                                        <button data-modal-target="notification-{{ $loop->iteration }}"
                                            data-modal-toggle="notification-{{ $loop->iteration }}"
                                            class="px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                            <div class="ledt">
                                                <img class="w-[20px]" src="../../../Assets/notif2.svg" alt="">
                                            </div>
                                            <div class="ledt text-[#4F8EA5] flex flex-col items-start">
                                                <div class="text-[14px] font-medium">{{ $notification->user->name }}
                                                </div>
                                                <div class="text-[12px]">Pengajuan
                                                    {{ formatModelName(class_basename($notification)) }}
                                                </div>
                                            </div>
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="wrap flex items-center gap-2">
                        <div class="icon w-[30px] aspect-square">
                            <img class="w-full h-full object-cover" src="../../../../Assets/adminn.png" alt="">
                        </div>
                        <div class="text-[15px] text-[#2F5B6B]">Admin</div>
                    </div>
                </div>
            </div>
            <!-- Tambahkan tombol toggle menu -->
            <button class="menu-toggle lg:hidden">
                <svg class="w-6 h-6 hamburger-icon" fill="none" stroke="black" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
                <svg class="w-6 h-6 close-icon" fill="none" stroke="black" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        {{-- SIDEBAR --}}
        <div
            class="side md:pt-[120px] bg-white shadow-md w-[70%] md:w-[175px] h-screen fixed  p-3 md:px-[10px] text-white">
            {{-- MENU --}}
            <div class="menu  flex flex-col h-[80%] md:h-[100%] justify-between">
                <div class="menu flex flex-col gap-3 ">
                    {{-- dashboard --}}
                    <a href="/admin/dashboard"
                        class="link flex items-center gap-2 bg-[#F0F5FE] shadow-md p-3 px-6 rounded-full @if (in_array(Request::path(), $dashboard)) bg-[#F0F5FE] text-[#084453] shadow-md @else bg-white text-[#616262] @endif">
                        <div class="icon">
                            <svg class="@if (in_array(Request::path(), $dashboard)) fill-[#084453] @else fill-[#616262] @endif"
                                width="13" height="15" viewBox="0 0 13 15" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.5636 6.55826L7.07826 0.951964C7.01213 0.88528 6.93344 0.832352 6.84674 0.796232C6.76004 0.760112 6.66705 0.741516 6.57313 0.741516C6.47921 0.741516 6.38622 0.760112 6.29952 0.796232C6.21282 0.832352 6.13413 0.88528 6.06799 0.951964L0.58265 6.56537C0.449918 6.69917 0.34509 6.85801 0.274253 7.03266C0.203415 7.20731 0.16798 7.3943 0.170004 7.58276V13.5448C0.169453 13.909 0.308577 14.2595 0.558727 14.5242C0.808876 14.789 1.15101 14.9477 1.51466 14.9677H11.6316C11.9953 14.9477 12.3374 14.789 12.5875 14.5242C12.8377 14.2595 12.9768 13.909 12.9763 13.5448V7.58276C12.9768 7.20066 12.8289 6.83329 12.5636 6.55826V6.55826ZM5.15021 13.5448V9.27603H7.99605V13.5448H5.15021ZM11.5533 13.5448H9.41896V8.56457C9.41896 8.37588 9.34401 8.19492 9.21058 8.06149C9.07716 7.92807 8.89619 7.85311 8.7075 7.85311H4.43875C4.25006 7.85311 4.0691 7.92807 3.93568 8.06149C3.80225 8.19492 3.7273 8.37588 3.7273 8.56457V13.5448H1.59292V7.5543L6.57313 2.46737L11.5533 7.58276V13.5448Z" />
                            </svg>

                        </div>
                        <div class="text-[14px] font-medium">Dashboard</div>
                    </a>
                    {{-- dashboard --}}
                    {{-- pegawai --}}
                    <a href="/admin/pegawai"
                        class="link flex items-center gap-2 bg-[#F0F5FE] shadow-md p-3 px-6 rounded-full @if (in_array(Request::path(), $pegawai)) bg-[#F0F5FE] text-[#084453] shadow-md @else bg-white text-[#616262] @endif">
                        <div class="icon">
                            <svg width="14" height="18" viewBox="0 0 14 18"
                                class="@if (in_array(Request::path(), $pegawai)) fill-[#084453] @else fill-[#616262] @endif"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 8C7.79113 8 8.56448 7.76541 9.22228 7.32588C9.88008 6.88635 10.3928 6.26164 10.6955 5.53074C10.9983 4.79983 11.0775 3.99556 10.9231 3.21964C10.7688 2.44372 10.3878 1.73098 9.82843 1.17157C9.26902 0.612164 8.55629 0.231202 7.78036 0.0768607C7.00444 -0.0774802 6.20017 0.00173312 5.46927 0.304484C4.73836 0.607234 4.11365 1.11992 3.67412 1.77772C3.2346 2.43552 3 3.20888 3 4C3 5.06087 3.42143 6.07828 4.17157 6.82843C4.92172 7.57857 5.93913 8 7 8ZM7 2C7.39556 2 7.78224 2.1173 8.11114 2.33706C8.44004 2.55683 8.69638 2.86918 8.84776 3.23463C8.99913 3.60009 9.03874 4.00222 8.96157 4.39018C8.8844 4.77814 8.69392 5.13451 8.41421 5.41422C8.13451 5.69392 7.77814 5.8844 7.39018 5.96157C7.00222 6.03874 6.60009 5.99914 6.23463 5.84776C5.86918 5.69639 5.55682 5.44004 5.33706 5.11114C5.1173 4.78224 5 4.39556 5 4C5 3.46957 5.21071 2.96086 5.58579 2.58579C5.96086 2.21072 6.46957 2 7 2Z" />
                                <path
                                    d="M7 10C5.14348 10 3.36301 10.7375 2.05025 12.0503C0.737498 13.363 0 15.1435 0 17C0 17.2652 0.105357 17.5196 0.292893 17.7071C0.48043 17.8946 0.734784 18 1 18C1.26522 18 1.51957 17.8946 1.70711 17.7071C1.89464 17.5196 2 17.2652 2 17C2 15.6739 2.52678 14.4021 3.46447 13.4645C4.40215 12.5268 5.67392 12 7 12C8.32608 12 9.59785 12.5268 10.5355 13.4645C11.4732 14.4021 12 15.6739 12 17C12 17.2652 12.1054 17.5196 12.2929 17.7071C12.4804 17.8946 12.7348 18 13 18C13.2652 18 13.5196 17.8946 13.7071 17.7071C13.8946 17.5196 14 17.2652 14 17C14 15.1435 13.2625 13.363 11.9497 12.0503C10.637 10.7375 8.85652 10 7 10V10Z" />
                            </svg>
                        </div>
                        <div class="text-[14px]  font-medium">Pegawai</div>
                    </a>
                    {{-- pegawai --}}
                    {{-- absensi --}}
                    <a href="/admin/absensi"
                        class="link flex items-center gap-2 bg-[#F0F5FE] shadow-md p-3 px-6 rounded-full @if (in_array(Request::path(), $absensi)) bg-[#F0F5FE] text-[#084453] shadow-md @else bg-white text-[#616262] @endif">
                        <div class="icon">
                            <svg width="16" height="20" viewBox="0 0 16 20"
                                class="@if (in_array(Request::path(), $absensi)) fill-[#084453] @else fill-[#616262] @endif"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 14H5C4.73478 14 4.48043 14.1054 4.29289 14.2929C4.10536 14.4804 4 14.7348 4 15C4 15.2652 4.10536 15.5196 4.29289 15.7071C4.48043 15.8946 4.73478 16 5 16H11C11.2652 16 11.5196 15.8946 11.7071 15.7071C11.8946 15.5196 12 15.2652 12 15C12 14.7348 11.8946 14.4804 11.7071 14.2929C11.5196 14.1054 11.2652 14 11 14Z"
                                    fill="#616262" />
                                <path
                                    d="M5 12H8C8.26522 12 8.51957 11.8946 8.70711 11.7071C8.89464 11.5196 9 11.2652 9 11C9 10.7348 8.89464 10.4804 8.70711 10.2929C8.51957 10.1054 8.26522 10 8 10H5C4.73478 10 4.48043 10.1054 4.29289 10.2929C4.10536 10.4804 4 10.7348 4 11C4 11.2652 4.10536 11.5196 4.29289 11.7071C4.48043 11.8946 4.73478 12 5 12V12Z"
                                    fill="#616262" />
                                <path
                                    d="M15.74 6.33018L10.3 0.33018C10.2065 0.226587 10.0924 0.143709 9.96492 0.0868754C9.83747 0.0300414 9.69954 0.000509805 9.56 0.000179976H2.56C2.22775 -0.00378312 1.89797 0.05774 1.5895 0.181236C1.28103 0.304732 0.999904 0.487783 0.762182 0.719934C0.524459 0.952085 0.334794 1.22879 0.204018 1.53425C0.0732421 1.8397 0.00391638 2.16793 0 2.50018V17.5002C0.00391638 17.8324 0.0732421 18.1607 0.204018 18.4661C0.334794 18.7716 0.524459 19.0483 0.762182 19.2804C0.999904 19.5126 1.28103 19.6956 1.5895 19.8191C1.89797 19.9426 2.22775 20.0041 2.56 20.0002H13.44C13.7723 20.0041 14.102 19.9426 14.4105 19.8191C14.719 19.6956 15.0001 19.5126 15.2378 19.2804C15.4755 19.0483 15.6652 18.7716 15.796 18.4661C15.9268 18.1607 15.9961 17.8324 16 17.5002V7.00018C15.9994 6.75234 15.9067 6.51358 15.74 6.33018V6.33018ZM10 3.00018L12.74 6.00018H10.74C10.6353 5.99386 10.5329 5.96674 10.4387 5.92041C10.3446 5.87408 10.2607 5.80947 10.1918 5.73034C10.1229 5.65122 10.0704 5.55916 10.0375 5.45955C10.0046 5.35994 9.99184 5.25477 10 5.15018V3.00018ZM13.44 18.0002H2.56C2.49037 18.0042 2.42063 17.9945 2.35477 17.9715C2.28892 17.9486 2.22824 17.9129 2.17621 17.8664C2.12419 17.82 2.08184 17.7637 2.0516 17.7009C2.02137 17.638 2.00383 17.5698 2 17.5002V2.50018C2.00383 2.43054 2.02137 2.36234 2.0516 2.2995C2.08184 2.23665 2.12419 2.18039 2.17621 2.13394C2.22824 2.08749 2.28892 2.05176 2.35477 2.02881C2.42063 2.00586 2.49037 1.99613 2.56 2.00018H8V5.15018C7.98386 5.8868 8.25975 6.59991 8.76747 7.13385C9.27518 7.6678 9.9735 7.97923 10.71 8.00018H14V17.5002C13.9962 17.5698 13.9786 17.638 13.9484 17.7009C13.9182 17.7637 13.8758 17.82 13.8238 17.8664C13.7718 17.9129 13.7111 17.9486 13.6452 17.9715C13.5794 17.9945 13.5096 18.0042 13.44 18.0002Z" />
                            </svg>
                        </div>
                        <div class="text-[14px]  font-medium">Absensi</div>
                    </a>
                    {{-- absensi --}}
                    {{-- cuti --}}
                    <a href="/admin/cuti"
                        class="link flex items-center gap-2 bg-[#F0F5FE] shadow-md p-3 px-6 rounded-full @if (in_array(Request::path(), $cuti)) bg-[#F0F5FE] text-[#084453] shadow-md @else bg-white  text-[#616262] @endif">
                        <div class="icon">
                            <svg width="18" height="19" viewBox="0 0 18 19"
                                class="@if (in_array(Request::path(), $cuti)) fill-[#084453] @else fill-[#616262] @endif"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.66 4.25981C17.66 4.18981 17.56 4.11981 17.51 4.04981L17.42 3.94981C17.1872 3.6623 16.8934 3.43005 16.56 3.26981L10.16 0.26981C9.80566 0.106526 9.42015 0.0219727 9.03 0.0219727C8.63985 0.0219727 8.25434 0.106526 7.9 0.26981L1.5 3.26981C1.16826 3.43277 0.875075 3.66459 0.64 3.94981L0.52 3.99981C0.461831 4.05994 0.411437 4.12713 0.37 4.19981C0.131436 4.57702 0.00326453 5.0135 0 5.45981V12.5198C0.00133799 12.9968 0.139644 13.4633 0.398468 13.864C0.657292 14.2646 1.02574 14.5825 1.46 14.7798L7.86 17.7798C8.21569 17.9446 8.60299 18.03 8.995 18.03C9.38701 18.03 9.77431 17.9446 10.13 17.7798L16.53 14.7798C16.9631 14.5854 17.3315 14.2712 17.592 13.8744C17.8524 13.4775 17.994 13.0145 18 12.5398V5.45981C17.9949 5.03677 17.8775 4.62267 17.66 4.25981V4.25981ZM8.71 2.05981C8.80155 2.02018 8.90024 1.99974 9 1.99974C9.09976 1.99974 9.19845 2.02018 9.29 2.05981L14.62 4.53981L9 7.14981L3.38 4.53981L8.71 2.05981ZM2.3 12.9998C2.21293 12.966 2.1379 12.9071 2.08447 12.8305C2.03104 12.7539 2.00163 12.6632 2 12.5698V6.09981L8 8.88981V15.6098L2.3 12.9998ZM15.69 12.9998L10 15.6098V8.88981L16 6.09981V12.5398C16.0023 12.6391 15.9737 12.7367 15.9182 12.8191C15.8626 12.9015 15.7829 12.9646 15.69 12.9998Z" />
                            </svg>
                        </div>
                        <div class="text-[14px] font-medium">Cuti</div>
                    </a>
                    {{-- cuti --}}
                </div>
                <div class=" p-2 text-center rounded flex items-center gap-2 justify-center">
                    <div class="">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 12C10.2652 12 10.5196 11.8946 10.7071 11.7071C10.8946 11.5196 11 11.2652 11 11V1C11 0.734784 10.8946 0.48043 10.7071 0.292893C10.5196 0.105357 10.2652 0 10 0C9.73478 0 9.48043 0.105357 9.29289 0.292893C9.10536 0.48043 9 0.734784 9 1V11C9 11.2652 9.10536 11.5196 9.29289 11.7071C9.48043 11.8946 9.73478 12 10 12Z"
                                fill="#D52803" />
                            <path
                                d="M14.59 2.1099C14.354 1.9879 14.0791 1.96466 13.826 2.0453C13.5728 2.12594 13.362 2.30385 13.24 2.5399C13.118 2.77594 13.0948 3.05078 13.1754 3.30395C13.2561 3.55713 13.434 3.7679 13.67 3.8899C15.2635 4.71257 16.5343 6.04676 17.2785 7.67831C18.0228 9.30987 18.1972 11.1442 17.7739 12.8868C17.3506 14.6294 16.3541 16.1792 14.9444 17.2876C13.5346 18.3959 11.7933 18.9984 10 18.9984C8.20672 18.9984 6.46544 18.3959 5.05566 17.2876C3.64588 16.1792 2.64937 14.6294 2.22607 12.8868C1.80277 11.1442 1.97725 9.30987 2.72148 7.67831C3.46572 6.04676 4.73656 4.71257 6.33001 3.8899C6.44688 3.82949 6.55072 3.74665 6.63558 3.64611C6.72044 3.54558 6.78467 3.42931 6.8246 3.30395C6.86453 3.17859 6.87938 3.0466 6.86829 2.9155C6.85721 2.7844 6.82042 2.65677 6.76001 2.5399C6.6996 2.42302 6.61676 2.31919 6.51623 2.23432C6.41569 2.14946 6.29942 2.08523 6.17406 2.0453C6.0487 2.00537 5.91671 1.99053 5.78561 2.00161C5.65451 2.01269 5.52688 2.04949 5.41001 2.1099C3.4187 3.13868 1.83074 4.80662 0.900977 6.84605C-0.0287877 8.88547 -0.246451 11.1781 0.282919 13.3561C0.812288 15.534 2.058 17.471 3.82013 18.8561C5.58226 20.2413 7.75864 20.9943 10 20.9943C12.2414 20.9943 14.4178 20.2413 16.1799 18.8561C17.942 17.471 19.1877 15.534 19.7171 13.3561C20.2465 11.1781 20.0288 8.88547 19.099 6.84605C18.1693 4.80662 16.5813 3.13868 14.59 2.1099V2.1099Z"
                                fill="#D52803" />
                        </svg>

                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-[14px] font-medium text-[#D42803]">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
        {{-- CONTENT --}}
        <div class="content shadow-md md:px-10 md:pl-[200px] pt-[90px] bg-[#FBFBFB] min-h-screen">
            <div class="kota mx-2 md:mx-0 bg-white shadow-lg rounded-[15px] p-3 overflow-auto h-[85vh]">
                {{ $slot }}
            </div>
        </div>

        {{-- MODAL PENGAJUAN NOTIFIKASI --}}
        @foreach ($notifications as $notification)
            <div id="notification-{{ $loop->iteration }}" tabindex="-1" aria-hidden="true"
                class="modal hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <div class="relative bg-white w-[85%] rounded-lg shadow max-h-full overflow-y-auto">
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t">
                            <h3 class="text-[30px] font-semibold text-gray-900">
                                {{ formatModelName(class_basename($notification)) }}</h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="notification-{{ $loop->iteration }}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                            <!-- Isi Modal -->
                            @if (class_basename($notification) == 'DataDiri')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    <div class="w-full flex flex-col gap-3 md:gap-3">
                                        <div class="wrap">
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Nama
                                                    Dokumen</label>
                                                <div title="Sarjana" class="isi">
                                                    {{ $notification->nama }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'Pendidikan')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    <div class="w-full flex flex-col gap-3 md:gap-3">
                                        <div class="wrap">
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Pendidikan</label>
                                                <div title="Sarjana" class="isi">
                                                    {{ $notification->pendidikan }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]">
                                            </div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Tingkat
                                                    Pendidikan</label>
                                                <div title="S1-Teknik Informatika" class="isi">
                                                    {{ $notification->tingkat_pendidikan }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]">
                                            </div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Tahun
                                                    Lulus</label>
                                                <div title="1989" class="isi">
                                                    {{ $notification->tahun_lulus }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]">
                                            </div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Tanggal
                                                    Kelulusan</label>
                                                <div class="isi">
                                                    {{ $notification->tgl_lulus }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]">
                                            </div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Gelar
                                                    Depan</label>
                                                <div title="-" class="isi">
                                                    {{ $notification->gelar_depan }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]">
                                            </div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Gelar
                                                    Belakang</label>
                                                <div title="S.Kom" class="isi">
                                                    {{ $notification->gelar_belakang }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]">
                                            </div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Nomor
                                                    Ijazah</label>
                                                <div title="2342256897845" class="isi">
                                                    {{ $notification->no_ijasah }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-3 bg-[#C3C3C3]">
                                            </div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1">
                                                <label For=""
                                                    class="text-black font-medium w-[200px] flex-shrink-0">Nama
                                                    Universitas</label>
                                                <div title="Instititut Teknologi Sumatera" class="isi">
                                                    {{ $notification->nama_univ }}</div>
                                            </div>
                                            <div class="garis w-full h-[1px] mb-3 md:mt-3 bg-[#C3C3C3]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'KeluargaOrtu')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Status
                                                    Hidup</label>
                                                <div>{{ $notification->status_keluarga }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Status
                                                    Pekerjaan
                                                    Orang Tua</label>
                                                {{ $notification->status_pekerjaan }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Nama</label>
                                                {{ $notification->nama }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Status
                                                    Pernikahan</label>
                                                <div>{{ $notification->status_pernikahan }}</div>
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Jenis
                                                    Kelamin</label>
                                                {{ $notification->jk }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Email</label>
                                                {{ $notification->email }}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- KANAN --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Lahir</label>
                                                {{ $notification->tgl_lahir }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Meninggal</label>
                                                {{ $notification->tgl_meninggal ? $notification->tgl_meninggal : '-' }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Identitas</label>
                                                {{ $notification->no_identitas }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Agama</label>
                                                {{ $notification->agama }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Telepon</label>
                                                {{ $notification->no_tel }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Handphone</label>
                                                {{ $notification->no_hp }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'KeluargaPasangan')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        {{-- KIRI --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Suami/IStri
                                                        Ke-</label>
                                                    {{ $notification->no_pasangan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Status
                                                        Pekerjaan
                                                        Pasangan</label>
                                                    {{ $notification->status_pekerjaan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nama</label>
                                                    {{ $notification->nama }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Tanggal
                                                        Lahir</label>
                                                    {{ $notification->tgl_lahir }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor
                                                        Identitas</label>
                                                    {{ $notification->no_identitas }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Jenis
                                                        Kelamin</label>
                                                    {{ $notification->jk }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Alamat</label>
                                                    {{ $notification->alamat }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Agama</label>
                                                    {{ $notification->agama }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor
                                                        Karsus/Karis</label>
                                                    {{ $notification->no_karis }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor
                                                        Telepon</label>
                                                    {{ $notification->no_tel }}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- KANAN --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Status
                                                        Hidup</label>
                                                    {{ $notification->status_keluarga }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Status
                                                        Pernikahan</label>
                                                    {{ $notification->status_pernikahan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor Akta
                                                        Menikah</label>
                                                    {{ $notification->no_akta }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Akta
                                                        Menikah</label>
                                                    {{ $notification->akta_nikah }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Tanggal Akta
                                                        Menikah</label>
                                                    {{ $notification->tgl_nikah }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Email</label>
                                                    {{ $notification->email }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor Akta
                                                        Cerai</label>
                                                    {{ $notification->no_cerai ? $notification->no_cerai : '-' }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Akta
                                                        Cerai</label>
                                                    {{ $notification->akta_cerai ? $notification->akta_cerai : '-' }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Tanggal Akta
                                                        Cerai</label>
                                                    {{ $notification->tgl_cerai ? $notification->tgl_cerai : '-' }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor
                                                        HP</label>
                                                    {{ $notification->no_hp }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'KeluargaAnak')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        {{-- KIRI --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Anak
                                                        Ke-</label>
                                                    {{ $notification->no_anak }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Status
                                                        Pekerjaan
                                                        Anak</label>
                                                    {{ $notification->status_pekerjaan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nama</label>
                                                    {{ $notification->nama }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Tanggal
                                                        Lahir</label>
                                                    {{ $notification->tgl_lahir }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor
                                                        Identitas</label>
                                                    {{ $notification->no_identitas }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Jenis
                                                        Kelamin</label>
                                                    {{ $notification->jk }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Status
                                                        Pernikahan</label>
                                                    {{ $notification->status_nikah }}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- KANAN --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Tanggal
                                                        Meninggal</label>
                                                    {{ $notification->tgl_meninggal ? $notification->tgl_meninggal : '-' }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor Akta
                                                        Meninggal</label>
                                                    {{ $notification->no_akta_meninggal ? $notification->no_akta_meninggal : '-' }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor Akta
                                                        Kelahiran</label>
                                                    {{ $notification->no_lahir }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nomor
                                                        Telepon</label>
                                                    {{ $notification->no_tel }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Status
                                                        Hidup</label>
                                                    {{ $notification->status_keluarga }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Email</label>
                                                    {{ $notification->email }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Agama</label>
                                                    {{ $notification->agama }}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'Skp')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                        {{-- KIRI --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Tahun</label>
                                                    {{ $notification->tahun }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nilai
                                                        SKP</label>
                                                    {{ $notification->nilai }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Orientasi
                                                        Pelayanan</label>
                                                    {{ $notification->ot }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Integritas</label>
                                                    {{ $notification->integritas }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Komitmen</label>
                                                    {{ $notification->komitmen }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Disiplin</label>
                                                    {{ $notification->disiplin }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Kerja
                                                        Sama</label>
                                                    {{ $notification->kerja_sama }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Kepemimpinan</label>
                                                    {{ $notification->kepemimpinan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Status
                                                        Atasan</label>
                                                    {{ $notification->status_atasan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Status
                                                        Penilai</label>
                                                    {{ $notification->status_penilai }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nama
                                                        Atasan</label>
                                                    {{ $notification->nama_atasan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nama
                                                        Penilai</label>
                                                    {{ $notification->nama_penilai }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Jenis
                                                        Jabatan</label>
                                                    {{ $notification->jenis_jabatan }}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- KANAN --}}
                                        <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Jumlah</label>
                                                    {{ $notification->jumlah }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nilai
                                                        Perilaku
                                                        Kerja</label>
                                                    {{ $notification->perilaku }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Nilai
                                                        Prestasi
                                                        Kerja</label>
                                                    {{ $notification->prestasi }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Atasan Non
                                                        PNS
                                                        ID</label>
                                                    {{ $notification->atasan_nonpns }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Jabatan
                                                        Atasan</label>
                                                    {{ $notification->atasan_jabatan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Jabatan
                                                        Penilai</label>
                                                    {{ $notification->penilai_jabatan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Golongan
                                                        Penilai
                                                        TMT</label>
                                                    {{ $notification->golongan_penilai_tmt }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Golongan
                                                        Atasan
                                                        TMT</label>
                                                    {{ $notification->golongan_atasan_tmt }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Golongan
                                                        Penilai</label>
                                                    {{ $notification->golongan_penilai }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">Golongan
                                                        Atasan</label>
                                                    {{ $notification->golongan_atasan }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">NIP/NIK
                                                        Penilai</label>
                                                    {{ $notification->nip_penilai }}
                                                </div>
                                            </div>
                                            <div class="wrap">
                                                <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                                <div
                                                    class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                    <label For=""
                                                        class="text-black font-medium text-[14px]">NIP/NIK
                                                        Atasan</label>
                                                    {{ $notification->nip_atasan }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'Penghargaan')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    {{-- KIRI --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Jenis
                                                    Penghargaan</label>
                                                {{ $notification->jenis }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Tahun
                                                    Perolehan</label>
                                                {{ $notification->tahun }}
                                            </div>
                                        </div>

                                    </div>
                                    {{-- KANAN --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Surat
                                                    Keputusan</label>
                                                {{ $notification->no_surat }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal Surat
                                                    Keputusan</label>
                                                {{ $notification->tgl_surat }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'Kinerja')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    {{-- KIRI --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tahun</label>
                                                {{ $notification->tahun }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">NIP</label>
                                                {{ $notification->nip }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Nama</label>
                                                {{ $notification->nama }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Unit
                                                    Kerja</label>
                                                {{ $notification->unit_kerja }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal</label>
                                                {{ $notification->tgl }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Jabatan</label>
                                                {{ $notification->jabatan }}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- KANAN --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Hasil
                                                    Kinerja</label>
                                                {{ $notification->hasil }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Perilaku
                                                    Kinerja</label>
                                                {{ $notification->perilaku }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nama
                                                    Instansi</label>
                                                {{ $notification->instansi }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Kuadran
                                                    Kerja</label>
                                                {{ $notification->kuadran }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nama
                                                    Penilai
                                                    Jabatan</label>
                                                {{ $notification->penilai_jabatan }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nama
                                                    Penilai
                                                </label>
                                                {{ $notification->penilai }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'Pns')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    {{-- KIRI --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Status
                                                    Pegawai</label>
                                                {{ $notification->status_pns }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    SK
                                                    CPNS</label>
                                                {{ $notification->no_sk_cpns }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    SK
                                                    PNS</label>
                                                {{ $notification->no_sk_pns }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    SK
                                                    STTPL</label>
                                                {{ $notification->no_sk_sttpl }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Karpeg</label>
                                                {{ $notification->karpeg }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Surat
                                                    Dokter</label>
                                                {{ $notification->no_surat_dokter }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    SPMT</label>
                                                {{ $notification->no_spmt }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Pertek
                                                    C2TH</label>
                                                {{ $notification->no_c2th }}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- KANAN --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal Surat
                                                    Keputusan CPNS</label>
                                                {{ $notification->tgl_sk_cpns }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal Surat
                                                    Keputusan PNS</label>
                                                {{ $notification->tgl_sk_pns }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    STTPL</label>
                                                {{ $notification->tgl_sttpl }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal TMT
                                                    CPNS</label>
                                                {{ $notification->tgl_tmt_cpns }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal TMT
                                                    PNS</label>
                                                {{ $notification->tgl_tmt_pns }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    SPMT</label>
                                                {{ $notification->tgl_spmt }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Pertek
                                                    C2TH</label>
                                                {{ $notification->tgl_c2th }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'Diklat')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    {{-- KIRI --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Jenis
                                                    Diklat</label>
                                                {{ $notification->jenis_diklat }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nama
                                                    Diklat</label>
                                                {{ $notification->nama_diklat }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Institusi
                                                    Penyelenggara</label>
                                                {{ $notification->institusi }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Tahun
                                                    Diklat</label>
                                                {{ $notification->tahun }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Selesai</label>
                                                {{ $notification->tgl_selesai }}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- KANAN --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Mulai</label>
                                                {{ $notification->tgl_mulai }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Durasi
                                                    (Jam)</label>
                                                {{ $notification->durasi }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Rumpun
                                                    Diklat</label>
                                                {{ $notification->rumpun }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Sertifikat</label>
                                                {{ $notification->no_sertif }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'MasaKerja')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Jenis
                                                    Peninjauan
                                                    Masa Kerja</label>
                                                {{ $notification->masa_kerja }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Instansi/Perusahaan</label>
                                                {{ $notification->instansi }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Awal</label>
                                                {{ $notification->tgl_awal }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Akhir</label>
                                                {{ $notification->tgl_akhir }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Masa
                                                    Kerja
                                                    (Bulan)</label>
                                                {{ $notification->masa_kerja_bulan }}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- KANAN --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Surat
                                                    Keputusan (SK)</label>
                                                {{ $notification->no_sk }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal Surat
                                                    Keputusan (SK)</label>
                                                {{ $notification->tgl_sk }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Pertek
                                                    BKN</label>
                                                {{ $notification->no_bkn }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Pertek
                                                    BKN</label>
                                                {{ $notification->tgl_bkn }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Masa
                                                    Kerja
                                                    (Tahun)</label>
                                                {{ $notification->masa_kerja_tahun }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'Golongan')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Golongan</label>
                                                {{ $notification->golongan }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Jenis
                                                    Kenaikan
                                                    Pangkat</label>
                                                {{ $notification->jenis_kp }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Masa
                                                    Kerja
                                                    Golongan
                                                    (Tahun)</label>
                                                {{ $notification->masa_kerja_tahun }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Masa
                                                    Kerja
                                                    Golongan
                                                    (Bulan)</label>
                                                {{ $notification->masa_kerja_bulan }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">TMT
                                                    Golongan</label>
                                                {{ $notification->tmt }}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- KANAN --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Surat
                                                    Keputusan (SK)</label>
                                                {{ $notification->no_sk }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal Surat
                                                    Keputusan (SK)</label>
                                                {{ $notification->tgl_sk }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    Pertek
                                                    BKN</label>
                                                {{ $notification->no_bkn }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    Pertek
                                                    BKN</label>
                                                {{ $notification->tgl_bkn }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if (class_basename($notification) == 'Jabatan')
                                <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                                    {{-- KIRI --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Jenis
                                                    Jabatan</label>
                                                {{ $notification->jenis_jabatan }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Jenis
                                                    Mutasi</label>
                                                {{ $notification->mutasi }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Jenis
                                                    Penugasan</label>
                                                {{ $notification->penugasan }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal
                                                    SK</label>
                                                {{ $notification->tgl_sk }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal TMT
                                                    Jabatan</label>
                                                {{ $notification->tgl_tmt }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Tanggal TMT
                                                    Pelantikan</label>
                                                {{ $notification->tgl_tmt_pelantikan }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nomor
                                                    SK</label>
                                                {{ $notification->no_sk }}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- KANAN --}}
                                    <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Status
                                                    Riwayat</label>
                                                {{ $notification->status_riwayat }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Instansi</label>
                                                {{ $notification->instansi }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Satuan
                                                    Kerja</label>
                                                {{ $notification->sk }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For=""
                                                    class="text-black font-medium text-[14px]">Satuan Kerja
                                                    Induk</label>
                                                {{ $notification->sk_induk }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Unit
                                                    Organisasi</label>
                                                {{ $notification->unit_organisasi }}
                                            </div>
                                        </div>
                                        <div class="wrap">
                                            <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                            <div
                                                class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                                <label For="" class="text-black font-medium text-[14px]">Nama
                                                    Jabatan</label>
                                                {{ $notification->nama_jabatan }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- table --}}
                            <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                                <table
                                    class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                                    <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                                        <tr>
                                            <th scope="col" class="px-3 py-3">
                                                No
                                            </th>
                                            <th scope="col" class="px-3 py-3">
                                                Nama Surat
                                            </th>
                                            <th scope="col" class="px-3 py-3">
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($notification->files as $file)
                                            <tr
                                                class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                                <td class="px-3 py-3">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="px-3 py-3">
                                                    {{ $file->file_name ? $file->file_name : '-' }}
                                                </td>
                                                <td class="px-3 py-3">
                                                    <div class="flex items-center space-x-3">
                                                        <a href="{{ asset('storage/' . $file->file_path) }}"
                                                            download="{{ $file->file_name }}" title="Download">
                                                            <img src="{{ asset('Assets/download.svg') }}"
                                                                alt="Download">
                                                        </a>
                                                        <button title="Lihat"
                                                            onclick="event.preventDefault(); window.open('{{ asset('storage/' . $file->file_path) ? asset('storage/' . $file->file_path) : '#' }}', '_blank');">
                                                            <img src="{{ asset('Assets/eye.svg') }}" alt="Lihat">
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if (class_basename($notification) == 'DataDiri')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.dataDiriUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.dataDiriUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'Diklat')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.diklatUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.diklatUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'Golongan')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.golonganUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.golonganUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'Jabatan')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.jabatanUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.jabatanUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'KeluargaAnak')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.anakUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.anakUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'KeluargaOrtu')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.ortuUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.ortuUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'KeluargaPasangan')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.pasanganUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.pasanganUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'Kinerja')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.kinerjaUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.kinerjaUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'MasaKerja')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.pmkUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.pmkUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'Pendidikan')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.pendidikanUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.pendidikanUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'Penghargaan')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.penghargaanUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.penghargaanUpdate', $notification->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'Pns')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.pnsUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.pnsUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                        @if (class_basename($notification) == 'Skp')
                            <div class="but justify-center flex gap-3 my-5">
                                <form action="{{ route('user.skpUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Diterima</button>
                                </form>
                                <form action="{{ route('user.skpUpdate', $notification->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-[#4F8EA5] hover:bg-[#3a697a] text-white px-4 py-2 rounded-lg">Ditolak</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        {{-- PENDIDIKAN --}}
    </div>

    <script>
        // Tambahkan script untuk menampilkan/menyembunyikan menu saat tombol toggle ditekan
        const menuToggle = document.querySelector('.menu-toggle');
        const sideMenu = document.querySelector('.side');
        const content = document.querySelector('.content');

        menuToggle.addEventListener('click', () => {
            sideMenu.classList.toggle('show');
            content.classList.toggle('show');

            // Toggle antara hamburger icon dan close icon
            menuToggle.classList.toggle('open');
        });
    </script>
</body>

</html>
