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
        @if ($message = Session::get('success'))
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                                            class="oc sf axy">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5"></path>
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                            <span
                                                class="text-xl font-bold">{{ ucfirst($message[0]) }}</span>{{ substr($message, 1) }}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="button" onclick="closeModal()"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                                    Ok
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <form action="{{ route('profile.edit') }}" method="POST" enctype="multipart/form-data">
            <div class="text-[18px] text-[#2F5B6B]">Informasi Pengguna</div>
            <div class="form mt-[20px]">
                @csrf
                @method('PUT')
                <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">Nama Lengkap</label>
                            <input type="text" id="" name="name"
                                value="{{ old('name', auth()->user()->name) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama Lengkap" required />
                        </div>
                        <div class="wrap">
                            <label for="jk_user" class="text-black">Jenis Kelamin</label>
                            <select id="jk_user" name="jk_user" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 py-2 w-full bg-transparent">
                                <option value="laki-laki" @if (old('jk_user', auth()->user()->jk_user) == 'laki-laki') selected @endif>Laki-laki
                                </option>
                                <option value="perempuan" @if (old('jk_user', auth()->user()->jk_user) == 'perempuan') selected @endif>Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="wrap">
                            <label For="" class="text-black ">Ubah Password*</label>
                            <input type="password" id="password" name="password"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Password" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Telepon</label>
                            <input type="text" name="no_tel" required
                                value="{{ old('no_tel', auth()->user()->no_tel) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Telepon" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Email</label>
                            <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Email" required />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Agama</label>
                            <input type="text" name="agama" value="{{ old('agama', auth()->user()->agama) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Agama" required />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir"
                                value="{{ old('tgl_lahir', auth()->user()->tgl_lahir) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                required />
                        </div>

                    </div>
                    {{-- TENGAH --}}

                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label For="" class="text-black ">NIP</label>
                            <input type="text" id="" name="nip"
                                value="{{ old('nip', auth()->user()->nip) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan NIP" required />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Satuan Kerja</label>
                            <input type="text" name="satuan_kerja"
                                value="{{ old('satuan_kerja', auth()->user()->satuan_kerja) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Satuan Kerja" required />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Handphone</label>
                            <input type="text" name="no_hp" value="{{ old('no_hp', auth()->user()->no_hp) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Handphone" required />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">NIK</label>
                            <input type="text" name="nik" value="{{ old('nik', auth()->user()->nik) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan NIK" required />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Alamat</label>
                            <input type="text" name="alamat" value="{{ old('alamat', auth()->user()->alamat) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Alamat" required />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir"
                                value="{{ old('tempat_lahir', auth()->user()->tempat_lahir) }}"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tempat Lahir" required />
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap bg-[#E9F6FB] w-full rounded-xl flex justify-center p-3">
                            <div class="kotak flex flex-col items-center">
                                <div
                                    class="foto h-[180px] aspect-square bg-[#FFFFFF] rounded-lg flex items-center justify-center mb-5">
                                    <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt="" />
                                </div>
                                <div class="flex flex-col gap-1 items-center">
                                    <div class="User text-[30px] font-semibold">{{ auth()->user()->name }} </div>
                                    <div class="User text-[18px]">{{ auth()->user()->jabatan }} </div>
                                </div>
                            </div>
                        </div>

                        <div class="wrap">
                            <label For="image" class="text-black">Foto Profil</label>
                            <div class="relative">
                                <input type="file" id="image" name="foto" accept="image/*"
                                    class="hidden" />
                                <label for="image"
                                    class="cursor-pointer bg-[#2F5B6B] text-white py-2 px-4 rounded-lg inline-block">
                                    Unggah File
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kirim flex justify-end mt-5">
                <button type="submit" class="bg-[#2F5B6B] text-white py-2 px-8 rounded-lg">
                    Lanjutkan
                </button>
            </div>
        </form>
    </x-sidebar-user>
</body>
<script>
    function closeModal() {
        const modal = document.querySelector('.relative.z-10');
        modal.style.display = 'none';
    }
</script>

</html>
