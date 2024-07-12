<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat Pengajuan Laporan Kinerja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="../../../Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Riwayat Pengajuan Laporan Kinerja">
        <div class="font-semibold text-[#2F5B6B] mb-2 md:mb-4">
            Berikut tampilan riwayat pengajuan Laporan Kinerja
        </div>
        <div class="wrap flex flex-col gap-3">
            @foreach ($kinerjaData as $k)
                <div class="data flex flex-col p-2 pl-0 pr-5 gap-1">
                    <div class="wrap flex justify-between items-center">
                        <div class="wrap">
                            <div class="">Mengusulkan perubahan riwayat Laporan Kinerja</div>
                            <div class="mb-2">{{ $k->created_at }}</div>
                        </div>
                        <div class="p-1 bg-[#2F5B6B] rounded px-3 text-white">{{ $k->status }}</div>
                    </div>
                    <div class="garis w-full h-[1px] bg-[#969BA0]"></div>
                </div>
            @endforeach

        </div>
    </x-sidebar-user>
</body>

</html>
