<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Data Riwayat Anak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Data Riwayat Data Anak">
        <div class="font-semibold text-[#2F5B6B] mb-2 md:mb-6">Berikut Data Riwayat Anak</div>
        <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
            {{-- KIRI --}}
            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Anak Ke-</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            1</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Status Pekerjaan Anak</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            Bukan PNS</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nama</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            Yasmin Aisyah</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Tanggal Lahir</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            23/20/2000</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Identitas</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            1856897845523</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Jenis Kelamin</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            Perempuan</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Status Pernikahan</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            Belum kawin</div>
                    </div>
                </div>
            </div>
            {{-- KANAN --}}
            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Tanggal Meninggal</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            -</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Akta Meninggal</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            -</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Akta Kelahiran</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            235689784512</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Telepon</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            235698</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Status Hidup</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            Hidup</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Email</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            yasmin@gmail.com</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Agama</label>
                        <div class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            Islam</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- table --}}
        <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
            <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
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
                    <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            Dokumen Surat.pdf
                        </td>
                        <td class="px-3 py-3">
                            <button title="Download" class="mr-3">
                                <img src="./../../Assets/download.svg" alt="">
                            </button>
                            <button title="Lihat">
                                <img src="./../../Assets/eye.svg" alt="">
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                        <td class="px-3 py-3">
                            1
                        </td>
                        <td class="px-3 py-3">
                            Dokumen Surat.pdf
                        </td>
                        <td class="px-3 py-3">
                            <button title="Download" class="mr-3">
                                <img src="./../../Assets/download.svg" alt="">
                            </button>
                            <button title="Lihat">
                                <img src="./../../Assets/eye.svg" alt="">
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-sidebar-user>
</body>

</html>
