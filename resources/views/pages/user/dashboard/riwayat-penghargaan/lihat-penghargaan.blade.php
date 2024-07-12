<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Pernghargaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Data Riwayat Penghargaan">
        <div class="font-semibold text-[#2F5B6B] mb-2 md:mb-6">Berikut Data Riwayat Pernghargaan</div>
        <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
            {{-- KIRI --}}
            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Jenis Penghargaan</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $reward->jenis }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Tahun Perolehan</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $reward->tahun }}</div>
                    </div>
                </div>

            </div>
            {{-- KANAN --}}
            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Nomor Surat Keputusan</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $reward->no_surat }}</div>
                    </div>
                </div>
                <div class="wrap">
                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                    <div class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                        <label For="" class="text-black font-medium text-[14px]">Tanggal Surat Keputusan</label>
                        <div
                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border border-[#C3C3C3] rounded w-[380px]">
                            {{ $reward->tgl_surat }}</div>
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
                    @foreach ($reward->files as $file)
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
