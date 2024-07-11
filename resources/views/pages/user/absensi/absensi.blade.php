<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Absensi Anda">
        <p class="text-[14px] md:text-[16px]">Berikut data absensi anda, jika ingin melakukan izin atau sakit silahkan
            upload surat dibawah ini </p>
        <div class="flex items-center gap-3 mt-3">
            <div class="font-semibold text-[28px]">Silahkan Mengisi Keterangan anda disini</div>
            <a class="cursor-pointer bg-[#4F8EA5] text-white py-1 px-4 rounded-lg inline-block"
                href="/absensi/upload-absensi">Upload</a>
        </div>
        <div class="flex justify-end">
            <div class="wrap flex">
                <div class="car flex gap-2 items-center">
                    <div class="lef">
                        <form action="{{route('absen.index')}}" method="GET">
                            <input type="date"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-4 text-w-full bg-transparent" value="{{request('date')}}" name="date">
                        </div>
                        <div class="ri">
                            <button class="bg-[#9BB8C3] p-1 rounded px-6">Cari</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        {{-- hari --}}
        {{-- table --}}
        <div class="relative w-full overflow-x-auto rounded-lg shadow border border-[#969BA0] overflow-y-auto mt-5">
            <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                <thead class="text-base text-white bg-[#2F5B6B] rounded-lg">
                    <tr>
                        <th scope="col" class="px-3 py-3">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Jam
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absen as $a)
                        <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                            <td class="px-3 py-3">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-3 py-3">
                                {{ $a->tgl }}
                            </td>
                            <td class="px-3 py-3">
                                {{ $a->jam }}
                            </td>
                            <td class="px-3 py-3 flex items-center gap-2">
                                <div
                                    class="under inline-block p-1 px-3 bg-[#4F8EA5] text-white w-[70px] text-center rounded-sm">
                                    {{ $a->status }}</div>
                                <a href="{{ asset('storage/' . $a->file_path) }}" target="_blank">
                                    <img class="bg-[#4F8EA5] py-1 px-3 rounded-sm" src="../../Assets/doc.svg"
                                        alt="View File">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-sidebar-user>
</body>

</html>
