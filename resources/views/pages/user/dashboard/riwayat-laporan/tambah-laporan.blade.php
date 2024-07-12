<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Laporan Kinerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Tambah Data Riwayat Laporan Kinerja">
        <div class="text-[22px] font-semibold text-[#2F5B6B]">Masukkan Data</div>
        <form action="{{ route('kinerja.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form mt-[20px]">
                <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Tahun</label>
                            <input type="text" id="" name="tahun" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tahun" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">NIP</label>
                            <input type="text" id="kontak" name="nip" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan NIP" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nama</label>
                            <input type="text" name="nama" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Unit Kerja</label>
                            <input type="text" name="unit_kerja" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Unit Kerja" />
                        </div>
                        <div class="wrap">
                            <label For="image" class="text-black">Upload Surat</label>
                            <div class="relative">
                                <input type="file" id="file" accept="application/pdf" class=""
                                    name="file_kinerja[]" multiple />
                                {{-- <label for="file"
                                    class="cursor-pointer bg-[#2F5B6B] text-white py-2 px-4 rounded-lg inline-block">
                                    Unggah File
                                </label> --}}
                            </div>
                        </div>
                    </div>
                    {{-- TENGAH --}}

                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal</label>
                            <input type="date" name="tgl" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Jabatan</label>
                            <input type="text" id="kontak" name="jabatan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Jabatan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Hasil Kinerja</label>
                            <input type="text" name="hasil" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Hasil Kinerja" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nama Instansi</label>
                            <input type="text" name="instansi" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama Instansi" />
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">

                        <div class="wrap">
                            <label For="" class="text-black ">Perilaku Kinerja</label>
                            <input type="text" id="" name="perilaku" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Perilaku Kinerja" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Kuadran Kerja</label>
                            <input type="text" id="" name="kuadran" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Kuadran Kerja" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nama Penilai Jabatan</label>
                            <input type="text" id="" name="penilai_jabatan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama Penilai Jabatan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nama Penilai</label>
                            <input type="text" id="" name="penilai" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama Penilai" />
                        </div>

                    </div>
                </div>
            </div>
            <div class="kirim flex justify-end mt-5">
                <button type="submit" class="bg-[#2F5B6B] text-white py-2 px-8 rounded-lg">Kirim</button>
            </div>
        </form>
    </x-sidebar-user>
</body>

</html>
