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
        <div class="text-[18px] text-[#2F5B6B]">Informasi Pengguna</div>
        <div class="form mt-[20px]">
            <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                {{-- KIRI --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="" class="text-black ">Nama Lengkap</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nama Lengkap" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Ubah Password*</label>
                        <input type="text" id="kontak"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Password" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nomor Telepon</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nomor Telepon" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Email</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Email" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Agama</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Agama" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tanggal Lahir</label>
                        <input type="date"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent" />
                    </div>

                </div>
                {{-- TENGAH --}}

                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap ">
                        <label For="" class="text-black ">NIP</label>
                        <input type="text" id=""
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan NIP" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Satuan Kerja</label>
                        <input type="text" id="kontak"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Satuan Kerja" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Nomor Handphone</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Nomor Handphone" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">NIK</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan NIK" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Alamat</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Alamat" />
                    </div>
                    <div class="wrap">
                        <label For="" class="text-black ">Tempat Lahir</label>
                        <input type="text"
                            class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                            placeholder="Masukkan Tempat Lahir" />
                    </div>
                </div>
                {{-- KANAN --}}
                <div class="md:w-1/3 w-full flex flex-col gap-3">
                    <div class="wrap bg-[#E9F6FB] w-full rounded-xl flex justify-center p-3 relative">
                        <div class="kotak">
                            <div class="foto h-[180px] aspect-square bg-[#C3C3C3] rounded-lg">
                                {{-- <img class="h-full w-full object-cover" src="Assets/profile.png" alt=""> --}}
                                <img id="selected-image" src="" alt="Selected Image"
                                    class="hidden h-full w-full object-cover" />
                                <input id="file-input" type="file" class="hidden" accept="image/*"
                                    value="" />
                            </div>
                            <div class="flex flex-col gap-1 items-center">
                                <div class="User text-[30px] font-semibold">User </div>
                            </div>
                        </div>
                    <div class="bg-red absolute bottom-2 right-2">
                        <label for="file-input" class="cursor-pointer relative">
                            <img id="selected-image" src="" alt="Selected Image" class="hidden" />
                            <input id="file-input" type="file" class="hidden" accept="image/*" value="" />
                            <div id="edit-icon-container" class="absolute bottom-16 right-32">
                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9018 15L12.3259 13.3523L10.4598 11.1932L9.03571 12.8409V13.6364H10.2143V15H10.9018ZM16.3036 4.77273C16.1726 4.62121 16.0376 4.62595 15.8984 4.78693L11.6016 9.75852C11.4624 9.91951 11.4583 10.0758 11.5893 10.2273C11.7202 10.3788 11.8553 10.3741 11.9944 10.2131L16.2913 5.24148C16.4304 5.08049 16.4345 4.92424 16.3036 4.77273ZM17.2857 13.2102V15.9091C17.2857 17.036 16.9399 17.9995 16.2483 18.7997C15.5567 19.5999 14.724 20 13.75 20H3.53571C2.56176 20 1.72898 19.5999 1.03739 18.7997C0.345796 17.9995 0 17.036 0 15.9091V4.09091C0 2.96402 0.345796 2.00047 1.03739 1.20028C1.72898 0.400095 2.56176 0 3.53571 0H13.75C14.2656 0 14.7444 0.118371 15.1864 0.355114C15.3092 0.421402 15.3828 0.530303 15.4074 0.681818C15.4319 0.842803 15.3951 0.980114 15.2969 1.09375L14.6953 1.78977C14.5807 1.92235 14.4498 1.96023 14.3025 1.90341C14.1142 1.84659 13.9301 1.81818 13.75 1.81818H3.53571C2.99554 1.81818 2.53311 2.04072 2.14844 2.4858C1.76376 2.93087 1.57143 3.46591 1.57143 4.09091V15.9091C1.57143 16.5341 1.76376 17.0691 2.14844 17.5142C2.53311 17.9593 2.99554 18.1818 3.53571 18.1818H13.75C14.2902 18.1818 14.7526 17.9593 15.1373 17.5142C15.5219 17.0691 15.7143 16.5341 15.7143 15.9091V14.1193C15.7143 13.9962 15.7511 13.892 15.8248 13.8068L16.6105 12.8977C16.7333 12.7557 16.8765 12.7225 17.0402 12.7983C17.2039 12.8741 17.2857 13.0114 17.2857 13.2102ZM16.1071 2.72727L19.6429 6.81818L11.3929 16.3636H7.85714V12.2727L16.1071 2.72727ZM21.558 4.60227L20.4286 5.90909L16.8929 1.81818L18.0223 0.511364C18.2515 0.246212 18.5298 0.113636 18.8571 0.113636C19.1845 0.113636 19.4628 0.246212 19.692 0.511364L21.558 2.67045C21.7872 2.93561 21.9018 3.25758 21.9018 3.63636C21.9018 4.01515 21.7872 4.33712 21.558 4.60227Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </label>
                    </div>
                    </div>
                    {{-- <div class="wrap">
                        <label For="image" class="text-black">Foto Profil</label>
                        <div class="relative">
                            <input id="svg-container" type="file" id="image" accept="image/*"
                                class="hidden" />
                            <label for="image"
                                class="cursor-pointer bg-[#2F5B6B] text-white py-2 px-4 rounded-lg inline-block">
                                Unggah File
                            </label>
                        </div>
                    </div> --}}
                </div>
          
            </div>
        </div>
        <div class="kirim flex justify-end mt-5">
            <a href="/edit-profile-pendukung" class="bg-[#2F5B6B] text-white py-2 px-8 rounded-lg">Lanjutkan</a>
        </div>
    </x-sidebar-user>
    <script>
        document.getElementById('file-input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.getElementById('selected-image');
                    img.src = e.target.result;
                    img.classList.remove('hidden');
                    document.getElementById('svg-container').classList.add('hidden');
                    document.getElementById('edit-icon-container').classList.remove('hidden');
                    document.getElementById('hapus-icon-container').classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
        document.getElementById('hapus-icon-container').addEventListener('click', function() {
            const img = document.getElementById('selected-image');
            img.src = '';
            img.classList.add('hidden');
            document.getElementById('svg-container').classList.remove('hidden');
            document.getElementById('edit-icon-container').classList.add('hidden');
            document.getElementById('hapus-icon-container').classList.add('hidden');
            document.getElementById('file-input').value = '';
        });
    </script>
</body>

</html>
