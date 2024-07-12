<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-admin>
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Data Absensi Pegawai</div>
        {{-- Konten --}}
        <div class="">
            <div class="flex justify-end">
                {{-- <div class="left flex gap-2">
                    <a href="{{ route('absensi.detail', ['id' => request()->route('id'), 'filter' => 'today']) }}"
                        class="bg-[#9BB8C3] hover:bg-[#485e66] p-1 rounded px-6 {{ $filter == 'today' ? 'bg-[#485e66]' : '' }}">Hari
                        Ini</a>
                    <a href="{{ route('absensi.detail', ['id' => request()->route('id'), 'filter' => 'all']) }}"
                        class="bg-[#9BB8C3] hover:bg-[#485e66] p-1 rounded px-6 {{ $filter == 'all' ? 'bg-[#485e66]' : '' }}">Semua</a>
                </div> --}}
                <div class="wrap right flex gap-3">
                    <div class="sears relative">
                    <form action="{{route('absensi.detail', ['id' => request()->route('id')])}}" method="GET">
                            <input type="text"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-4 text-w-full bg-transparent"
                                placeholder="Search here Name" name="search" value="{{request('search')}}">
                        </div>
                        <div class="car flex gap-2 items-center">
                            <div class="lef">
                                <input type="date"
                                    class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-4 text-w-full bg-transparent" name="date" value="{{request('date')}}">
                            </div>
                            <div class="ri">
                                <button class="bg-[#9BB8C3] p-1 rounded px-6">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- Hari --}}
            {{-- Table --}}
            <div class="relative w-full overflow-x-auto rounded-lg shadow border border-[#969BA0] overflow-y-auto mt-5">
                <table class="w-full text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                    <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                        <tr>
                            <th scope="col" class="px-3 py-3">No</th>
                            <th scope="col" class="px-3 py-3">Nama</th>
                            <th scope="col" class="px-3 py-3">NIP</th>
                            <th scope="col" class="px-3 py-3">Tanggal</th>
                            <th scope="col" class="px-3 py-3">Jam</th>
                            <th scope="col" class="px-3 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absen as $a)
                            <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">{{ $loop->iteration }}</td>
                                <td class="px-3 py-3">{{ $a->user->name }}</td>
                                <td class="px-3 py-3">{{ $a->user->nip }}</td>
                                <td class="px-3 py-3">{{ $a->tgl }}</td>
                                <td class="px-3 py-3">{{ $a->jam }}</td>
                                <td class="px-3 py-3 flex items-center gap-2">
                                    <div
                                        class="under inline-block p-1 px-3 bg-[#E9F6FB] text-black w-[70px] text-center rounded-sm">
                                        {{ $a->status }}
                                    </div>
                                    <a href="{{ asset('storage/' . $a->file_path) }}" target="_blank"
                                        class="bg-[#E9F6FB] p-1 rounded px-6">
                                        Lihat File
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @if ($absen->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center py-3">Tidak ada data absensi.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </x-sidebar-admin>
</body>

</html>
