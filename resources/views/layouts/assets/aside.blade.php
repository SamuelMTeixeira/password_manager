<aside>
    <!-- Logo -->
    <a href="#" class="flex flex-row item-center gap-2 rounded-md py-2 px-3 mb-10">
        <img class="w-8 h-8" src="{{ asset('img/logo.png') }}" />
        <p class="flex flex-row item-center text-2xl font-lora">Data<span class="text-azul-500">Lock</span></p>
    </a>

    <ul class="font-rubik">
        <li>
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
                class=" px-3 gap-3 text-base font-normal py-3 mb-2 group hover:bg-gray-100 rounded-lg w-full">
                <svg class="w-5 h-5 border-none fill-transparent group-hover:fill-black transition ease-in-out delay-150 duration-300"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path class="stroke-black stroke-2" d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                </svg>
                Página inicial
            </x-nav-link>
        </li>

        <li>
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('nomeDaRota')"
                class="px-3 gap-3 text-base font-normal py-3 mb-2 group hover:bg-gray-100 rounded-lg w-full">
                <svg class="w-5 h-5 border-none" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                    width="24px" fill="#000000">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M12.65 10C11.7 7.31 8.9 5.5 5.77 6.12c-2.29.46-4.15 2.29-4.63 4.58C.32 14.57 3.26 18 7 18c2.61 0 4.83-1.67 5.65-4H17v2c0 1.1.9 2 2 2s2-.9 2-2v-2c1.1 0 2-.9 2-2s-.9-2-2-2h-8.35zM7 14c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                </svg>
                Gerador de senhas
            </x-nav-link>
        </li>

        <li>
            <x-nav-link href="{{ route('dashboard') }}"
                class="px-3 gap-3 text-base font-normal py-3 mb-2 group hover:bg-gray-100 rounded-lg w-full">
                <svg class="w-5 h-5 border-none" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                    height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                    <rect fill="none" height="24" width="24" y="0" />
                    <path
                        d="M7,20h4c0,1.1-0.9,2-2,2S7,21.1,7,20z M5,18c0,0.55,0.45,1,1,1h6c0.55,0,1-0.45,1-1s-0.45-1-1-1H6C5.45,17,5,17.45,5,18z M16.5,9.5c0,3.82-2.66,5.86-3.77,6.5H5.27C4.16,15.36,1.5,13.32,1.5,9.5C1.5,5.36,4.86,2,9,2S16.5,5.36,16.5,9.5z M21.37,7.37L20,8 l1.37,0.63L22,10l0.63-1.37L24,8l-1.37-0.63L22,6L21.37,7.37z M19,6l0.94-2.06L22,3l-2.06-0.94L19,0l-0.94,2.06L16,3l2.06,0.94L19,6 z" />
                </svg>
                Dicas de ciber segurança
            </x-nav-link>
        </li>

        <li>
            <x-nav-link href="{{ route('dashboard') }}"
                class="px-3 gap-3 text-base font-normal py-3 mb-2 group hover:bg-gray-100 rounded-lg w-full">
                <svg class="w-5 h-5 border-none fill-transparent group-hover:fill-black transition ease-in-out delay-150 duration-300"
                    xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"
                    fill="#000000">
                    <rect fill="none" height="24" width="24" />
                    <path class="stroke-black stroke-2"
                        d="M19.5,12c0-0.23-0.01-0.45-0.03-0.68l1.86-1.41c0.4-0.3,0.51-0.86,0.26-1.3l-1.87-3.23c-0.25-0.44-0.79-0.62-1.25-0.42 l-2.15,0.91c-0.37-0.26-0.76-0.49-1.17-0.68l-0.29-2.31C14.8,2.38,14.37,2,13.87,2h-3.73C9.63,2,9.2,2.38,9.14,2.88L8.85,5.19 c-0.41,0.19-0.8,0.42-1.17,0.68L5.53,4.96c-0.46-0.2-1-0.02-1.25,0.42L2.41,8.62c-0.25,0.44-0.14,0.99,0.26,1.3l1.86,1.41 C4.51,11.55,4.5,11.77,4.5,12s0.01,0.45,0.03,0.68l-1.86,1.41c-0.4,0.3-0.51,0.86-0.26,1.3l1.87,3.23c0.25,0.44,0.79,0.62,1.25,0.42 l2.15-0.91c0.37,0.26,0.76,0.49,1.17,0.68l0.29,2.31C9.2,21.62,9.63,22,10.13,22h3.73c0.5,0,0.93-0.38,0.99-0.88l0.29-2.31 c0.41-0.19,0.8-0.42,1.17-0.68l2.15,0.91c0.46,0.2,1,0.02,1.25-0.42l1.87-3.23c0.25-0.44,0.14-0.99-0.26-1.3l-1.86-1.41 C19.49,12.45,19.5,12.23,19.5,12z M12.04,15.5c-1.93,0-3.5-1.57-3.5-3.5s1.57-3.5,3.5-3.5s3.5,1.57,3.5,3.5S13.97,15.5,12.04,15.5z" />
                </svg>
                Configurações
            </x-nav-link>
        </li>
    </ul>


</aside>