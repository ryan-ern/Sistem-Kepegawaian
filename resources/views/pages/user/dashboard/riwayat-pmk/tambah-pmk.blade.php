<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Peninjauan Masa Kerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Tambah Data Riwayat Peninjauan Masa Kerja">
        <div class="text-[22px] font-semibold text-[#2F5B6B]">Masukkan Data</div>
        <div class="form mt-[20px]">
            <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                <div class="md:w-1/2 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="" class="text-black ">Jenis Peninjauan Masa Kerja</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Jenis Peninjauan Masa Kerja"  />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Instansi/Perusahaan</label>
                        <input type="text" id="kontak"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Instansi/Perusahaan"  />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal Awal</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                             />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal Akhir</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                             />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nomor Surat Keputusan</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nomor Surat Keputusan"  />
                    </div>
                </div>
                {{-- KANAN --}}
                <div class="md:w-1/2 w-full flex flex-col gap-3">
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal Surat Keputusan</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                             />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nomor Pertek BKN</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nomor Pertek BKN"  />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal Pertek BKN</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                             />
                    </div>
                    <div class="wrap-gelar flex gap-3">
                        <div class="wrap w-full md:w-1/2">
                            <label For="" class="text-black ">Masa Kerja (Tahun)</label>
                            <input type="text" id=""
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tahun"  />
                        </div>
                        <div class="wrap w-full md:w-1/2">
                            <label For="" class="text-black ">Masa Kerja (Bulan)</label>
                            <input type="text" id=""
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Bulan"  />
                        </div>
                    </div>
                    <div class="wrap">
                        <label For="image" class="text-black">Surat PMK</label>
                        <div class="relative">
                            <input type="file" id="image" accept="image/*" class="hidden"  />
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
