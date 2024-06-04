<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Ubah Profil Anda">
        <div class="text-[18px] text-[#2F5B6B]">Informasi Pengguna</div>
        <div class="form mt-[20px]">
            <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                {{-- KIRI --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="" class="text-black ">Nama Lengkap</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Ubah Password*</label>
                        <input type="text" id="kontak"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Password" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nomor Telepon</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nomor Telepon" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Email</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Email" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Agama</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Agama" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal Lahir</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                    </div>

                </div>
                {{-- TENGAH --}}

                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="" class="text-black ">NIP</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan NIP" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Satuan Kerja</label>
                        <input type="text" id="kontak"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Satuan Kerja" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nomor Handphone</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nomor Handphone" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">NIK</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan NIK" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Alamat</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Alamat" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tempat Lahir</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Tempat Lahir" />
                    </div>
                </div>
                {{-- KANAN --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap bg-[#E9F6FB] w-full rounded-xl flex justify-center p-3">
                        <div class="kotak">
                            <div class="foto h-[180px] aspect-square bg-[#C3C3C3] rounded-lg"></div>
                            <div class="flex flex-col gap-1 items-center">
                                <div class="User text-[30px] font-semibold">User </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap">
                        <label For="image" class="text-black">Foto Profil</label>
                        <div class="relative">
                            <input type="file" id="image" accept="image/*" class="hidden" />
                            <label for="image"
                                class="cursor-pointer bg-[#2F5B6B] text-white py-2 px-4 rounded-lg inline-block">
                                Unggah File
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="kirim flex justify-end mt-5">
            <a href="/edit-profile-pendukung" class="bg-[#2F5B6B] text-white py-2 px-8 rounded-lg">Lanjutkan</a>
        </div>
    </x-sidebar-user>
</body>

</html>
