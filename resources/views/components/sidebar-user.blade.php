<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="./Assets/logoo.png">
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
                background-color: #2F5B6B;
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
            $dashboard = [
                'dashboard',
                '/',
                //
                'dashboard/riwayat-golongan',
                'dashboard/riwayat-golongan/tambah-golongan',
                'dashboard/riwayat-golongan/lihat-golongan',
                'dashboard/riwayat-golongan/pengajuan-golongan',
                //
                //
                'dashboard/riwayat-cpns',
                'dashboard/riwayat-cpns/tambah-cpns',
                'dashboard/riwayat-cpns/lihat-cpns',
                'dashboard/riwayat-cpns/pengajuan-cpns',
                //
                //
                'dashboard/riwayat-diklat',
                'dashboard/riwayat-diklat/tambah-diklat',
                'dashboard/riwayat-diklat/lihat-diklat',
                'dashboard/riwayat-diklat/pengajuan-diklat',
                //
                //
                'dashboard/riwayat-jabatan',
                'dashboard/riwayat-jabatan/tambah-jabatan',
                'dashboard/riwayat-jabatan/lihat-jabatan',
                'dashboard/riwayat-jabatan/pengajuan-jabatan',
                //
                //
                'dashboard/riwayat-laporan',
                'dashboard/riwayat-laporan/tambah-laporan',
                'dashboard/riwayat-laporan/lihat-laporan',
                'dashboard/riwayat-laporan/pengajuan-laporan',
                //
                //
                'dashboard/riwayat-pendidikan',
                'dashboard/riwayat-pendidikan/tambah-pendidikan',
                'dashboard/riwayat-pendidikan/lihat-pendidikan',
                'dashboard/riwayat-pendidikan/pengajuan-pendidikan',
                //
                //
                'dashboard/riwayat-penghargaan',
                'dashboard/riwayat-penghargaan/tambah-penghargaan',
                'dashboard/riwayat-penghargaan/lihat-penghargaan',
                'dashboard/riwayat-penghargaan/pengajuan-penghargaan',
                //
                //
                'dashboard/riwayat-pmk',
                'dashboard/riwayat-pmk/tambah-pmk',
                'dashboard/riwayat-pmk/lihat-pmk',
                'dashboard/riwayat-pmk/pengajuan-pmk',
                //
                //
                'dashboard/riwayat-skp',
                'dashboard/riwayat-skp/tambah-skp',
                'dashboard/riwayat-skp/lihat-skp',
                'dashboard/riwayat-skp/pengajuan-skp',
                //
                //
                'dashboard/riwayat-orangtua',
                'dashboard/riwayat-orangtua/tambah-orangtua',
                'dashboard/riwayat-orangtua/lihat-orangtua',
                'dashboard/riwayat-orangtua/pengajuan-orangtua',
                //
                //
                'dashboard/riwayat-pasangan',
                'dashboard/riwayat-pasangan/tambah-pasangan',
                'dashboard/riwayat-pasangan/lihat-pasangan',
                'dashboard/riwayat-pasangan/pengajuan-pasangan',
                //
                //
                'dashboard/riwayat-anak',
                'dashboard/riwayat-anak/tambah-anak',
                'dashboard/riwayat-anak/lihat-anak',
                'dashboard/riwayat-anak/pengajuan-anak',
                //
                //
                'dashboard/riwayat-cuti',
                'dashboard/riwayat-diri',
                'dashboard/riwayat-diri/tambah-diri',
                'dashboard/riwayat-diri/lihat-diri',
                'dashboard/riwayat-diri/pengajuan-diri',
                //
            ];
        @endphp
        @php
            $editProfile = ['edit-profile', 'edit-profile-pendukung'];
        @endphp
        @php
            $cuti = ['cuti'];
        @endphp
        @php
            $absensi = ['absensi', 'absensi/upload-absensi'];
        @endphp
        {{-- NAVBAR --}}
        <div
            class="head h-[65px] md:h-[100px] bg-[#4F8EA5] px-5 w-full fixed top-0  z-10 flex items-center justify-between">
            <div class="wrap w-full flex items-center justify-between">
                <div class="title text-white md:pl-[160px] mx-2 md:mx-0 mb-2 font-semibold text-[18px] md:text-[22px]">
                    {{ $title }}</div>
                <div class="head pt-3 text-white hidden gap-1 items-center font-semibold text-[14px] mb-4 md:flex">
                    <div class="logo w-[53px] aspect-auto">
                        <img class="w-full" src="../../../Assets/logoo.png" alt="">
                    </div>
                    Laboratorium Kesehatan <br> Provinsi Lampung
                </div>
            </div>
            <!-- Tambahkan tombol toggle menu -->
            <button class="menu-toggle lg:hidden">
                <svg class="w-6 h-6 hamburger-icon" fill="none" stroke="white" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
                <svg class="w-6 h-6 close-icon" fill="none" stroke="white" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        {{-- SIDEBAR --}}
        <div
            class="side z-10 bg-[#2F5B6B] md:pt-[20px] w-[70%] md:w-[150px] h-screen fixed  p-3 pr-0 md:pl-[30px] text-white">
            <a href="/profile-user" class="wrap  flex-col mb-[30px] flex items-center gap-2">
                <div class="icon">
                    <img src="../../../Assets/user.svg" alt="">
                </div>
                <div class="text-[15px] text-white">
                    {{ explode(' ', auth()->user()->name)[0] }}
                </div>
            </a>
            {{-- MENU --}}
            <div class="menu flex flex-col h-[80%] md:h-[80%] justify-between">
                <div class="menu flex flex-col gap-3 ">
                    <a href="/dashboard"
                        class="p-2 rounded-s-full flex items-start justify-between @if (preg_match('/^dashboard(\/.*)?$/', Request::path())) bg-white text-[#093545]
                    @else
                    bg-[#2F5B6B] text-white @endif">
                        <div class="wrap w-full flex flex-col items-center">
                            <div class="icon">
                                <svg class="@if (preg_match('/^dashboard(\/.*)?$/', Request::path())) fill-[#093545]
                            @else
                            fill-white @endif"
                                    width="18" height="19" viewBox="0 0 18 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.60819 0.960938H2.54252C2.24176 0.960938 1.98303 0.960938 1.75451 1.01479C1.40073 1.09932 1.07727 1.28015 0.819958 1.53723C0.562645 1.79431 0.381528 2.11761 0.296675 2.4713C0.244141 2.69983 0.244141 2.95725 0.244141 3.25932V6.54272C0.244141 6.84348 0.244141 7.10221 0.297988 7.33074C0.382523 7.68451 0.563348 8.00797 0.820429 8.26528C1.07751 8.5226 1.40081 8.70371 1.75451 8.78857C1.98303 8.8411 2.24045 8.8411 2.54252 8.8411H5.82592C6.12668 8.8411 6.38541 8.8411 6.61394 8.78725C6.96771 8.70272 7.29117 8.52189 7.54849 8.26481C7.8058 8.00773 7.98692 7.68443 8.07177 7.33074C8.1243 7.10221 8.1243 6.84479 8.1243 6.54272V3.25932C8.1243 2.95856 8.1243 2.69983 8.07046 2.4713C7.98592 2.11753 7.8051 1.79407 7.54801 1.53675C7.29093 1.27944 6.96763 1.09832 6.61394 1.01347C6.38541 0.960937 6.128 0.960938 5.82592 0.960938H5.76025H2.60819ZM2.06052 2.29269C2.11699 2.27955 2.20499 2.2743 2.60819 2.2743H5.76025C6.16477 2.2743 6.25145 2.27824 6.30793 2.29269C6.42591 2.3209 6.53376 2.38124 6.61954 2.46701C6.70532 2.55279 6.76566 2.66065 6.79387 2.77863C6.807 2.83379 6.81094 2.92047 6.81094 3.32499V6.47705C6.81094 6.88157 6.807 6.96825 6.79256 7.02472C6.76434 7.1427 6.704 7.25056 6.61823 7.33634C6.53245 7.42211 6.42459 7.48245 6.30661 7.51067C6.25276 7.52249 6.16608 7.52774 5.76025 7.52774H2.60819C2.20367 7.52774 2.11699 7.5238 2.06052 7.50935C1.94254 7.48114 1.83468 7.4208 1.7489 7.33502C1.66313 7.24925 1.60279 7.14139 1.57457 7.02341C1.56275 6.96956 1.5575 6.88288 1.5575 6.47705V3.32499C1.5575 2.92047 1.56144 2.83379 1.57589 2.77732C1.6041 2.65934 1.66444 2.55148 1.75022 2.4657C1.83599 2.37993 1.94385 2.31958 2.06183 2.29137M11.8017 0.960938H11.736C11.4353 0.960938 11.1766 0.960938 10.948 1.01479C10.5943 1.09932 10.2708 1.28015 10.0135 1.53723C9.75617 1.79431 9.57505 2.11761 9.4902 2.4713C9.43766 2.69983 9.43766 2.95725 9.43766 3.25932V6.54272C9.43766 6.84348 9.43766 7.10221 9.49151 7.33074C9.57605 7.68451 9.75687 8.00797 10.014 8.26528C10.271 8.5226 10.5943 8.70371 10.948 8.78857C11.1766 8.8411 11.434 8.8411 11.736 8.8411H15.0194C15.3202 8.8411 15.5789 8.8411 15.8075 8.78725C16.1612 8.70272 16.4847 8.52189 16.742 8.26481C16.9993 8.00773 17.1804 7.68443 17.2653 7.33074C17.3178 7.10221 17.3178 6.84479 17.3178 6.54272V3.25932C17.3178 2.95856 17.3178 2.69983 17.264 2.4713C17.1794 2.11753 16.9986 1.79407 16.7415 1.53675C16.4845 1.27944 16.1612 1.09832 15.8075 1.01347C15.5789 0.960937 15.3215 0.960938 15.0194 0.960938H14.9538H11.8017ZM11.254 2.29269C11.3105 2.27955 11.3985 2.2743 11.8017 2.2743H14.9538C15.3583 2.2743 15.445 2.27824 15.5014 2.29269C15.6194 2.3209 15.7273 2.38124 15.8131 2.46701C15.8988 2.55279 15.9592 2.66065 15.9874 2.77863C16.0005 2.83379 16.0045 2.92047 16.0045 3.32499V6.47705C16.0045 6.88157 15.9992 6.96825 15.9861 7.02472C15.9579 7.1427 15.8975 7.25056 15.8117 7.33634C15.726 7.42211 15.6181 7.48245 15.5001 7.51067C15.445 7.5238 15.3583 7.52774 14.9538 7.52774H11.8017C11.3972 7.52774 11.3105 7.5238 11.254 7.50935C11.1361 7.48114 11.0282 7.4208 10.9424 7.33502C10.8567 7.24925 10.7963 7.14139 10.7681 7.02341C10.7563 6.96956 10.751 6.88288 10.751 6.47705V3.32499C10.751 2.92047 10.755 2.83379 10.7694 2.77732C10.7976 2.65934 10.858 2.55148 10.9437 2.4657C11.0295 2.37993 11.1374 2.31958 11.2554 2.29137M2.54252 10.1545H5.82592C6.12668 10.1545 6.38541 10.1545 6.61394 10.2083C6.96771 10.2928 7.29117 10.4737 7.54849 10.7308C7.8058 10.9878 7.98692 11.3111 8.07177 11.6648C8.1243 11.8934 8.1243 12.1508 8.1243 12.4528V15.7362C8.1243 16.037 8.1243 16.2957 8.07046 16.5243C7.98592 16.878 7.8051 17.2015 7.54801 17.4588C7.29093 17.7161 6.96763 17.8972 6.61394 17.9821C6.38541 18.0346 6.128 18.0346 5.82592 18.0346H2.54252C2.24176 18.0346 1.98303 18.0346 1.75451 17.9808C1.40073 17.8962 1.07727 17.7154 0.819958 17.4583C0.562645 17.2013 0.381528 16.878 0.296675 16.5243C0.244141 16.2957 0.244141 16.0383 0.244141 15.7362V12.4528C0.244141 12.1521 0.244141 11.8934 0.297988 11.6648C0.382523 11.3111 0.563348 10.9876 0.820429 10.7303C1.07751 10.473 1.40081 10.2918 1.75451 10.207C1.98303 10.1545 2.24045 10.1545 2.54252 10.1545ZM2.60819 11.4678C2.20367 11.4678 2.11699 11.4718 2.06052 11.4862C1.94254 11.5144 1.83468 11.5748 1.7489 11.6605C1.66313 11.7463 1.60279 11.8542 1.57457 11.9722C1.56275 12.026 1.5575 12.1127 1.5575 12.5185V15.6706C1.5575 16.0751 1.56144 16.1618 1.57589 16.2182C1.6041 16.3362 1.66444 16.4441 1.75022 16.5299C1.83599 16.6156 1.94385 16.676 2.06183 16.7042C2.11699 16.7173 2.20367 16.7213 2.60819 16.7213H5.76025C6.16477 16.7213 6.25145 16.716 6.30793 16.7029C6.42591 16.6747 6.53376 16.6143 6.61954 16.5285C6.70532 16.4428 6.76566 16.3349 6.79387 16.2169C6.807 16.1618 6.81094 16.0751 6.81094 15.6706V12.5185C6.81094 12.114 6.807 12.0273 6.79256 11.9708C6.76434 11.8529 6.704 11.745 6.61823 11.6592C6.53245 11.5734 6.42459 11.5131 6.30661 11.4849C6.25276 11.4731 6.16608 11.4678 5.76025 11.4678H2.60819ZM11.8017 10.1545H11.736C11.4353 10.1545 11.1766 10.1545 10.948 10.2083C10.5943 10.2928 10.2708 10.4737 10.0135 10.7308C9.75617 10.9878 9.57505 11.3111 9.4902 11.6648C9.43766 11.8934 9.43766 12.1508 9.43766 12.4528V15.7362C9.43766 16.037 9.43766 16.2957 9.49151 16.5243C9.57605 16.878 9.75687 17.2015 10.014 17.4588C10.271 17.7161 10.5943 17.8972 10.948 17.9821C11.1766 18.0359 11.4353 18.0359 11.736 18.0359H15.0194C15.3202 18.0359 15.5789 18.0359 15.8075 17.9821C16.161 17.8973 16.4842 17.7164 16.7412 17.4594C16.9983 17.2023 17.1792 16.8791 17.264 16.5256C17.3178 16.297 17.3178 16.0383 17.3178 15.7376V12.4528C17.3178 12.1521 17.3178 11.8934 17.264 11.6648C17.1794 11.3111 16.9986 10.9876 16.7415 10.7303C16.4845 10.473 16.1612 10.2918 15.8075 10.207C15.5789 10.1545 15.3215 10.1545 15.0194 10.1545H14.9538H11.8017ZM11.254 11.4862C11.3105 11.4731 11.3985 11.4678 11.8017 11.4678H14.9538C15.3583 11.4678 15.445 11.4718 15.5014 11.4862C15.6194 11.5144 15.7273 11.5748 15.8131 11.6605C15.8988 11.7463 15.9592 11.8542 15.9874 11.9722C16.0005 12.0273 16.0045 12.114 16.0045 12.5185V15.6706C16.0045 16.0751 15.9992 16.1618 15.9861 16.2182C15.9579 16.3362 15.8975 16.4441 15.8117 16.5299C15.726 16.6156 15.6181 16.676 15.5001 16.7042C15.445 16.7173 15.3583 16.7213 14.9538 16.7213H11.8017C11.3972 16.7213 11.3105 16.716 11.254 16.7029C11.1361 16.6747 11.0282 16.6143 10.9424 16.5285C10.8567 16.4428 10.7963 16.3349 10.7681 16.2169C10.7563 16.1631 10.751 16.0764 10.751 15.6706V12.5185C10.751 12.114 10.755 12.0273 10.7694 11.9708C10.7976 11.8529 10.858 11.745 10.9437 11.6592C11.0295 11.5734 11.1374 11.5131 11.2554 11.4849" />
                                </svg>
                            </div>
                            <div class="text-[12px] ">Dashboard</div>
                        </div>
                        <div class="garis bg-[#2F5B6B] h-full w-[3px] rounded"></div>
                    </a>
                    <a href="/edit-profile"
                        class="p-2 rounded-s-full flex items-start justify-between @if (in_array(Request::path(), $editProfile)) bg-white text-[#093545]
                        @else
                        bg-[#2F5B6B] text-white @endif">
                        <div class="wrap w-full flex flex-col items-center">
                            <div class="icon">
                                <svg class="@if (in_array(Request::path(), $editProfile)) fill-[#093545]
                                    @else
                                    fill-white @endif"
                                    width="24" height="18" viewBox="0 0 24 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.2046 17.534C10.2046 17.534 8.78164 17.534 8.78164 16.1111C8.78164 14.6882 10.2046 10.4194 15.8962 10.4194C21.5879 10.4194 23.0108 14.6882 23.0108 16.1111C23.0108 17.534 21.5879 17.534 21.5879 17.534H10.2046ZM15.8962 8.99648C17.0284 8.99648 18.1141 8.54674 18.9147 7.7462C19.7152 6.94565 20.165 5.85988 20.165 4.72773C20.165 3.59559 19.7152 2.50982 18.9147 1.70927C18.1141 0.908727 17.0284 0.458984 15.8962 0.458984C14.7641 0.458984 13.6783 0.908727 12.8778 1.70927C12.0772 2.50982 11.6275 3.59559 11.6275 4.72773C11.6275 5.85988 12.0772 6.94565 12.8778 7.7462C13.6783 8.54674 14.7641 8.99648 15.8962 8.99648ZM7.66607 17.534C7.45513 17.0898 7.34994 16.6027 7.35872 16.1111C7.35872 14.183 8.32631 12.198 10.1135 10.8178C9.22145 10.543 8.29208 10.4085 7.35872 10.4194C1.66706 10.4194 0.244141 14.6882 0.244141 16.1111C0.244141 17.534 1.66706 17.534 1.66706 17.534H7.66607ZM6.64727 8.99648C7.59072 8.99648 8.49553 8.6217 9.16265 7.95458C9.82977 7.28746 10.2046 6.38265 10.2046 5.43919C10.2046 4.49574 9.82977 3.59093 9.16265 2.92381C8.49553 2.25669 7.59072 1.8819 6.64727 1.8819C5.70381 1.8819 4.799 2.25669 4.13188 2.92381C3.46476 3.59093 3.08997 4.49574 3.08997 5.43919C3.08997 6.38265 3.46476 7.28746 4.13188 7.95458C4.799 8.6217 5.70381 8.99648 6.64727 8.99648Z" />
                                </svg>
                            </div>
                            <div class="text-[12px] ">Edit Profile</div>
                        </div>
                        <div class="garis bg-[#2F5B6B] h-full w-[3px] rounded"></div>
                    </a>
                    <a href="/absensi"
                        class="p-2 rounded-s-full flex items-start justify-between @if (in_array(Request::path(), $absensi)) bg-white text-[#093545]
                        @else
                        bg-[#2F5B6B] text-white @endif">
                        <div class="wrap w-full flex flex-col items-center">
                            <div class="icon">
                                <svg class="@if (in_array(Request::path(), $absensi)) fill-[#093545]
                                @else
                                fill-white @endif"
                                    width="24" height="23" viewBox="0 0 24 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5271 7.70265H4.67342C4.5057 7.70265 4.34484 7.63602 4.22624 7.51742C4.10764 7.39882 4.04102 7.23797 4.04102 7.07024V4.54061C4.04102 4.37289 4.10764 4.21203 4.22624 4.09343C4.34484 3.97483 4.5057 3.9082 4.67342 3.9082H13.5271C13.6949 3.9082 13.8557 3.97483 13.9743 4.09343C14.0929 4.21203 14.1595 4.37289 14.1595 4.54061V7.07024C14.1595 7.23797 14.0929 7.39882 13.9743 7.51742C13.8557 7.63602 13.6949 7.70265 13.5271 7.70265ZM5.30583 6.43783H12.8947V5.13507H5.30583V6.43783Z" />
                                    <path
                                        d="M13.5271 9.01758H4.67342C4.5057 9.01758 4.34484 9.08421 4.22624 9.20281C4.10764 9.32141 4.04102 9.48226 4.04102 9.64999V12.129C4.04102 12.2967 4.10764 12.4576 4.22624 12.5762C4.34484 12.6948 4.5057 12.7614 4.67342 12.7614H11.8576L14.1595 10.4215V9.64999C14.1595 9.48226 14.0929 9.32141 13.9743 9.20281C13.8557 9.08421 13.6949 9.01758 13.5271 9.01758ZM12.8947 11.4966H5.30583V10.2318H12.8947V11.4966Z" />
                                    <path
                                        d="M7.24133 20.0403V20.0023L7.4437 19.1233H2.77653V2.64274H15.4247V9.12492L16.6895 7.92967V2.01034C16.6895 1.84261 16.6229 1.68176 16.5043 1.56316C16.3857 1.44456 16.2248 1.37793 16.0571 1.37793H2.14413C1.9764 1.37793 1.81555 1.44456 1.69695 1.56316C1.57835 1.68176 1.51172 1.84261 1.51172 2.01034V19.7177C1.51172 19.8855 1.57835 20.0463 1.69695 20.1649C1.81555 20.2835 1.9764 20.3502 2.14413 20.3502H7.20339C7.2086 20.2461 7.22128 20.1425 7.24133 20.0403Z" />
                                    <path
                                        d="M14.1593 12.2363L13.666 12.7359C13.7884 12.7107 13.9006 12.6498 13.9884 12.5609C14.0761 12.472 14.1356 12.359 14.1593 12.2363Z" />
                                    <path
                                        d="M4.04102 17.1505C4.04102 17.3182 4.10764 17.479 4.22624 17.5976C4.34484 17.7162 4.5057 17.7829 4.67342 17.7829H7.73427L7.924 16.9607L8.00621 16.6129V16.5813H5.30583V15.2912H9.31529L10.5801 14.0264H4.67342C4.5057 14.0264 4.34484 14.093 4.22624 14.2116C4.10764 14.3302 4.04102 14.491 4.04102 14.6588V17.1505Z" />
                                    <path
                                        d="M21.4258 10.655L19.2946 8.52381C19.2 8.42897 19.0877 8.35372 18.9639 8.30238C18.8402 8.25104 18.7076 8.22461 18.5737 8.22461C18.4397 8.22461 18.3071 8.25104 18.1834 8.30238C18.0597 8.35372 17.9473 8.42897 17.8527 8.52381L9.18241 17.2447L8.46779 20.2866C8.44103 20.4178 8.44043 20.553 8.46602 20.6845C8.49161 20.816 8.54288 20.9411 8.6169 21.0527C8.69092 21.1643 8.78623 21.2602 8.89738 21.335C9.00852 21.4097 9.13332 21.4617 9.26462 21.4882C9.32981 21.4947 9.39548 21.4947 9.46067 21.4882C9.53815 21.5008 9.61717 21.5008 9.69466 21.4882L12.7618 20.8115L21.4258 12.1285C21.5205 12.0345 21.5956 11.9227 21.6468 11.7995C21.6981 11.6763 21.7245 11.5442 21.7245 11.4108C21.7245 11.2773 21.6981 11.1452 21.6468 11.022C21.5956 10.8988 21.5205 10.787 21.4258 10.693V10.655ZM12.1168 19.6605L9.80217 20.1728L10.365 17.8771L16.8662 11.3064L18.6495 13.0898L12.1168 19.6605ZM19.3642 12.3752L17.5808 10.5918L18.5863 9.59891L20.3823 11.3949L19.3642 12.3752Z" />
                                </svg>
                            </div>
                            <div class="text-[12px] ">Absensi</div>
                        </div>
                        <div class="garis bg-[#2F5B6B] h-full w-[3px] rounded"></div>
                    </a>
                    </a>
                    <a href="/cuti"
                        class="p-2 rounded-s-full flex items-start justify-between @if (in_array(Request::path(), $cuti)) bg-white text-[#093545]
                        @else
                        bg-[#2F5B6B] text-white @endif">
                        <div class="wrap w-full flex flex-col items-center">
                            <div class="icon">
                                <svg class="@if (in_array(Request::path(), $cuti)) fill-[#093545]
                                @else
                                fill-white @endif"
                                    width="16" height="20" viewBox="0 0 16 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.4738 2.40406H1.93628V17.5818H13.3196V5.24989H10.4738V2.40406ZM1.93628 0.506836H11.4224L15.2168 4.30128V17.5818C15.2168 18.085 15.017 18.5676 14.6612 18.9234C14.3054 19.2792 13.8228 19.4791 13.3196 19.4791H1.93628C1.43311 19.4791 0.950544 19.2792 0.594746 18.9234C0.238948 18.5676 0.0390625 18.085 0.0390625 17.5818V2.40406C0.0390625 1.90088 0.238948 1.41832 0.594746 1.06252C0.950544 0.706721 1.43311 0.506836 1.93628 0.506836ZM3.83351 9.04434H11.4224V10.9416H3.83351V9.04434ZM3.83351 12.8388H11.4224V14.736H3.83351V12.8388Z" />
                                </svg>
                            </div>
                            <div class="text-[12px] ">Cuti</div>
                        </div>
                        <div class="garis bg-[#2F5B6B] h-full w-[3px] rounded"></div>
                    </a>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-white text-[#093545] p-2 text-center rounded mr-3 md:mr-[30px]">
                        Logout
                    </button>
                </form>

            </div>
        </div>
        {{-- CONTENT --}}
        <div class="content shadow-md md:px-10 md:pl-[180px]  md:pt-[110px] pt-[85px] bg-[#F0F4F9] min-h-screen">
            <div
                class="kota mx-2 md:mx-0 bg-white border-2 border-black rounded-md p-4 overflow-auto h-[87vh] md:h-[83vh]">
                {{ $slot }}
            </div>
        </div>
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
