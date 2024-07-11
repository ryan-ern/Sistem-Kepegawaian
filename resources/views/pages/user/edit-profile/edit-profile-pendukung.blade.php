<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Ubah Profil Anda">
        <form action="{{ route('profile2.edit') }}" method="POST">
            <div class="text-[18px] text-[#2F5B6B]">Data Pendukung</div>
            <div class="form mt-[20px]">
                @csrf
                @method('PUT')
                <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Lokasi Kerja (Setingkat Kecamatan)</label>
                            <input type="text" id="" name="lokasi_kerja"
                                value="{{ old('lokasi_kerja', auth()->user()->lokasi_kerja) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Lokasi Kerja (Setingkat Kecamatan)" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor NPWP</label>
                            <input type="text" name="no_npwp" value="{{ old('no_npwp', auth()->user()->no_npwp) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor NPWP" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No. BPJS Kesehatan</label>
                            <input type="text" name="no_bpjs" value="{{ old('no_bpjs', auth()->user()->no_bpjs) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No. BPJS Kesehatan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor TASPEN</label>
                            <input type="text" name="no_taspen"
                                value="{{ old('no_taspen', auth()->user()->no_taspen) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor TASPEN" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No. TAPERA</label>
                            <input type="text" name="no_tapera"
                                value="{{ old('no_tapera', auth()->user()->no_tapera) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No. TAPERA" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Kelas Jabatan (Angka)</label>
                            <input type="text" name="kelas_jabatan"
                                value="{{ old('kelas_jabatan', auth()->user()->kelas_jabatan) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Kelas Jabatan (Angka)" />
                        </div>
                    </div>
                    {{-- TENGAH --}}

                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Nomor Akta Kelahiran</label>
                            <input type="text" id="" name="no_akta"
                                value="{{ old('no_akta', auth()->user()->no_akta) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Akta Kelahiran" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal NPWP</label>
                            <input type="date" id="kontak" name="tgl_npwp"
                                value="{{ old('tgl_npwp', auth()->user()->tgl_npwp) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No. Karis/Karsu </label>
                            <input type="text" name="no_karis"
                                value="{{ old('no_karis', auth()->user()->no_karis) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No. Karis/Karsus " />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal TASPEN</label>
                            <input type="date" name="tgl_taspen"
                                value="{{ old('tgl_taspen', auth()->user()->tgl_taspen) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tanggal TASPEN" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">KPPN/Kantor Pembayaran Gaji</label>
                            <input type="text" name="kppn" value="{{ old('kppn', auth()->user()->kppn) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan KPPN/Kantor Pembayaran Gaji" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Kartu Keluarga</label>
                            <input type="text" name="no_kk" value="{{ old('no_kk', auth()->user()->no_kk) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Kartu Keluarga" />
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap bg-[#E9F6FB] w-full rounded-xl flex justify-center p-3">
                            <div class="kotak flex flex-col items-center">
                                <div
                                    class="foto h-[180px] aspect-square bg-[#FFFFFF] mb-5 rounded-lg flex items-center justify-center">
                                    <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt="" />
                                </div>
                                <div class="flex flex-col gap-1 items-center">
                                    <div class="User text-[30px] font-semibold">{{ auth()->user()->name }} </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="kirim flex justify-end mt-5">
                <div class="wrap flex gap-3">
                    <a href="{{ route('profile.show') }}"
                        class="bg-[#2F5B6B] text-white py-2 px-8 rounded-lg">Kembali</a>
                    <button type="submit" class="bg-[#2F5B6B] text-white py-2 px-8 rounded-lg">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </x-sidebar-user>
</body>

</html>
