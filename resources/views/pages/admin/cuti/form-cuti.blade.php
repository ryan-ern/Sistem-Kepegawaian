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
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Form Pengajuan Cuti Pegawai</div>
        {{-- konten --}}
        <div class="">
            {{-- form --}}
            <div class="form mt-5">
                <div class="wrap w-full md:flex-row flex-col  flex md:gap-7 gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Nama</div>
                                <div class="nama">:</div>
                            </div>
                            <input type="text"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Tanggal Awal</div>
                                <div class="nama">:</div>
                            </div>
                            <input type="date"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Tanggal Akhir</div>
                                <div class="nama">:</div>
                            </div>
                            <input type="date"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                    </div>
                    {{-- TENGAH --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">NIP</div>
                                <div class="NIP">:</div>
                            </div>
                            <input type="text"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan NIP">
                        </div>
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Golongan</div>
                                <div class="Golongan">:</div>
                            </div>
                            <input type="text"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Golongan">
                        </div>
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Jabatan</div>
                                <div class="Jabatan">:</div>
                            </div>
                            <input type="text"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Jabatan">
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Jenis Cuti</div>
                                <div class="nama">:</div>
                            </div>
                            <select
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                            id="cars">
                            <option value="Sakit">Sakit</option>
                            <option value="Tahunan">Tahunan</option>
                            <option value="Melahirkan">Melahirkan</option>
                            <option value="Alasan Penting">Alasan Penting</option>
                            <option value="Diluar Tanggung Negara">Diluar Tanggung Negara</option>
                            <option value="Cuti Besar">Cuti Besar</option>
                        </select>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="wrap input flex gap-2 mt-2">
                    <div class="nama text-[16px] font-medium flex w-[130px] justify-between">
                        <div class="nama">Keterangan</div>
                        <div class="Keterangan">:</div>
                    </div>
                    <textarea
                        class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-[80%] h-[250px] bg-transparent"
                        name='keterangan' placeholder="Saya ingin mengajuan cuti karena...">Saya ingin mengajuan cuti karena </textarea>
                </div>
                {{-- upload --}}
                <div class="wrap mt-7 flex gap-2 items-center">
                    <label For="image" class="text-black">Upload Surat Cuti :</label>
                    <div class="relative">
                        <input type="file" id="image" accept="image/*" class="hidden" />
                        <label for="image"
                            class="cursor-pointer border border-[#999999]  px-4 rounded-lg inline-block">
                            Unggah File
                        </label>
                    </div>
                </div>
                {{-- upload --}}
                <div class="wrap flex mt-[60px] gap-3">
                    <button data-modal-target="setuju" data-modal-toggle="setuju"
                        class="p-2 bg-[#9BB8C3] hover:bg-[#4F8EA5] px-16 rounded text-white">Setuju</button>
                    <button data-modal-target="ditolak" data-modal-toggle="ditolak" class="p-2 bg-[#9BB8C3] hover:bg-[#4F8EA5] px-16 rounded text-white">Tolak</button>
                </div>
            </div>
            {{--POP UP Setuju --}}
            <div id="setuju" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div data-modal-hide="setuju" class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="setuju">
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
                                <div class="head font-medium text-[28px]">Data Berhasil Dikirim</div>
                                <div class="icon">
                                    <img src="../../Assets/ceklist.svg" alt="">
                                </div>
                                <button data-modal-hide="setuju"
                                    class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                    Selesai
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Setuju --}}

            {{--POP UP Ditolak --}}
            <div id="ditolak" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full flex justify-center items-center h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#F4EFEF] w-[55%] rounded-lg shadow max-h-full overflow-y-auto">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                                data-modal-hide="ditolak">
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
                            <div class="wrap flex gap-8 flex-col">
                                <div class="head font-medium text-[28px] text-center">Pengajuan Ditolak</div>
                                <div class="icon">
                                    <div class="wrap input flex gap-2 mt-2">
                                        <div class="nama text-[16px] font-medium flex w-[130px] justify-between">
                                            <div class="nama">Keterangan Ditolak:</div>
                                            <div class="Keterangan">:</div>
                                        </div>
                                        <textarea
                                            class="border bg-white border-black text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 p-2 w-[80%] h-[250px] bg-transparent"
                                            name='keterangan'></textarea>
                                    </div>
                                </div>
                                <div class="wrap flex justify-center">
                                    <button data-modal-target="tolak" data-modal-toggle="tolak" 
                                        class="p-1 bg-[#9BB8C3] hover:bg-[#4F8EA5] px-16 rounded text-white">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Ditolak --}}
            {{--POP UP Tolak --}}
            <div id="tolak" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div data-modal-hide="tolak" class="relative p-4 w-full flex justify-center items-center h-full">
                <!-- Modal content -->
                <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                            data-modal-hide="tolak">
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
                            <div class="head font-medium text-[28px]">Data Berhasil Ditolak</div>
                            <div class="icon">
                                <img src="../../Assets/ceklist.svg" alt="">
                            </div>
                            <button data-modal-hide="setuju"
                                class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                Selesai
                            </button>
                        </div>
                    </div>
        </div>
    </x-sidebar-admin>
</body>

</html>
