<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah SKP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Tambah Data Riwayat SKP">
        <div class="text-[22px] font-semibold text-[#2F5B6B]">Masukkan Data</div>
        <form action="{{ route('skp.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label For="" class="text-black ">Nilai SKP</label>
                            <input type="text" id="kontak" name="nilai" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai SKP" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Orientasi Pelayanan</label>
                            <input type="text" name="ot" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai Orientasi Pelayanan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Integritas</label>
                            <input type="text" name="integritas" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai Integritas" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Komitmen</label>
                            <input type="text" name="komitmen" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai Komitmen" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Disiplin</label>
                            <input type="text" name="disiplin" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai Disiplin" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Kerja Sama</label>
                            <input type="text" name="kerja_sama" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai Kerja Sama" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Status Penilai</label>
                            <input type="text" name="status_penilai" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Status Penilai" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Status Atasan</label>
                            <input type="text" name="status_atasan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Status Atasan" />
                        </div>
                    </div>
                    {{-- TENGAH --}}

                    <div class="md:w-1/3 w-full flex flex-col gap-3">

                        <div class="wrap">
                            <label For="" class="text-black ">Kepemimpinan</label>
                            <input type="text" id="kontak" name="kepemimpinan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai Kepemimpinan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Jumlah</label>
                            <input type="text" name="jumlah" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Jumlah" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nilai Perilaku Kerja</label>
                            <input type="text" name="perilaku" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai Perilaku Kerja" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nilai Prestasi Kerja</label>
                            <input type="text" name="prestasi" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nilai Prestasi Kerja" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Atasan Non PNS ID</label>
                            <input type="text" name="atasan_nonpns" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Atasan Non PNS ID" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Atasan Jabatan</label>
                            <input type="text" name="atasan_jabatan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Atasan Jabatan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Penilai Jabatan</label>
                            <input type="text" name="penilai_jabatan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Penilai Jabatan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Golongan Penilai TMT</label>
                            <input type="date" name="golongan_penilai_tmt" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Golongan Atasan TMT</label>
                            <input type="date" name="golongan_atasan_tmt" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">

                        <div class="wrap">
                            <label For="" class="text-black ">Penilai Golongan</label>
                            <input type="text" id="" name="golongan_penilai" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Penilai Golongan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Atasan Golongan </label>
                            <input type="text" id="" name="golongan_atasan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Atasan Golongan " />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nama Penilai </label>
                            <input type="text" id="" name="nama_penilai" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama Penilai " />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nama Atasan </label>
                            <input type="text" id="" name="nama_atasan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama Atasan " />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">NIP/NIK Penilai </label>
                            <input type="text" id="" name="nip_penilai" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan NIP/NIK Penilai " />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">NIP/NIK Atasan </label>
                            <input type="text" id="" name="nip_atasan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan NIP/NIK Atasan " />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Jenis Jabatan </label>
                            <input type="text" id="" name="jenis_jabatan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Jenis Jabatan " />
                        </div>
                        <div class="wrap">
                            <label For="image" class="text-black">Upload Surat</label>
                            <div class="relative">
                                <input type="file" id="file" accept="application/pdf" class=""
                                    name="file_skp[]" multiple />
                                {{-- <label for="file"
                                    class="cursor-pointer bg-[#2F5B6B] text-white py-2 px-4 rounded-lg inline-block">
                                    Unggah File
                                </label> --}}
                            </div>
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
