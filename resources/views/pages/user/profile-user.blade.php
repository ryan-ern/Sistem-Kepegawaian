<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Anda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Profil Anda">
        <div class="text-[18px] text-[#2F5B6B]">Informasi Data Diri Anda</div>
        <div class="head my-3 flex items-center gap-4">
            <div class="foto h-[155px] aspect-square rounded-full border border-[#2F5B6B]">
                <img class="object-cover w-full h-full" src="{{ asset('storage/' . auth()->user()->foto) }}"
                    alt="" />
            </div>
            <div class="nama">
                <div class="text-[22px] font-medium">{{ auth()->user()->name }}</div>
                {{-- <div class="text-[14px] text-[#999999]">{{ auth()->user()->jabatan }}</div> --}}
            </div>
        </div>
        <div class="wrap flex flex-col gap-3">
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Nama</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->name }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">NIP</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->nip }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Satuan Kerja</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->satuan_kerja }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Nomor Telepon</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_tel }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Nomor Handphone</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_hp }}
                </div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">NIK</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->nik }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Nomor Kartu Keluarga</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_kk }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Tanggal Lahir</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->tgl_lahir }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Tempat Lahir</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->tempat_lahir }}
                </div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Email</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->email }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Agama</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->agama }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Alamat</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->alamat }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Nomor NPWP</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_npwp }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Tanggal NPWP</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->tgl_npwp }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Nomor Akta Kelahiran</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_akta }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Lokasi Kerja</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->lokasi_kerja }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">No. BPJS Kesehatan</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_bpjs }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">No. Karis/Karsu</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_karis }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Nomor TASPEN</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_taspen }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Tanggal TASPEN</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->tgl_taspen }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">No. TAPERA</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->no_tapera }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">No. KKPN/Kantor Pembayaran Gaji
                </div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->kppn }}</div>
            </div>
            <div class="input flex flex-col md:flex-row md:items-center gap-1 md:gap-3">
                <div class="nama flex-shrink-0 w-[200px] font-medium text-[#828282]">Kelas Jabatan (Angka)</div>
                <div class="nama p-2 px-3 rounded bg-[#EDF4F2] w-full">{{ auth()->user()->kelas_jabatan }}</div>
            </div>
        </div>
    </x-sidebar-user>
</body>

</html>
