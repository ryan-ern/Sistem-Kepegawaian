<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pendidikan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Tambah Data Riwayat Golongan">
        <div class="text-[22px] font-semibold text-[#2F5B6B]">Masukkan Data</div>
        <div class="form mt-[20px]">
            <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                {{-- KIRI --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="" class="text-black ">Jenis Jabatan</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Jenis Jabatan" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Jenis Mutas</label>
                        <input type="text" id="kontak"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Jenis Mutasi" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Jenis Penugasan</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Jenis Penugasan" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal SK</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal TMT Jabatan</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal TMT Pelantikan</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                    </div>

                </div>
                {{-- TENGAH --}}

                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="" class="text-black ">Status Riwayat</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Status Riwayat" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Instansi</label>
                        <input type="text" id="kontak"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Instansi" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Satuan Kerja</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Satuan Kerja" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Satuan Kerja Induk</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Satuan Kerja Induk" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Unit Organisasi</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Unit Organisasi" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nama Jabatan</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nama Jabatan" />
                    </div>
                </div>
                {{-- KANAN --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap">
                        <label For="" class="text-black ">Nomer SK</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nama Universitas" />
                    </div>
                    <div class="wrap">
                        <label For="image" class="text-black">Surat Keterangan Jabatan</label>
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
            <button class="bg-[#2F5B6B] text-white py-2 px-8 rounded-lg">Kirim</button>
        </div>
    </x-sidebar-user>
</body>

</html>
