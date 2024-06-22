<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .password-container {
            position: relative;
        }

        .eye-icon {
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        #eye-close {
            display: none;
        }
    </style>
</head>

<body>
    <div class="m-0 box-border md:flex h-screen w-full bg-[url('../../Assets/bgadmin.png')] bg-no-repeat bg-cover">
        <div class="w-full relative">
            <div class="h-screen flex flex-col items-center justify-center">
                <div class="z-10 bg-[#093545] pl-7 pr-7 pt-5 pb-5 w-[90%] md:w-[40%] rounded-xl drop-shadow-2xl">
                    <div
                        class="head justify-center pt-3 text-white gap-1 items-center font-semibold text-[32px] mb-4 flex">
                        <div class="logo w-[70px] aspect-auto">
                            <img class="w-full" src="./../../Assets/logoo.png" alt="">
                        </div>
                        Laboratorium Kesehatan <br> Provinsi Lampung
                    </div>
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
                        @if ($errors->has('email'))
                            <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="text-black">
                            <div class="mb-[20px]">
                                <input type="email" name="email" id="email" placeholder="Masukkan Email"
                                    class="mt-1 p-2 w-full border rounded-md border-[#566356] dark:focus:ring-[#6C806C] focus:ring-[#6C806C]"
                                    required autofocus>
                            </div>
                            @csrf
                            <div class="mb-[2px]">
                                <input type="password" name="password" id="password" placeholder="Masukkan Password"
                                    class="mt-1 p-2 w-full border rounded-md border-[#566356] focus:ring-[#6C806C] dark:focus:ring-[#6C806C]"
                                    required>
                                <div class="eye-icon absolute right-10 top-[69%] z-30">
                                    <button type="button" class="cursor-pointer" id="eye-open"
                                        onclick="togglePasswordVisibility('open')">
                                        <svg id="eye-open" class="bi bi-eye-fill width="30" height="30"
                                            viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.88773 4.11249C5.77118 3.99594 5.63282 3.90349 5.48054 3.84041C5.32827 3.77734 5.16506 3.74487 5.00023 3.74487C4.83541 3.74487 4.6722 3.77734 4.51992 3.84041C4.36764 3.90349 4.22928 3.99594 4.11273 4.11249C3.87735 4.34787 3.74512 4.66711 3.74512 4.99999C3.74512 5.33286 3.87735 5.65211 4.11273 5.88749L11.1502 12.925C10.705 13.7533 10.5385 14.703 10.6753 15.6333C10.8122 16.5636 11.2452 17.4251 11.9102 18.0901C12.5751 18.755 13.4366 19.188 14.3669 19.3249C15.2973 19.4618 16.247 19.2952 17.0752 18.85L24.1127 25.8875C24.2289 26.0046 24.3672 26.0976 24.5195 26.1611C24.6718 26.2246 24.8352 26.2572 25.0002 26.2572C25.1652 26.2572 25.3286 26.2246 25.481 26.1611C25.6333 26.0976 25.7715 26.0046 25.8877 25.8875C26.0049 25.7713 26.0979 25.633 26.1613 25.4807C26.2248 25.3284 26.2575 25.165 26.2575 25C26.2575 24.835 26.2248 24.6716 26.1613 24.5193C26.0979 24.3669 26.0049 24.2287 25.8877 24.1125L5.88773 4.11249ZM15.0002 16.875C14.503 16.875 14.026 16.6774 13.6744 16.3258C13.3228 15.9742 13.1252 15.4973 13.1252 15C13.1252 15 13.1252 14.9375 13.1252 14.9125L15.0752 16.8625L15.0002 16.875Z"
                                                fill="#231F20" fill-opacity="0.55" />
                                            <path
                                                d="M15.2751 21.25C9.90009 21.375 6.37508 16.7625 5.27508 15C6.05817 13.7509 6.99929 12.6081 8.07508 11.6L6.25008 9.83752C4.83924 11.1669 3.6306 12.6956 2.66259 14.375C2.55288 14.565 2.49512 14.7806 2.49512 15C2.49512 15.2194 2.55288 15.435 2.66259 15.625C3.45009 16.9875 7.66259 23.75 15.0251 23.75H15.3376C16.722 23.709 18.0885 23.4255 19.3751 22.9125L17.4001 20.9375C16.7055 21.1202 15.9928 21.225 15.2751 21.25Z"
                                                fill="#231F20" fill-opacity="0.55" />
                                            <path
                                                d="M27.3375 14.375C26.5375 12.9875 22.125 6.02496 14.6625 6.24996C13.2781 6.29103 11.9115 6.57449 10.625 7.08746L12.6 9.06246C13.2945 8.87975 14.0073 8.77494 14.725 8.74996C20.0875 8.61246 23.6125 13.2375 24.725 15C23.9226 16.2528 22.9603 17.3958 21.8625 18.4L23.75 20.1625C25.1786 18.8366 26.4042 17.3077 27.3875 15.625C27.4897 15.4306 27.5389 15.2127 27.5301 14.9933C27.5213 14.7738 27.4549 14.5606 27.3375 14.375Z"
                                                fill="#231F20" fill-opacity="0.55" />
                                        </svg>

                                    </button>
                                    <button type="button" class="" id="eye-close"
                                        onclick="togglePasswordVisibility('close')">
                                        <svg id="eye-icon" class="bi bi-eye-fill" width="30" height="30"
                                            viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.5 15C2.5 15 6.25 6.25 15 6.25C23.75 6.25 27.5 15 27.5 15C27.5 15 23.75 23.75 15 23.75C6.25 23.75 2.5 15 2.5 15Z"
                                                stroke="#868484" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M15 18.75C17.0711 18.75 18.75 17.0711 18.75 15C18.75 12.9289 17.0711 11.25 15 11.25C12.9289 11.25 11.25 12.9289 11.25 15C11.25 17.0711 12.9289 18.75 15 18.75Z"
                                                stroke="#868484" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="wrap flex flex-col items-center gap-1 mt-3">
                            <button type="submit"
                                class="text-white w-[40%] bg-[#808080] hover:bg-[#686464] focus:ring-4 focus:ring-blue-300 text-center font-medium rounded-lg text-sm px-5 py-2.5 mb-2 mt-2 ">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        function togglePasswordVisibility(action) {
            var passwordInput = document.getElementById("password");
            var eyeOpenIcon = document.getElementById("eye-open");
            var eyeCloseIcon = document.getElementById("eye-close");

            if (action === "open") {
                passwordInput.type = "text";
                eyeOpenIcon.style.display = "none";
                eyeCloseIcon.style.display = "block";
            } else {
                passwordInput.type = "password";
                eyeOpenIcon.style.display = "block";
                eyeCloseIcon.style.display = "none";
            }
        }
    </script>
</body>

</html>
