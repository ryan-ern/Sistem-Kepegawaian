<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-admin>
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Edit Data Pegawai</div>
        {{-- as --}}
        <div class="wrap flex flex-col md:flex-row gap-3 md:gap-8">
            <div class="left w-full md:w-[12%] ">
                <div class="avatar">
                    <img class="w-[120px]" src="../../Assets/user3.png" alt="">
                </div>
                <div class="wrap-menu mt-5 flex flex-col gap-3">
                    <a href="{{ route('user.dataDiri', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Data Diri
                    </a>
                    <a href="{{ route('user.pendidikan', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Pendidikan
                    </a>
                    <a href="{{ route('user.ortu', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Keluarga
                    </a>
                    <a href="{{ route('user.skp', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        SKP
                    </a>
                    <a href="{{ route('user.penghargaan', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#093545] text-center rounded-md">
                        Penghargaan
                    </a>
                    <a href="{{ route('user.kinerja', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Laporan Kinerja
                    </a>
                    <a href="{{ route('user.pns', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        CPNS/PNS
                    </a>
                    <a href="{{ route('user.diklat', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Diklat/Kursus
                    </a>
                    <a href="{{ route('user.pmk', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md text-[14px]">
                        Peninjauan Masa Kerja
                    </a>
                    <a href="{{ route('user.golongan', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Golongan
                    </a>
                    <a href="{{ route('user.jabatan', $user->first()->user_id) }}"
                        class="w-full p-3 text-white bg-[#4F8EA5] text-center rounded-md">
                        Jabatan
                    </a>
                </div>
            </div>
            <div class="right w-full md:w-[88%]">
                <form action="{{ route('user.penghargaanUpdate', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="hea flex justify-between">
                        <div class="text-[#2F5B6B] font-semibold text-[22px]">Data Penghargaan</div>
                        <button type="submit" data-modal-target="simpan" data-modal-toggle="simpan"
                            class="p-1 bg-[#9BB8C3] hover:bg-[#2F5B6B] px-5 rounded text-white">Simpan</button>
                    </div>
                    <div class="wrap mt-3">
                        <div class="wrap w-full md:flex-row flex-col  flex gap-3 md:gap-8">
                            {{-- KIRI --}}
                            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Jenis
                                            Penghargaan</label>
                                        <select name="jenis" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px] flex-shrink-0"
                                            id="cars">
                                            <option value="Bintang" {{ $user->jenis == 'Bintang' ? 'selected' : '' }}>
                                                Bintang</option>
                                            <option value="R.I Adipurna"
                                                {{ $user->jenis == 'R.I Adipurna' ? 'selected' : '' }}>R.I Adipurna
                                            </option>
                                            <option value="R.I Adipradana"
                                                {{ $user->jenis == 'R.I Adipradana' ? 'selected' : '' }}>R.I Adipradana
                                            </option>
                                            <option value="R.I Utama"
                                                {{ $user->jenis == 'R.I Utama' ? 'selected' : '' }}>R.I Utama</option>
                                            <option value="R.I Pratama"
                                                {{ $user->jenis == 'R.I Pratama' ? 'selected' : '' }}>R.I Pratama
                                            </option>
                                            <option value="R.I Nararya"
                                                {{ $user->jenis == 'R.I Nararya' ? 'selected' : '' }}>R.I Nararya
                                            </option>
                                            <option value="Mahaputera Adipurna"
                                                {{ $user->jenis == 'Mahaputera Adipurna' ? 'selected' : '' }}>
                                                Mahaputera Adipurna</option>
                                            <option value="Mahaputera Adipradana"
                                                {{ $user->jenis == 'Mahaputera Adipradana' ? 'selected' : '' }}>
                                                Mahaputera Adipradana</option>
                                            <option value="Mahaputera Utama"
                                                {{ $user->jenis == 'Mahaputera Utama' ? 'selected' : '' }}>Mahaputera
                                                Utama</option>
                                            <option value="Mahaputera Pratama"
                                                {{ $user->jenis == 'Mahaputera Pratama' ? 'selected' : '' }}>Mahaputera
                                                Pratama</option>
                                            <option value="Mahaputera Nararya"
                                                {{ $user->jenis == 'Mahaputera Nararya' ? 'selected' : '' }}>Mahaputera
                                                Nararya</option>
                                            <option value="Tanda Perhargaan Trikora"
                                                {{ $user->jenis == 'Tanda Perhargaan Trikora' ? 'selected' : '' }}>
                                                Tanda Perhargaan Trikora</option>
                                            <option value="TP Pembebasan Irian Barat"
                                                {{ $user->jenis == 'TP Pembebasan Irian Barat' ? 'selected' : '' }}>TP
                                                Pembebasan Irian Barat</option>
                                            <option value="Satyalancana Karya Satya 10 Tahun"
                                                {{ $user->jenis == 'Satyalancana Karya Satya 10 Tahun' ? 'selected' : '' }}>
                                                Satyalancana Karya Satya
                                                10
                                                Tahun</option>
                                            <option value="Satyalancana Karya Satya 20 Tahun"
                                                {{ $user->jenis == 'Satyalancana Karya Satya 20 Tahun' ? 'selected' : '' }}>
                                                Satyalancana Karya Satya
                                                20
                                                Tahun</option>
                                            <option value="Satyalancana Karya Satya 20 Tahun"
                                                {{ $user->jenis == 'Satyalancana Karya Satya 30 Tahun' ? 'selected' : '' }}>
                                                Satyalancana Karya Satya
                                                20
                                                Tahun</option>
                                            <option value="Satyalancana Karya Satya 30 Tahun"
                                                {{ $user->jenis == 'Satyalancana Karya Satya 30 Tahun' ? 'selected' : '' }}>
                                                Satyalancana Karya Satya
                                                30
                                                Tahun</option>
                                            <option value="Satyalancana Wira Karya"
                                                {{ $user->jenis == 'Satyalancana Wira Karya' ? 'selected' : '' }}>
                                                Satyalancana Wira Karya</option>
                                            <option value="Satyalancana Perintis Kemerdekaan"
                                                {{ $user->jenis == 'Satyalancana Perintis Kemerdekaan' ? 'selected' : '' }}>
                                                Satyalancana Perintis
                                                Kemerdekaan</option>
                                            <option value="Satyalancana Pembangunan"
                                                {{ $user->jenis == 'Satyalancana Pilangunan' ? 'selected' : '' }}>
                                                Satyalancana Pembangunan</option>
                                            <option value="Satyalancana Kebaktian Sosial"
                                                {{ $user->jenis == 'Satyalancana Kebaktian Sosial' ? 'selected' : '' }}>
                                                Satyalancana Kebaktian Sosial
                                            </option>
                                            <option value="Satyalancana Kebudayaan"
                                                {{ $user->jenis == 'Satyalancana Kebudayaan' ? 'selected' : '' }}>
                                                Satyalancana Kebudayaan</option>
                                            <option value="Satyalancana Pendidikan"
                                                {{ $user->jenis == 'Satyalancana Pendidikan' ? 'selected' : '' }}>
                                                Satyalancana Pendidikan</option>
                                            <option value="Satyalancana Dharma Olahraga"
                                                {{ $user->jenis == 'Satyalancana Dharma Olahraga' ? 'selected' : '' }}>
                                                Satyalancana Dharma Olahraga
                                            </option>
                                            <option value="Satyalancana Dharma Pemuda"
                                                {{ $user->jenis == 'Satyalancana Dharma Pemuda' ? 'selected' : '' }}>
                                                Satyalancana Dharma Pemuda
                                            </option>
                                            <option value="Satyalancana Kepariwisataan"
                                                {{ $user->jenis == 'Satyalancana Kepariwisataan' ? 'selected' : '' }}>
                                                Satyalancana Kepariwisataan
                                            </option>
                                            <option value="Satyalancana Karya Bhakti Praja Nugraha"
                                                {{ $user->jenis == 'Satyalancana Karya Bhakti Praja Nugraha' ? 'selected' : '' }}>
                                                Satyalancana Karya
                                                Bhakti Praja Nugraha</option>
                                            <option value="Satyalancana Karya Bhakti"
                                                {{ $user->jenis == 'Satyalancana Karya Bhakti' ? 'selected' : '' }}>
                                                Satyalancana Karya Bhakti</option>
                                            <option value="Tanda Jasa Lainnya"
                                                {{ $user->jenis == 'Tanda Jasa Lainnya' ? 'selected' : '' }}>Tanda Jasa
                                                Lainnya</option>
                                            <option value="TP Sidhakarya Adhyaksa"
                                                {{ $user->jenis == 'TP Sidhakarya Adhyaksa' ? 'selected' : '' }}>TP
                                                Sidhakarya Adhyaksa</option>
                                            <option value="TP Purnabakti Adhyaksa"
                                                {{ $user->jenis == 'TP Purnabakti Adhyaksa' ? 'selected' : '' }}>TP
                                                Purnabakti Adhyaksa</option>
                                            <option value="TP Dharma Adhyaksa"
                                                {{ $user->jenis == 'TP Dharma Adhyaksa' ? 'selected' : '' }}>TP Dharma
                                                Adhyaksa</option>
                                            <option value="TP Teladan TK Nasional"
                                                {{ $user->jenis == 'TP Teladan TK Nasional' ? 'selected' : '' }}>TP
                                                Teladan TK Nasional</option>
                                            <option value="TP Teladan TK Propinsi"
                                                {{ $user->jenis == 'TP Teladan TK Propinsi' ? 'selected' : '' }}>TP
                                                Teladan TK Propinsi</option>
                                            <option value="TP Teladan TK Kabupaten/Kota"
                                                {{ $user->jenis == 'TP Teladan TK Kabupaten/Kota' ? 'selected' : '' }}>
                                                TP Teladan TK Kabupaten/Kota
                                            </option>
                                            <option value="TP PNS Luar Biasa Prestasinya"
                                                {{ $user->jenis == 'TP PNS Luar Biasa Prestasinya' ? 'selected' : '' }}>
                                                TP PNS Luar Biasa Prestasinya
                                            </option>
                                            <option value="TP Penemuan Bermanfaat bagi Negara"
                                                {{ $user->jenis == 'TP Penemuan Bermanfaat bagi Negara' ? 'selected' : '' }}>
                                                TP Penemuan Bermanfaat
                                                bagi
                                                Negara</option>
                                            <option value="Siswa Teladan"
                                                {{ $user->jenis == 'Siswa Teladan' ? 'selected' : '' }}>Siswa Teladan
                                            </option>
                                            <option value="Olimpiade"
                                                {{ $user->jenis == 'Olimpiade' ? 'selected' : '' }}>Olimpiade</option>
                                            <option value="Tanda Penghargaan Lainnya"
                                                {{ $user->jenis == 'Tanda Penghargaan Lainnya' ? 'selected' : '' }}>
                                                Tanda Penghargaan Lainnya</option>
                                            <option value="Bintang Jawa Utama "
                                                {{ $user->jenis == 'Bintang Jawa Utama ' ? 'selected' : '' }}>Bintang
                                                Jawa Utama </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Tahun
                                            Perolehan</label>
                                        <input type="text" value="{{ $user->tahun }}" name="tahun" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>

                            </div>
                            {{-- KANAN --}}
                            <div class="md:w-1/2 w-full flex flex-col gap-3 md:gap-6">
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Nomor Surat
                                            Keputusan</label>
                                        <input type="text" value="{{ $user->no_surat }}" name="no_surat" required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="garis w-full h-[1px] mb-3 md:mb-6 bg-[#C3C3C3]"></div>
                                    <div
                                        class="flex flex-col md:flex-row items-start md:items-center md:gap-5 gap-1 justify-between">
                                        <label For="" class="text-black font-medium text-[14px]">Tanggal Surat
                                            Keputusan</label>
                                        <input type="text" value="{{ $user->tgl_surat }}" name="tgl_surat"
                                            required
                                            class="isi font-semibold text-[#2F5B6B] p-1 px-4 border focus:ring-[#2F5B6B] focus:border-[#2F5B6B] border-[#C3C3C3] rounded flex-shrink-0 w-[380px]">
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                {{-- table --}}
                <div class="relative w-full overflow-x-auto rounded-lg overflow-y-auto shadow-lg mt-5">
                    <table class="w-full  text-sm text-left rtl:text-right rounded-lg text-gray-500 bg-white">
                        <thead class="text-base text-white bg-[#4F8EA5] rounded-lg">
                            <tr>
                                <th scope="col" class="px-3 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Nama Surat
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Aksi
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->files as $file)
                                <tr
                                    class="bg-white border-b border-[#EEE7DA] hover:bg-gray-50 text-black hover:text-black">
                                    <td class="px-3 py-3">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-3 py-3">
                                        {{ $file->file_name ? $file->file_name : '-' }}
                                    </td>
                                    <td class="px-3 py-3">
                                        <div class="flex items-center space-x-3">
                                            <a href="{{ asset('storage/' . $file->file_path) }}"
                                                download="{{ $file->file_name }}" title="Download">
                                                <img src="{{ asset('Assets/download.svg') }}" alt="Download">
                                            </a>
                                            <button title="Lihat"
                                                onclick="event.preventDefault(); window.open('{{ asset('storage/' . $file->file_path) ? asset('storage/' . $file->file_path) : '#' }}', '_blank');">
                                                <img src="{{ asset('Assets/eye.svg') }}" alt="Lihat">
                                            </button>
                                            <button title="Hapus" onclick="event.preventDefault();"
                                                data-modal-target="confirm-delete-{{ $file->id }}"
                                                data-modal-toggle="confirm-delete-{{ $file->id }}">
                                                <img src="{{ asset('Assets/hapus.svg') }}" alt="Delete">
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                {{-- POP UP HAPUS --}}
                                <div id="confirm-delete-{{ $file->id }}" tabindex="-1" aria-hidden="true"
                                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div data-modal-hide="confirm-delete-{{ $file->id }}"
                                        class="relative p-4 w-full flex justify-center items-center h-full">
                                        <div
                                            class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                                            <div
                                                class="flex items-center justify-between p-4 md:p-3 border-b rounded-t">
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                    data-modal-hide="confirm-delete-{{ $file->id }}">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <div class="p-4 md:p-5 space-y-4 overflow-y-auto max-h-[80vh]">
                                                <div class="wrap flex items-center gap-8 flex-col">
                                                    <div class="head font-medium text-[28px]">Apakah Anda yakin
                                                        ingin menghapus file ini?</div>
                                                    <div class="icon">
                                                        <img src="../../Assets/sampah.svg" alt="">
                                                    </div>
                                                    <form action="{{ route('file.penghargaan.delete', $file->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" data-modal-target="hapus"
                                                            data-modal-toggle="hapus"
                                                            class="head p-1 text-white px-5 rounded bg-[#2F5B6B] link">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- POP UP HAPUS --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        {{-- POP UP simpan --}}
        <div id="simpan" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div data-modal-hide="simpan" class="relative p-4 w-full flex justify-center items-center h-full">
                <!-- Modal content -->
                <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                            data-modal-hide="simpan">
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
                            <button data-modal-hide="simpan" class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                Selesai
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- simpan --}}

        {{-- POP UP HAPUS --}}
        <div id="hapus" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div data-modal-hide="hapus" class="relative p-4 w-full flex justify-center items-center h-full">
                <!-- Modal content -->
                <div class="relative bg-[#F4EFEF] w-[35%] rounded-lg shadow max-h-full overflow-y-auto">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-3 border-b rounded-t ">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center  "
                            data-modal-hide="hapus">
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
                            <div class="head font-medium text-[28px]">Data Berhasil Dihapus</div>
                            <div class="icon">
                                <img src="../../Assets/sampah.svg" alt="">
                            </div>
                            <button data-modal-hide="hapus" class="head p-1 text-white px-5 rounded bg-[#2F5B6B]">
                                Selesai
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- POP UP HAPUS --}}
    </x-sidebar-admin>
</body>

</html>
