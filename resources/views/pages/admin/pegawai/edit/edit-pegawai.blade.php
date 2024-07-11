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

        @if ($message = Session::get('error'))
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="red" aria-hidden="true" class="oc sf axy">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01">
                                            </path>
                                            <circle cx="12" cy="16" r="1" fill="red" />
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
        <div class="text-[32px] font-semibold text-[#2F5B6B] mb-3">Data Pegawai</div>
        <div class="flex justify-end">
            <div class="sears relative">
                <div class="absolute right-[10px] top-[8px]">
                    <img src="./../Assets/cari.svg" alt="">
                </div>
            </div>
        </div>
        {{-- as --}}
        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form mt-[20px]">
                <div class="wrap w-full md:flex-row flex-col  flex gap-3">
                    {{-- KIRI --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <label for="file-input" class="cursor-pointer relative">
                            <div class="foto h-[180px] aspect-square bg-[#C3C3C3] rounded-lg relative">
                                <img class="h-full w-full object-cover" src="{{ asset('storage/' . $user->foto) }}"
                                    alt="">
                                <input id="file-input" type="file" name="foto" class="hidden" accept="image/*"
                                    value="" />
                                <div id="edit-icon-container" class="absolute bottom-2 right-2">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.9018 15L12.3259 13.3523L10.4598 11.1932L9.03571 12.8409V13.6364H10.2143V15H10.9018ZM16.3036 4.77273C16.1726 4.62121 16.0376 4.62595 15.8984 4.78693L11.6016 9.75852C11.4624 9.91951 11.4583 10.0758 11.5893 10.2273C11.7202 10.3788 11.8553 10.3741 11.9944 10.2131L16.2913 5.24148C16.4304 5.08049 16.4345 4.92424 16.3036 4.77273ZM17.2857 13.2102V15.9091C17.2857 17.036 16.9399 17.9995 16.2483 18.7997C15.5567 19.5999 14.724 20 13.75 20H3.53571C2.56176 20 1.72898 19.5999 1.03739 18.7997C0.345796 17.9995 0 17.036 0 15.9091V4.09091C0 2.96402 0.345796 2.00047 1.03739 1.20028C1.72898 0.400095 2.56176 0 3.53571 0H13.75C14.2656 0 14.7444 0.118371 15.1864 0.355114C15.3092 0.421402 15.3828 0.530303 15.4074 0.681818C15.4319 0.842803 15.3951 0.980114 15.2969 1.09375L14.6953 1.78977C14.5807 1.92235 14.4498 1.96023 14.3025 1.90341C14.1142 1.84659 13.9301 1.81818 13.75 1.81818H3.53571C2.99554 1.81818 2.53311 2.04072 2.14844 2.4858C1.76376 2.93087 1.57143 3.46591 1.57143 4.09091V15.9091C1.57143 16.5341 1.76376 17.0691 2.14844 17.5142C2.53311 17.9593 2.99554 18.1818 3.53571 18.1818H13.75C14.2902 18.1818 14.7526 17.9593 15.1373 17.5142C15.5219 17.0691 15.7143 16.5341 15.7143 15.9091V14.1193C15.7143 13.9962 15.7511 13.892 15.8248 13.8068L16.6105 12.8977C16.7333 12.7557 16.8765 12.7225 17.0402 12.7983C17.2039 12.8741 17.2857 13.0114 17.2857 13.2102ZM16.1071 2.72727L19.6429 6.81818L11.3929 16.3636H7.85714V12.2727L16.1071 2.72727ZM21.558 4.60227L20.4286 5.90909L16.8929 1.81818L18.0223 0.511364C18.2515 0.246212 18.5298 0.113636 18.8571 0.113636C19.1845 0.113636 19.4628 0.246212 19.692 0.511364L21.558 2.67045C21.7872 2.93561 21.9018 3.25758 21.9018 3.63636C21.9018 4.01515 21.7872 4.33712 21.558 4.60227Z"
                                            fill="black" />
                                    </svg>
                                </div>
                            </div>
                            {{-- <img id="selected-image" src="" alt="Selected Image" class="hidden" />
                        <input id="file-input" type="file" class="hidden" accept="image/*" value="" /> --}}

                        </label>
                        {{--  --}}
                        <div class="wrap mt-[11px]">
                            <label For="" class="text-black ">Nama</label>
                            <input type="text" id="" value="{{ $user->name }}" name="name" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nama" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">NIP</label>
                            <input type="text" id="kontak" value="{{ $user->nip }}" name="nip" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan NIP" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No Kartu Keluarga</label>
                            <input type="text" value="{{ $user->nik }}" name="nik"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No Kartu Keluarga" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Nomor Telepon</label>
                            <input type="text" value="{{ $user->no_tel }}" name="no_tel" required
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Nomor Telepon" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Alamat</label>
                            <input type="text" value="{{ $user->alamat }}" name="alamat"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Alamat" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal NPWP</label>
                            <input type="date" value="{{ $user->tgl_npwp }}" name="tgl_npwp"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tanggal NPWP" />
                        </div>
                    </div>
                    {{-- TENGAH --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap ">
                            <label for="status" class="text-black">Status</label>
                            <select required name="status"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="status">
                                <option value="aktif" {{ $user->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="tidak aktif" {{ $user->status == 'tidak aktif' ? 'selected' : '' }}>
                                    Non-Aktif
                                </option>
                            </select>
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Agama</label>
                            <select value="{{ $user->agama }}" name="agama"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] p-2 px-2 w-full bg-transparent"
                                id="cars">
                                <option value="Islam" {{ $user->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ $user->agama == 'Kristen' ? 'selected' : '' }}>Kristen
                                </option>
                                <option value="Katholik" {{ $user->agama == 'Katholik' ? 'selected' : '' }}>Katholik
                                </option>
                                <option value="Hindu" {{ $user->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Budha" {{ $user->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                <option value="Lainnya" {{ $user->agama == 'Lainnya' ? 'selected' : '' }}>Lainnya
                                </option>
                                <option value="Kepercayaan Terhadap Tuhan YME"
                                    {{ $user->agama == 'Kepercayaan Terhadap Tuhan YME' ? 'selected' : '' }}>
                                    Kepercayaan Terhadap Tuhan YME</option>
                            </select>
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Satuan Kerja</label>
                            <input type="text" value="{{ $user->satuan_kerja }}" name="satuan_kerja"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Satuan Kerja" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Kerja Jabatan (Angka)</label>
                            <input type="text" value="{{ $user->kelas_jabatan }}" name="kelas_jabatan"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Kerja Jabtan (Angka)" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Email</label>
                            <input type="text" required value="{{ $user->email }}" name="email"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Email" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal Lahir</label>
                            <input type="date" value="{{ $user->tgl_lahir }}" name="tgl_lahir"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tanggal Lahir" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tempat Lahir</label>
                            <input type="text" value="{{ $user->tempat_lahir }}" name="tempat_lahir"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tempat Lahir" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No NPWP</label>
                            <input type="text" value="{{ $user->no_npwp }}" name="no_npwp"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No NPWP" />
                        </div>
                    </div>
                    {{-- KANAN --}}
                    <div class="md:w-1/3 w-full flex flex-col gap-3">
                        <div class="wrap">
                            <label For="" class="text-black ">Lokasi Kerja</label>
                            <input type="text" value="{{ $user->lokasi_kerja }}" name="lokasi_kerja"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Lokasi Kerja" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No BPJS Kesehatan</label>
                            <input type="text" value="{{ $user->no_bpjs }}" name="no_bpjs"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No BPJS Kesehatan" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No Akta Kelahiran</label>
                            <input type="text" value="{{ $user->no_akta }}" name="no_akta"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No Akta Kelahiran" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No Karis/Karsu</label>
                            <input type="text" value="{{ $user->no_karis }}" name="no_karis"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No Karis/Karsu" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No TASPEN</label>
                            <input type="text" value="{{ $user->no_taspen }}" name="no_taspen"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No TASPEN" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">Tanggal TASPEN</label>
                            <input type="date" value="{{ $user->tgl_taspen }}" name="tgl_taspen"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan Tanggal TASPEN" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No TAPERA</label>
                            <input type="text" value="{{ $user->no_tapera }}" name="no_tapera"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No TAPERA" />
                        </div>
                        <div class="wrap">
                            <label For="" class="text-black ">No KPPN/Kantor Pembayaran Gaji</label>
                            <input type="text" value="{{ $user->kppn }}" name="kppn"
                                class="border border-[#C3C3C3] text-gray-900 text-sm rounded-md focus:ring-[#C3C3C3] focus:border-[#C3C3C3] px-2 w-full bg-transparent"
                                placeholder="Masukkan No KPPN/Kantor Pembayaran Gaji" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="kirim flex justify-end mt-5">
                <button type="submit"
                    class="bg-[#2F5B6B] hover:bg-[#1c404d] link text-white py-2 px-8 rounded-lg">Selanjutnya</button>
            </div>
        </form>
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

            function closeModal() {
                const modal = document.querySelector('.relative.z-10');
                modal.style.display = 'none';
            }
        </script>
    </x-sidebar-admin>
</body>

</html>
