<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Penghargaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Riwayat Penghargaan">
        <div
            class="wrap mb-[10px] md:mb-[35px] flex flex-col md:flex-row justify-start md:justify-between items-start md:items-center">
            <p class="text-[14px] md:text-[16px]">Berikut tampilan data Penghargaan anda</p>
            <div class="btnn flex items-center gap-2">
                <a href="/dashboard/riwayat-penghargaan/pengajuan-penghargaan"
                    class="bt1 hover:bg-[#4F8EA5] bg-[#2F5B6B] text-white flex items-center gap-2 p-1 px-2 text-center rounded">
                    <div class="ic">
                        <img src="../Assets/pengajuan2.svg" alt="">
                    </div>
                    <div class="text-[14px]">Riwayat Pengajuan</div>
                </a>
                <a href="/dashboard/riwayat-penghargaan/tambah-penghargaan"
                    class="bt1 hover:bg-[#4F8EA5] bg-[#2F5B6B] text-white flex items-center gap-2 p-1 px-2 text-center rounded">
                    <div class="ic">
                        <img src="../Assets/tambah.svg" alt="">
                    </div>
                    <div class="text-[14px]">Tambah Data</div>
                </a>
            </div>
        </div>

        <div class="wrap-content">
            @foreach ($rewardData as $r)
                <div class="data flex items-center justify-between border-2 border-[#969BA0] p-3 px-6">
                    <div class="wrap">
                        <div class="text-[18px] font-medium">{{ $r->jenis }}</div>
                        <div class="text-[16px]">Tahun : {{ $r->tahun }}</div>
                    </div>
                    <a href="{{ route('reward.show', $r->id) }}" class="link">
                        <img src="../Assets/book.svg" alt="">
                    </a>
                </div>
            @endforeach

        </div>
    </x-sidebar-user>
</body>

</html>
