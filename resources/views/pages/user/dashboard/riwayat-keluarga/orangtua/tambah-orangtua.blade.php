<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Riwayat Orang Tua</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Tambah Data Riwayat Orang Tua">
        <div class="text-[22px] font-semibold text-[#2F5B6B]">Masukkan Data</div>
        <form action="{{ route('orangtua.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form mt-[20px]">
                <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Status</label>
                            <select name="status_keluarga" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                                <option value="Hidup">Hidup</option>
                                <option value="Meninggal">Meninggal</option>
                            </select>
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Status Pekerjaan Orang Tua</label>
                            <select name="status_pekerjaan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                                <option value="Bukan PNS">Bukan PNS</option>
                                <option value="PNS">PNS</option>
                            </select>
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nama</label>
                            <input type="text" name="nama" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Status Pernikahan</label>
                            <select name="status_pernikahan" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                                <option value="Kawin">Kawin</option>
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                        </div>
                        <div class="wrap">
                            <label For="image" class="text-black">Surat Kartu Keluarga</label>
                            <div class="relative">
                                <input type="file" id="file" accept="application/pdf" class=""
                                    name="file_ortu[]" multiple />
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
                            <label For="" class="text-black ">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Jenis Kelamin</label>
                            <select name="jk" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                            </select>
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Identitas</label>
                            <input type="text" name="no_identitas" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Identitas" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Email</label>
                            <input type="text" name="email" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Email" />
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal Meninggal</label>
                            <input type="date" name="tgl_meninggal"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Telepon</label>
                            <input type="text" id="" name="no_tel" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Telepon" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Handphone</label>
                            <input type="text" id="" name="no_hp" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Handphone" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Agama</label>

                            <select name="agama" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainnya">Lainnya</option>
                                <option value="Kepercayaan Terhadap Tuhan YME">Kepercayaan Terhadap Tuhan YME</option>
                            </select>
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
