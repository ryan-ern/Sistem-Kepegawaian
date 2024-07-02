<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Absensi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./Assets/logoo.png">
</head>

<body>
    <x-sidebar-user title="Upload Surat Absensi">
        <p class="text-[14px] md:text-[18px] font-semibold text-[#2F5B6B]">Silahkan Upload Surat</p>
        <div class="garis w-full mt-5 mb-16 h-[1px] bg-gray-400"></div>
        {{-- hari --}}
        {{-- form --}}
        <form action="{{ route('absen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="wrap flex gap-[80px]">
                <div class="left flex flex-col gap-2">
                    <div class="font-semibold text-[14px]">Jenis Absen</div>
                    <div class="text-[12px] text-[#898989]">Pilih keterangan jenis absen anda</div>
                    <select class="w-[200px] p-2 px-3 rounded-lg border border-[#000000]" id="cars" name='status'
                        required>
                        <option value="sakit">Sakit</option>
                        <option value="izin">Izin</option>
                    </select>
                </div>
                <div class="right flex flex-col gap-2">
                    <div class="font-semibold text-[14px]">Upload Surat</div>
                    <div class="text-[12px] text-[#898989]">Upload surat atau bukti keterangan anda</div>
                    <div class="wrap">
                        <div class="relative">
                            <input type="file" id="file" accept="image/*" class="" name="file"
                                required />
                            {{-- <label for="file" class="cursor-pointer">
                                <img src="../Assets/upload.svg" alt="">
                            </label> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="garis w-full my-16 h-[1px] bg-gray-400"></div>
            <div class="wrap flex justify-center mt-[70px]">
                <button type="submit" class="p-2 bg-[#000000] px-16 rounded text-white">Kirim</button>
            </div>
        </form>
        {{-- form --}}
    </x-sidebar-user>
</body>

</html>
