<aside>
    <!-- Logo -->
    <a href="#" class="flex flex-row item-center gap-2 rounded-md py-2 px-3 mb-10">
        <img class="w-8 h-8" src="{{ asset('img/logo.png') }}" />
        <p class="flex flex-row item-center text-2xl font-baloo">Data<span class="text-azul-100">Lock</span></p>
    </a>

    <ul>
        <li>
            <x-nav-link href="{{ route('dashboard') }}"
                class="px-3 gap-3 text-base font-normal text-black py-3 mb-2 hover:bg-gray-100 rounded-lg w-full">
                <i class="fa-solid fa-house"></i>
                Menu principal
            </x-nav-link>
        </li>

        <li>
            <x-nav-link href="{{ route('dashboard') }}"
                class="px-3 gap-3 text-base font-normal text-black py-3 mb-2 hover:bg-gray-100 rounded-lg w-full">
                <i class="fa-solid fa-key"></i>
                Gerador de senhas
            </x-nav-link>
        </li>

        <li>
            <x-nav-link href="{{ route('dashboard') }}"
                class="px-3 gap-3 text-base font-normal text-black py-3 mb-2 hover:bg-gray-100 rounded-lg w-full">
                <i class="fa-solid fa-gear"></i>
                Configurações
            </x-nav-link>
        </li>
    </ul>


</aside>