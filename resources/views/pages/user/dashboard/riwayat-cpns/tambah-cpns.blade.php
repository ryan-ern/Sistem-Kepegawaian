<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Riwayat CPNS/PNS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Tambah Data Riwayat CPNS/PNS">
        <div class="text-[22px] font-semibold text-[#2F5B6B]">Masukkan Data</div>
        <form action="{{ route('pns.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form mt-[20px]">
                <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Status Pegawai</label>
                            <input type="text" id="" name="status_pns" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Status Pegawai" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor SK CPNS</label>
                            <input type="text" id="kontak" name="no_sk_cpns" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor SK CPNSi" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor SK PNS</label>
                            <input type="text" name="no_sk_pns" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor SK PNS" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor SK STTPL</label>
                            <input type="text" name="no_sk_sttpl" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor SK STTPL" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Karpeg</label>
                            <input type="text" name="karpeg" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Karpeg" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal STTPL</label>
                            <input type="date" name="tgl_sttpl" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>

                    </div>
                    {{-- TENGAH --}}

                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Nomor Surat Dokter</label>
                            <input type="text" id="" name="no_surat_dokter" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Surat Dokter" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor SPMT</label>
                            <input type="text" id="kontak" name="no_spmt" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor SPMT" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Pertek C2TH</label>
                            <input type="text" name="no_c2th" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Pertek C2TH" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal Surat Keputusan CPNS</label>
                            <input type="date" name="tgl_sk_cpns" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal Surat Keputusan PNS</label>
                            <input type="date" name="tgl_sk_pns" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="image" class="text-black">Surat Keterangan Jabatan</label>
                            <div class="relative">
                                <input type="file" id="file" accept="application/pdf" class=""
                                    name="file_pns[]" multiple />
                                {{-- <label for="file"
                                    class="cursor-pointer bg-[#2F5B6B] text-white py-2 px-4 rounded-lg inline-block">
                                    Unggah File
                                </label> --}}
                            </div>
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal TMT CPNS</label>
                            <input type="date" name="tgl_tmt_cpns" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal TMT PNS</label>
                            <input type="date" name="tgl_tmt_pns" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal TMT Dokter</label>
                            <input type="date" name="tgl_tmt_dokter" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal SPMT</label>
                            <input type="date" name="tgl_spmt" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal Pertek C2TH</label>
                            <input type="date" name="tgl_c2th" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
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
