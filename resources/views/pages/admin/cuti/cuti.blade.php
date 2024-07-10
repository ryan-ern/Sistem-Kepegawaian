<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-admin>
        @if ($message = Session::get('error'))
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                            class="oc sf axy">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                            <span
                                                class="text-xl font-bold">{{ ucfirst($message[0]) }}</span>{{ substr($message, 1) }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="button" onclick="closeModal()"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                                    Ok
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                            class="oc sf axy">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                            <span
                                                class="text-xl font-bold">{{ ucfirst($message[0]) }}</span>{{ substr($message, 1) }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="button" onclick="closeModal()"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                                    Ok
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <script>
            function closeModal() {
                const modal = document.querySelector('.relative.z-10');
                modal.style.display = 'none';
            }
        </script>
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Data Cuti Pegawai</div>
        {{-- konten --}}
        <div class="">
            <div class="flex justify-end">
                <div class="sears relative">
                    <div class="absolute right-[10px] top-[8px]">
                        <img src="../../Assets/cari.svg" alt="">
                    </div>
                    <form action="{{route('cuti.home')}}" method="GET">
                        <input type="text" class="rounded-lg border border-gray-400 pr-10" placeholder="Search here" name="search" value="{{request('search')}}">
                    </form>
                </div>
            </div>
            {{-- hari --}}
            {{-- table --}}
            <div class="relative w-full overflow-x-auto rounded-lg shadow border border-[#969BA0] overflow-y-auto mt-5">
                <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                    <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                        <tr>
                            <th scope="col" class="px-3 py-3">
                                No
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-3 py-3">
                                NIP
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Jabatan
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Golongan
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Tanggal Awal
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Tanggal Akhir
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Jenis
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Keterangan
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-3 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cuti as $a)
                            <tr
                                class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                                <td class="px-3 py-3">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ $a->user->name }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ $a->user->nip }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ $a->user->jabatan }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ $a->golongan }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ $a->start_date }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ $a->end_date }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ $a->jenis_cuti }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ Str::limit($a->keterangan, 15, '...') }}
                                </td>
                                <td class="px-3 py-3">
                                    {{ $a->status }}
                                </td>
                                <td class="px-3 py-3">
                                    <a href="{{ route('cuti.edit', $a->id) }}" class="flex justify-center">
                                        <img src="./../../Assets/aksi.svg" alt="">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </x-sidebar-admin>
</body>

</html>
