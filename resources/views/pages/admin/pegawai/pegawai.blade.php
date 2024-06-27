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
                <input type="text" class="rounded-lg border border-gray-400 pr-10" placeholder="Search here">
            </div>
        </div>
        {{-- table --}}
        <div class="relative w-full overflow-x-auto rounded-lg border border-[#969BA0] overflow-y-auto mt-5">
            <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                    <tr>
                        <th scope="col" class="px-3 py-3">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Foto
                        </th>
                        <th scope="col" class="px-3 py-3">
                            NIP
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Nama Pegawai
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Jabatan
                        </th>
                        <th scope="col" class="px-3 py-3">
                            Golongan
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
                    @foreach ($users as $user)
                        <tr class="bg-white border-b border-[#969BA0] hover:bg-gray-50 text-black hover:text-black">
                            <td class="px-3 py-3">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-3 py-3">
                                <div class="w-[73px] h-[82px]">
                                    <img class="w-full h-full object-cover" src="{{ asset('storage/' . $user->foto) }}"
                                        alt="">
                                </div>
                            </td>
                            <td class="px-3 py-3">
                                {{ $user->nip }}
                            </td>
                            <td class="px-3 py-3">
                                {{ $user->name }}
                            </td>
                            <td class="px-3 py-3">
                                {{ $user->jabatan }}
                            </td>
                            <td class="px-3 py-3">
                                {{ $user->kelas_jabatan ? $user->kelas_jabatan : '-' }}
                            </td>
                            <td class="px-3 py-3">
                                <div class="p-1 bg-slate-400 rounded-sm text-black inline-block px-4">
                                    {{ $user->status }}
                                </div>
                            </td>
                            <td class="px-3 py-3">
                                <div class="wrap relative">
                                    <button id="dropdownDefaultButton-{{ $user->id }}"
                                        data-dropdown-toggle="dropdown1-{{ $user->id }}" type="button">
                                        <div class="inline-block bg-[#9BB8C3] px-5 p-2 rounded-lg">
                                            <img src="./../Assets/titik.svg" alt="">
                                        </div>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdown1-{{ $user->id }}"
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[120px] absolute">
                                        <ul class="py-2 text-sm text-[#4F8EA5]"
                                            aria-labelledby="dropdownDefaultButton-{{ $user->id }}">
                                            <li>
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="px-4 py-2 hover:bg-gray-100 flex items-center gap-3 link">
                                                    <img src="{{ asset('Assets/edit.svg') }}" alt="Edit">
                                                    Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('user.show', $user->id) }}"
                                                    class=" px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                    <img src="./../Assets/lihat.svg" alt="">
                                                    Lihat
                                                </a>
                                            </li>
                                            <li>
                                                <button data-modal-target="hapus" data-modal-toggle="hapus"
                                                    class=" px-4 py-2 hover:bg-gray-100 flex items-center gap-3">
                                                    <img src="./../Assets/hapus.svg" alt="">
                                                    Hapus
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- POP UP HAPUS --}}
            <div id="hapus" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div data-modal-hide="hapus" class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="hapus">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                            <div class="wrap flex items-center gap-8 flex-col">
                                <div class="head font-medium text-[28px]">Data Berhasil Dihapus</div>
                                <div class="icon">
                                    <img src="../../Assets/sampah.svg" alt="">
                                </div>
                                <button data-modal-hide="hapus" class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                    Selesai
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- POP UP HAPUS --}}
        </div>
    </x-sidebar-admin>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownButtons = document.querySelectorAll('[data-dropdown-toggle]');

        dropdownButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-dropdown-toggle');
                const dropdown = document.getElementById(targetId);

                if (dropdown.classList.contains('hidden')) {
                    dropdown.classList.remove('hidden');
                } else {
                    dropdown.classList.add('hidden');
                }
            });
        });

        // Close the dropdown if clicked outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('[data-dropdown-toggle]') && !event.target.closest('.wrap')) {
                const dropdowns = document.querySelectorAll('[id^="dropdown1-"]');
                dropdowns.forEach(dropdown => {
                    dropdown.classList.add('hidden');
                });
            }
        });
    });
</script>

</html>
