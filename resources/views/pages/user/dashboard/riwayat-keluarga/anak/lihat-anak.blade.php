<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Data Riwayat Anak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
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
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->no_anak }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Status Pekerjaan Anak</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->status_pekerjaan }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nama</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->nama }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Tanggal Lahir</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->tgl_lahir }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Identitas</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->no_identitas }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Jenis Kelamin</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->jk }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Status Pernikahan</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->status_nikah }}</div>
                    </div>
                </div>
            </div>
            {{-- KANAN --}}
            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Tanggal Meninggal</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->tgl_meninggal ? $anak->tgl_meninggal : '-' }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Akta Meninggal</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->no_akta_meninggal ? $anak->no_akta_meninggal : '-' }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Akta Kelahiran</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->no_lahir }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Telepon</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->no_tel }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Status Hidup</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->status_keluarga }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Email</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->email }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Agama</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $anak->agama }}</div>
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
                    @foreach ($anak->files as $file)
                        <tr class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                            <td class="px-3 py-3">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-3 py-3">
                                {{ $file->file_name ? $file->file_name : '-' }}
                            </td>
                            <td class="px-3 py-3">
                                <button title="Download" class="mr-3">
                                    <a href="{{ asset('storage/' . $file->file_path) }}"
                                        download="{{ $file->file_name }}" title="Download">
                                        <img src="{{ asset('Assets/download.svg') }}" alt="">
                                    </a>
                                </button>
                                <button title="Lihat">
                                    <a href="{{ asset('storage/' . $file->file_path) ? asset('storage/' . $file->file_path) : '#' }}"
                                        target="_blank">
                                        <img src="{{ asset('Assets/eye.svg') }}" alt="">
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-sidebar-user>
</body>

</html>
