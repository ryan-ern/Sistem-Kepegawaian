<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Keluarga</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Riwayat Keluarga">
        <div
            class="wrap mb-[10px] md:mb-[35px] flex flex-col md:flex-row justify-start md:justify-between items-start md:items-center">
            <p class="text-[14px] md:text-[16px]">Berikut tampilan data Keluarga anda</p>
            <div class="btnn flex items-center gap-2">
                <a href="/dashboard/riwayat-orangtua/pengajuan-orangtua"
                    class="bt1 hover:bg-[#4F8EA5] bg-[#2F5B6B] text-white flex items-center gap-2 p-1 px-2 text-center rounded">
                    <div class="ic">
                        <img src="../Assets/pengajuan2.svg" alt="">
                    </div>
                    <div class="text-[14px]">Riwayat Pengajuan</div>
                </a>
                <a href="/dashboard/riwayat-orangtua/tambah-orangtua"
                    class="bt1 hover:bg-[#4F8EA5] bg-[#2F5B6B] text-white flex items-center gap-2 p-1 px-2 text-center rounded">
                    <div class="ic">
                        <img src="../Assets/tambah.svg" alt="">
                    </div>
                    <div class="text-[14px]">Tambah Data</div>
                </a>
            </div>
        </div>

        {{-- pilihan --}}
        <div class="wrap mb-6">
            <div class="menu flex ">
                <a href="/dashboard/riwayat-orangtua"
                    class="text-[#2F5B6B] font-semibold px-2 p-3 rounded-t-2xl border-t-2 border-x-2 border-[#969BA0] w-[130px] flex justify-center">Orang
                    Tua</a>
                <a href="/dashboard/riwayat-pasangan"
                    class=" px-2 p-3 rounded-t-2xl border-b-2 border-[#969BA0]">Pasangan</a>
                <a href="/dashboard/riwayat-anak" class="px-2 p-3 rounded-t-2xl border-b-2 border-[#969BA0]">Anak</a>
                <div class="w-full px-2 p-3 rounded-t-2xl border-b-2 border-[#969BA0]"></div>
            </div>
        </div>
        {{-- pilihan --}}

        <div class="wrap-content">
            @foreach ($OrtuData as $o)
                <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                    <div class="wrap">
                        <div class="text-[18px] font-medium">{{ $o->nama }}</div>
                        <div class="text-[16px]">-{{ $o->jk == 'Laki - Laki' ? 'Ayah' : 'Ibu' }}</div>
                    </div>
                    <a href="{{ route('orangtua.show', $o->id) }}" class="link">
                        <img src="../Assets/book.svg" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </x-sidebar-user>
</body>

</html>
