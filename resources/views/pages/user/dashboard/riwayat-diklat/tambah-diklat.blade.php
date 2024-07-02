<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Diklat/Kursus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Tambah Data Riwayat Diklat/Kursus">
        <div class="text-[22px] font-semibold text-[#2F5B6B]">Masukkan Data</div>
        <form action="{{ route('diklat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form mt-[20px]">
                <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Jenis Diklat</label>
                            <select name="jenis_diklat" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                                <option value="Diklat Struktural">Diklat Struktural</option>
                                <option value="Diklat Fungsional">Diklat Fungsional</option>
                                <option value="Diklat Teknik">Diklat Teknik</option>
                                <option value="Pelatihan Manajerial">Pelatihan Manajerial</option>
                                <option value="Pelatihan Sosial Kultural">Pelatihan Sosial Kultural</option>
                                <option value="Sosialisasi">Sosialisasi</option>
                                <option value="Bimbingan Teknis Seminar">Bimbingan Teknis Seminar</option>
                                <option value="Magang">Magang</option>
                                <option value="Kursus">Kursus</option>
                                <option value="Penataran ">Penataran </option>
                                <option value="Pengembangan Kompetensi Dalam Bentuk Pelatihan Klasikal Lainnya
">
                                    Pengembangan Kompetensi Dalam Bentuk Pelatihan Klasikal Lainnya
                                </option>
                                <option value="Coaching">Coaching</option>
                                <option value="Mentoring">Mentoring</option>
                                <option value="E-Learning">E-Learning</option>
                                <option value="Pelatihan Jarak Jauh">Pelatihan Jarak Jauh</option>
                                <option value="Detasering (Secondment)">Detasering (Secondment)</option>
                                <option value="Pembelajaran Alam Terbuka (Outbond)">Pembelajaran Alam Terbuka (Outbond)
                                </option>
                                <option value="Patok Banding (Benchmarking)">Patok Banding (Benchmarking)</option>
                                <option value="Pertukaran Antara PNS Dengan Pegawai">Pertukaran Antara PNS Dengan
                                    Pegawai
                                </option>
                                <option value="Swasta/Badan Usaha Milik Negara/Badan Usaha">Swasta/Badan Usaha Milik
                                    Negara/Badan Usaha</option>
                                <option value="Milik Daerah">Milik Daerah</option>
                                <option value="Belajar Mandiri (Self Development)">Belajar Mandiri (Self Development)
                                </option>
                                <option value="Komunitas Belajar (Community Of Practices)">Komunitas Belajar (Community
                                    Of
                                    Practices)</option>
                                <option value="Bimbingan Di Tempat Kerja">Bimbingan Di Tempat Kerja</option>
                                <option value="Pengembangan Kompetensi Dalam Bentuk Pelatihan Nonklasikal Lainnya">
                                    Pengembangan Kompetensi Dalam Bentuk Pelatihan Nonklasikal Lainnya</option>
                            </select>
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nama Diklat</label>
                            <input type="text" id="kontak" name="nama_diklat" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama Diklat" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Institusi Penyelenggara</label>
                            <input type="text" name="institusi" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Institusi Penyelenggara" />
                        </div>
                        <div class="wrap">
                            <label For="image" class="text-black">Surat Diklat</label>
                            <div class="relative">
                                <input type="file" id="file" accept="application/pdf" class=""
                                    name="file_diklat[]" multiple />
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
                            <label For="" class="text-black ">Tanggal Selesai</label>
                            <input type="date" name="tgl_selesai" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Durasi (Jam)</label>
                            <input type="text" id="kontak" " name="durasi" required
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Durasi (Jam)" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Rumpun Diklat</label>
                        <select " name="rumpun" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                            <option value="Tenaga Pendidikan Lainnya">Tenaga Pendidikan Lainnya</option>
                            <option value="Keagamaan dan Pendidikan">Keagamaan dan Pendidikan</option>
                            <option value="Pendidikan Tingkat Taman Kanak-Kanak, Dasar, Lanjutan, dan Sekolah Khusus
">
                                Pendidikan Tingkat Taman Kanak-Kanak, Dasar, Lanjutan, dan Sekolah Khusus
                            </option>
                            ">
                            Pendidikan Tingkat Taman Kanak-Kanak, Dasar, Lanjutan, dan Sekolah Khusus
                            </option>
                            <option value="Kebudayaan">Kebudayaan</option>
                            <option value="Hukum dan Peradilan">Hukum dan Peradilan</option>
                            <option value="Pendidikan Lainnya">Pendidikan Lainnya</option>
                            <option value="Kekomputeran">Kekomputeran</option>
                            <option value="Arsitek, Insinyur, dan Yang Berkaitan">Arsitek, Insinyur, dan Yang Berkaitan
                            </option>
                            <option value="Administrasi Kependudukan Pencatatan Sipil">Administrasi Kependudukan
                                Pencatatan Sipil</option>
                            <option value="Arsitek, Insinyur, dan Yang Berkaitan">Arsitek, Insinyur, dan Yang Berkaitan
                            </option>
                            <option value="Administrasi Kependudukan Pencatatan Sipil">Administrasi Kependudukan
                                Pencatatan Sipil</option>
                            <option value="Kearsipan">Kearsipan</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Akuntan dan Anggaran">Akuntan dan Anggaran</option>
                            <option value="Penanaman Modal">Penanaman Modal</option>
                            <option value="Tenaga Kerja">Tenaga Kerja</option>
                            <option value="Imigrasi, Pajak, dan Asisten Profesional Yang Berkaitan">Imigrasi, Pajak,
                                dan Asisten Profesional Yang Berkaitan</option>
                            <option value="Imigrasi, Pajak, dan Asisten Profesional Yang Berkaitan">Imigrasi, Pajak,
                                dan Asisten Profesional Yang Berkaitan</option>
                            <option value="Penerangan dan Seni Budaya">Penerangan dan Seni Budaya</option>
                            <option value="Ekonomi dan Keuangan">Ekonomi dan Keuangan</option>
                            <option value="Matematika, Statistika, dan Yang Berkaitan">Matematika, Statistika, dan Yang
                                Berkaitan</option>
                            <option value="Matematika, Statistika, dan Yang Berkaitan">Matematika, Statistika, dan Yang
                                Berkaitan</option>
                            <option value="Sains dan Lingkungan">Sains dan Lingkungan</option>
                            <option value="Manajemen">Manajemen</option>
                            <option value="Pariwisata">Pariwisata</option>
                            <option value="Perindustrian">Perindustrian</option>
                            <option value="Kepemudaan dan Olahraga">Kepemudaan dan Olahraga</option>
                            <option value="Administrasi">Administrasi</option>
                            <option value="Fisika, Kimia, dan Yang Berkaiatan">Fisika, Kimia, dan Yang Berkaiatan
                            </option>
                            <option value="Fisika, Kimia, dan Yang Berkaiatan">Fisika, Kimia, dan Yang Berkaiatan
                            </option>
                            <option value="Statistik">Statistik</option>
                            <option value="Profesional Bidang Pendidikan Lainnya">Profesional Bidang Pendidikan Lainnya
                            </option>
                            <option value="Profesional Bidang Pendidikan Lainnya">Profesional Bidang Pendidikan Lainnya
                            </option>
                            <option value="Komunikasi dan Informatika">Komunikasi dan Informatika</option>
                            <option value="Energi dan Sumber Daya Mineral">Energi dan Sumber Daya Mineral</option>
                            <option value="Koperasi Usaha Kecil dan Menengah">Koperasi Usaha Kecil dan Menengah
                            </option>
                            <option value="Koperasi Usaha Kecil dan Menengah">Koperasi Usaha Kecil dan Menengah
                            </option>
                            <option value="Penelitian">Penelitian</option>
                            <option value="Pekerjaan Umum dan Penataan Ruang">Pekerjaan Umum dan Penataan Ruang
                            </option>
                            <option value="Pemberdayaan Perempuan dan Perlindungan Anak">Pemberdayaan Perempuan dan
                                Perlindungan Anak</option>
                            <option value="Arsiparis, Pustakawan, dan Yang Berkaitan">Arsiparis, Pustakawan, dan Yang
                                Berkaitan</option>
                            <option value="Pekerjaan Umum dan Penataan Ruang">Pekerjaan Umum dan Penataan Ruang
                            </option>
                            <option value="Pemberdayaan Perempuan dan Perlindungan Anak">Pemberdayaan Perempuan dan
                                Perlindungan Anak</option>
                            <option value="Arsiparis, Pustakawan, dan Yang Berkaitan">Arsiparis, Pustakawan, dan Yang
                                Berkaitan</option>
                            <option value="Pengawas Kualitas dan Keamanan">Pengawas Kualitas dan Keamanan</option>
                            <option value="Keagamaan">Keagamaan</option>
                            <option value="Kehutanan">Kehutanan</option>
                            <option value="Pangan">Pangan</option>
                            <option value="Penelitian dan Perekayasaan">Penelitian dan Perekayasaan</option>
                            <option value="kelautan dan Perikanan">kelautan dan Perikanan</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Asisten Profesional Yang Berhubungan Dengan Keuangan dan Penjualan">Asisten
                                Profesional Yang Berhubungan Dengan Keuangan dan Penjualan</option>
                            <option value="Asisten Profesional Yang Berhubungan Dengan Keuangan dan Penjualan">Asisten
                                Profesional Yang Berhubungan Dengan Keuangan dan Penjualan</option>
                            <option value="Hak Cipta, Paten, dan Merek">Hak Cipta, Paten, dan Merek</option>
                            <option value="Ilmu Sosial dan Yang Berkaitan">Ilmu Sosial dan Yang Berkaitan</option>
                            <option value="Hukum, Politik, dan Pemerintahan">Hukum, Politik, dan Pemerintahan</option>
                            <option value="Ketenteraman dan Ketertiban Umum Serta Perlindungan Masyarakat">Ketenteraman
                                dan Ketertiban Umum Serta Perlindungan Masyarakat</option>
                            <option value="Ketenteraman dan Ketertiban Umum Serta Perlindungan Masyarakat">Ketenteraman
                                dan Ketertiban Umum Serta Perlindungan Masyarakat</option>
                            <option value="Perdagangan">Perdagangan</option>
                            <option value="Pertahanan">Pertahanan</option>
                            <option value="Pemberdayaan Masyarakat dan Desa">Pemberdayaan Masyarakat dan Desa</option>
                            <option value="Detektif dan Penyidik">Detektif dan Penyidik</option>
                            <option value="Kesehatan dan/atau Ilmu Sosial">Kesehatan dan/atau Ilmu Sosial</option>
                            <option value="Perpustakaan">Perpustakaan</option>
                            <option value="Pertanian">Pertanian</option>
                            <option value="SDM">SDM</option>
                            <option value="Perhubungan">Perhubungan</option>
                            <option value="Pengendalian Penduduk dan Keluarga Berencana">Pengendalian Penduduk dan
                                Keluarga Berencana</option>
                            <option value="Pengendalian Penduduk dan Keluarga Berencana">Pengendalian Penduduk dan
                                Keluarga Berencana</option>
                            <option value="Persandian">Persandian</option>
                            <option value="Perumahan Rakyat dan Kawasan Pemukiman">Perumahan Rakyat dan Kawasan
                                Pemukiman</option>
                            <option value="Perumahan Rakyat dan Kawasan Pemukiman">Perumahan Rakyat dan Kawasan
                                Pemukiman</option>
                            <option value="Ilmu Hayat">Ilmu Hayat</option>
                            <option value="Transmigrasi">Transmigrasi</option>
                            <option value="Sosial">Sosial</option>
                            <option value="Lingkungan Hidup">Lingkungan Hidup</option>
                            <option value="Politik dan Hubungan Luar Negeri">Politik dan Hubungan Luar Negeri</option>
                            </select>
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal Mulai</label>
                            <input type="date" " name="tgl_mulai" required
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nomor Sertifikat</label>
                        <input type="text" id="" " name="no_sertif" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Sertifikat" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tahun Diklat</label>
                            <input type="text" id="" " name="tahun" required
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Tahun Diklat" />
                    </div>


                </div>
            </div>
        </div>
        <div class="kirim flex justify-end mt-5">
            <button type='submit' class="bg-[#2F5B6B] text-white py-2 px-8 rounded-lg">Kirim</button>
        </div>
    </form>
    </x-sidebar-user>
</body>

</html>
