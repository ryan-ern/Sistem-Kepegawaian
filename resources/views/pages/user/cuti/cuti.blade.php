<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Pengajuan Cuti">
        
        <p class="text-[14px] md:text-[16px]">Silahkan lakukan pengajuan cuti anda dengan mengisi form dibawah ini</p>
        <p class="text-[28px] my-8 underline text-[#464255] font-semibold">Form Pengajuan Cuti</p>
        {{--  --}}
        <form action="{{ route('cuti.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="wrap w-full md:flex-row flex-col flex md:gap-7 gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Nama</div>
                                <div class="nama">:</div>
                            </div>
                            <input type="text" disabled value="{{ auth()->user()->name }}" name="nama"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Tanggal Awal</div>
                                <div class="nama">:</div>
                            </div>
                            <input type="date" required name="start_date"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Tanggal Akhir</div>
                                <div class="nama">:</div>
                            </div>
                            <input type="date" required name="end_date"
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
                            <input type="text" disabled value="{{ auth()->user()->nip }}" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan NIP">
                        </div>
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Golongan</div>
                                <div class="Golongan">:</div>
                            </div>
                            <input type="text" name="golongan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Golongan">
                        </div>
                        <div class="wrap input flex gap-2 items-center">
                            <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                <div class="nama">Jabatan</div>
                                <div class="Jabatan">:</div>
                            </div>
                            <input type="text" disabled value="{{ auth()->user()->jabatan }}"
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
                            <select name="jenis_cuti" required
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
                {{-- Keterangan --}}
                <div class="wrap input flex gap-2 mt-2">
                    <div class="nama text-[16px] font-medium flex w-[130px] justify-between">
                        <div class="nama">Keterangan</div>
                        <div class="Keterangan">:</div>
                    </div>
                    <textarea required
                        class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-[80%] h-[250px] bg-transparent"
                        name='keterangan'></textarea>
                </div>
                {{-- Submit Button --}}
                <div class="wrap flex justify-end mt-[70px]">
                    <button type="submit" class="p-2 bg-[#000000] px-16 rounded text-white">Kirim</button>
                </div>
            </div>
        </form>

    </x-sidebar-user>

</body>

</html>
