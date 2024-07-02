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
            <form action="{{ route('cuti.update', $cuti->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form mt-5">
                    <div class="wrap w-full md:flex-row flex-col  flex md:gap-7 gap-3">
                        {{-- KIRI --}}
                        <div class="md:w-1/3 w-full flex flex-col gap-3">
                            <div class="wrap input flex gap-2 items-center">
                                <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                    <div class="nama">Nama</div>
                                    <div class="nama">:</div>
                                </div>
                                <input type="hidden" name="user_id" value="{{ $cuti->user_id }}">
                                <input type="text" name="name" disabled value='{{ $cuti->user->name }}'
                                    class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                    placeholder="Masukkan Nama">
                            </div>
                            <div class="wrap input flex gap-2 items-center">
                                <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                    <div class="nama">Tanggal Awal</div>
                                    <div class="nama">:</div>
                                </div>
                                <input type="date" name="start_date" required value="{{ $cuti->start_date }}"
                                    class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                            </div>
                            <div class="wrap input flex gap-2 items-center">
                                <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                    <div class="nama">Tanggal Akhir</div>
                                    <div class="nama">:</div>
                                </div>
                                <input type="date" name="end_date" required value="{{ $cuti->end_date }}"
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
                                <input type="text" name="nip" disabled value="{{ $cuti->user->nip }}"
                                    class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                    placeholder="Masukkan NIP">
                            </div>
                            <div class="wrap input flex gap-2 items-center">
                                <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                    <div class="nama">Golongan</div>
                                    <div class="Golongan">:</div>
                                </div>
                                <input type="text" name="golongan" value="{{ $cuti->golongan }}" required
                                    class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                    placeholder="Masukkan Golongan">
                            </div>
                            <div class="wrap input flex gap-2 items-center">
                                <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                    <div class="nama">Jabatan</div>
                                    <div class="Jabatan">:</div>
                                </div>
                                <input type="text" name="jabatan" value="{{ $cuti->user->jabatan }}" required
                                    disabled
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
                                    <option value="Sakit" {{ $cuti->jenis_cuti == 'Sakit' ? 'selected' : '' }}>Sakit
                                    </option>
                                    <option value="Tahunan" {{ $cuti->jenis_cuti == 'Tahunan' ? 'selected' : '' }}>
                                        Tahunan
                                    </option>
                                    <option value="Melahirkan"
                                        {{ $cuti->jenis_cuti == 'Melahirkan' ? 'selected' : '' }}>
                                        Melahirkan</option>
                                    <option value="Alasan Penting"
                                        {{ $cuti->jenis_cuti == 'Alasan Penting' ? 'selected' : '' }}>Alasan
                                        Penting
                                    </option>
                                    <option value="Diluar Tanggung Negara"
                                        {{ $cuti->jenis_cuti == 'Diluar Tanggung Negara' ? 'selected' : '' }}>Diluar
                                        Tanggung Negara</option>
                                    <option value="Cuti Besar"
                                        {{ $cuti->jenis_cuti == 'Cuti Besar' ? 'selected' : '' }}>Cuti Besar
                                    </option>
                                </select>
                            </div>
                            <div class="wrap input flex gap-2 items-center">
                                <div class="nama text-[16px] font-medium flex w-[200px] justify-between">
                                    <div class="nama">Status</div>
                                    <div class="nama">:</div>
                                </div>
                                <select name="status" required
                                    class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                    id="cars">
                                    <option value="diproses" {{ $cuti->status == 'diproses' ? 'selected' : '' }}>
                                        Diproses
                                    </option>
                                    <option value="disetujui" {{ $cuti->status == 'disetujui' ? 'selected' : '' }}>
                                        Disetujui
                                    </option>
                                    <option value="ditolak" {{ $cuti->status == 'ditolak' ? 'selected' : '' }}>
                                        Ditolak</option>
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
                            name='keterangan' required>{{ $cuti->keterangan }}</textarea>
                    </div>
                    <div class="right flex flex-col gap-1 mt-[20px]">
                        <div class="font-semibold text-[14px]">Upload Surat</div>
                        <div class="wrap">
                            <div class="relative">
                                <input type="file" id="file" accept="image/*" class=""
                                    name="file" />
                                {{-- <label for="file" class="cursor-pointer">
                                    <img src="../../../Assets/upload.svg" alt="">
                                </label> --}}
                            </div>
                        </div>
                    </div>
                    <div class="wrap flex mt-[50px] gap-3">
                        <button type="submit" data-modal-target="setuju" data-modal-toggle="setuju"
                            class="p-2 bg-[#9BB8C3] hover:bg-[#4F8EA5] px-16 rounded text-white">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </x-sidebar-admin>
</body>

</html>
