<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Penghargaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Tambah Data Riwayat Penghargaan">
        <div class="text-[22px] font-semibold text-[#2F5B6B]">Masukkan Data</div>
        <form action="{{ route('reward.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form mt-[20px]">
                <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/2 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Jenis Penghargaan</label>
                            <select name="jenis" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                                <option value="Bintang">Bintang</option>
                                <option value="R.I Adipurna">R.I Adipurna</option>
                                <option value="R.I Adipradana">R.I Adipradana</option>
                                <option value="R.I Utama">R.I Utama</option>
                                <option value="R.I Pratama">R.I Pratama</option>
                                <option value="R.I Nararya">R.I Nararya</option>
                                <option value="Mahaputera Adipurna">Mahaputera Adipurna</option>
                                <option value="Mahaputera Adipradana">Mahaputera Adipradana</option>
                                <option value="Mahaputera Utama">Mahaputera Utama</option>
                                <option value="Mahaputera Pratama">Mahaputera Pratama</option>
                                <option value="Mahaputera Nararya">Mahaputera Nararya</option>
                                <option value="Tanda Perhargaan Trikora">Tanda Perhargaan Trikora</option>
                                <option value="TP Pembebasan Irian Barat">TP Pembebasan Irian Barat</option>
                                <option value="Satyalancana Karya Satya 10 Tahun">Satyalancana Karya Satya 10 Tahun
                                </option>
                                <option value="Satyalancana Karya Satya 20 Tahun">Satyalancana Karya Satya 20 Tahun
                                </option>
                                <option value="Satyalancana Karya Satya 20 Tahun">Satyalancana Karya Satya 20 Tahun
                                </option>
                                <option value="Satyalancana Karya Satya 30 Tahun">Satyalancana Karya Satya 30 Tahun
                                </option>
                                <option value="Satyalancana Wira Karya">Satyalancana Wira Karya</option>
                                <option value="Satyalancana Perintis Kemerdekaan">Satyalancana Perintis Kemerdekaan
                                </option>
                                <option value="Satyalancana Pembangunan">Satyalancana Pembangunan</option>
                                <option value="Satyalancana Kebaktian Sosial">Satyalancana Kebaktian Sosial</option>
                                <option value="Satyalancana Kebudayaan">Satyalancana Kebudayaan</option>
                                <option value="Satyalancana Pendidikan">Satyalancana Pendidikan</option>
                                <option value="Satyalancana Dharma Olahraga">Satyalancana Dharma Olahraga</option>
                                <option value="Satyalancana Dharma Pemuda">Satyalancana Dharma Pemuda</option>
                                <option value="Satyalancana Kepariwisataan">Satyalancana Kepariwisataan</option>
                                <option value="Satyalancana Karya Bhakti Praja Nugraha">Satyalancana Karya Bhakti Praja
                                    Nugraha</option>
                                <option value="Satyalancana Karya Bhakti">Satyalancana Karya Bhakti</option>
                                <option value="Tanda Jasa Lainnya">Tanda Jasa Lainnya</option>
                                <option value="TP Sidhakarya Adhyaksa">TP Sidhakarya Adhyaksa</option>
                                <option value="TP Purnabakti Adhyaksa">TP Purnabakti Adhyaksa</option>
                                <option value="TP Dharma Adhyaksa">TP Dharma Adhyaksa</option>
                                <option value="TP Teladan TK Nasional">TP Teladan TK Nasional</option>
                                <option value="TP Teladan TK Propinsi">TP Teladan TK Propinsi</option>
                                <option value="TP Teladan TK Kabupaten/Kota">TP Teladan TK Kabupaten/Kota</option>
                                <option value="TP PNS Luar Biasa Prestasinya">TP PNS Luar Biasa Prestasinya</option>
                                <option value="TP Penemuan Bermanfaat bagi Negara">TP Penemuan Bermanfaat bagi Negara
                                </option>
                                <option value="Siswa Teladan">Siswa Teladan</option>
                                <option value="Olimpiade">Olimpiade</option>
                                <option value="Tanda Penghargaan Lainnya">Tanda Penghargaan Lainnya</option>
                                <option value="Bintang Jawa Utama ">Bintang Jawa Utama </option>
                            </select>
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tahun Perolehan</label>
                            <input type="text" id="kontak" name="tahun" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tahun Perolehan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Surat Keputusan</label>
                            <input type="text" name="no_surat" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Surat Keputusan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal Surat Keputusan</label>
                            <input type="date" name="tgl_surat" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>

                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/2 w-full flex flex-col gap-3">
                        <div class="wrap">
                            <label For="image" class="text-black">Upload Surat</label>
                            <div class="relative">
                                <input type="file" id="file" accept="application/pdf" class=""
                                    name="file_reward[]" multiple />
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
