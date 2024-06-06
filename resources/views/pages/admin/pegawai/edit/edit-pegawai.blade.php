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
            </div>
        </div>
        {{-- as --}}
        <div class="form mt-[20px]">
            <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                {{-- KIRI --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="avatar relative">
                        <img class="w-[100px]" src="../../Assets/user3.png" alt="">
                        <div class="wrap absolute -bottom-[7px] left-[85px]">
                            <div class="relative">
                                <input type="file" id="image" accept="image/*" class="hidden" />
                                <label for="image" class="cursor-pointer">
                                    <img src="../../Assets/image.svg" alt="">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="wrap mt-[11px]">
                        <label For="" class="text-black ">Nama</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nama" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">NIP</label>
                        <input type="text" id="kontak"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan NIPi" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">No Kartu Keluarga</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan No Kartu Keluarga" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nomor Telepon</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nomor Telepon" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Alamat</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Alamat" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal NPWP</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Tanggal NPWP" />
                    </div>
                </div>
                {{-- TENGAH --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="" class="text-black ">Status</label>
                        <select
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                            id="cars">
                            <option value="Hidup">Hidup</option>
                            <option value="Meninggal">Meninggal</option>
                        </select>
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Agama</label>
                        
                        <select
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                            id="cars">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                            <option value="Kepercayaan Terhadap Tuhan YME">Kepercayaan Terhadap Tuhan YME</option>
                        </select>
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Satuan Kerja</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Satuan Kerja" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Kerja Jabatan (Angka)</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Kerja Jabtan (Angka)" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Email</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Email" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal Lahir</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Tanggal Lahir" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tempat Lahir</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Tempat Lahir" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">No NPWP</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan No NPWP" />
                    </div>
                </div>
                {{-- KANAN --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap">
                        <label For="" class="text-black ">Lokasi Kerja</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Lokasi Kerja" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">No BPJS Kesehatan</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan No BPJS Kesehatan" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">No Akta Kelahiran</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan No Akta Kelahiran" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">No Karis/Kasus</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan No Karis/Kasus" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">No TASPEN</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan No TASPEN" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal TASPEN</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Tanggal TASPEN" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">No TAPERA</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan No TAPERA" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">No KPPN/Kantor Pembayaran Gaji</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan No KPPN/Kantor Pembayaran Gaji" />
                    </div>
                </div>
            </div>
        </div>
        <div class="kirim flex justify-end mt-5">
            <a href="/admin/edit-pegawai/data-diri" class="bg-[#2F5B6B] hover:bg-[#1c404d] text-white py-2 px-8 rounded-lg">Selanjutnya</a>
        </div>
    </x-sidebar-admin>
</body>

</html>
