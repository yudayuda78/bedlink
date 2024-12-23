@props(['height' => 'py-10'])
<div class="{{ $height }} mx-auto flex max-w-screen-xl items-center justify-between px-5 xl:px-0">
    <a href="/"><img class="w-[120px] xl:w-[142px]" src="/img/ui/logo-bedlink-white.svg"></a>
    <div class="flex items-center">
        @auth
            <span class="me-3 text-sm hover:text-blue-100 xl:text-base"></span>
            <a href="{{ route('cek-link') }}" class="hidden xl:block">
                <button type="button"
                    class="flex gap-2 rounded-full bg-blue-700 py-2.5 pe-4 ps-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:text-base">
                    <img class="w-6 rounded-full" src="/img/ui/user-icon.jpg">Dashboard
                </button>
            </a>
        @else
            <a href="{{ route('login') }}"
                class="me-3 hidden text-sm text-white hover:text-blue-100 xl:block xl:text-base">Login</a>
            <a href="{{ route('register') }}">
                <button type="button"
                    class="hidden rounded-full bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:block xl:text-base">
                    Daftar
                </button>
            </a>
        @endauth
        <button type="button" id="dropdownLeftEndButton" data-dropdown-toggle="dropdownLeftEnd"
            data-dropdown-placement="left-end"
            class="ms-2 rounded-full bg-blue-700 px-2.5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:text-base">
            <img class="w-6 rounded-full" src="/img/ui/hamenu.svg">
        </button>
        {{-- <button type="button" data-collapse-toggle="navbar-hamburger" aria-controls="navbar-hamburger"
            aria-expanded="false"
            class="ms-2 rounded-full bg-blue-700 px-2.5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:text-base">
            <img class="w-6 rounded-full" src="/img/ui/hamenu.svg">
        </button> --}}
    </div>
</div>

<!-- Dropdown menu -->
<div id="dropdownLeftEnd" class="z-10 ml-9 hidden w-48 divide-y divide-gray-100 rounded-lg bg-white shadow">
    <div class="flex justify-between p-3 text-sm" aria-labelledby="dropdownNavButton">
        @auth
            <a href="{{ route('cek-link') }}">
                <button type="button"
                    class="inline-flex w-[170px] items-center rounded-full bg-blue-700 px-3 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:text-sm">
                    <img class="me-2 w-6 rounded-full" src="/img/ui/user-icon.jpg">Dashboard
                </button>
            </a>
        @else
            <a href="{{ route('login') }}">
                <button type="button"
                    class="w-20 rounded-full bg-blue-400 px-3 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:text-sm">
                    Login
                </button>
            </a>
            <a href="{{ route('register') }}">
                <button type="button"
                    class="w-20 rounded-full bg-blue-700 px-3 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:text-sm">
                    Daftar
                </button>
            </a>
        @endauth
    </div>
    <ul class="py-2 text-sm text-slate-700" aria-labelledby="dropdownNavButton">
        <li>
            <a href="{{ route('blog') }}" class="block px-4 py-2 hover:bg-slate-100">
                <i class="ri-news-fill me-2 text-blue-600"></i><b>Blog</b></a>
        </li>
        <li>
            <a href="{{ route('kebijakan-privasi') }}" class="block px-4 py-2 hover:bg-slate-100">
                <i class="ri-information-fill me-2"></i>Kebijakan Privasi</a>
        </li>
        <li>
            <a href="{{ route('syarat-ketentuan') }}" class="block px-4 py-2 hover:bg-slate-100">
                <i class="ri-service-fill me-2"></i>Syarat & Ketentuan</a>
        </li>
    </ul>
</div>

{{-- <div class="mx-auto hidden max-w-screen-xl px-5 xl:px-0" id="navbar-hamburger">
    <ul class="flex flex-col rounded-lg bg-gray-50 font-medium">
        <li>
            <a href="#" class="block rounded px-3 py-2 text-gray-900">Services</a>
        </li>
        <li>
            <a href="#" class="block rounded px-3 py-2 text-gray-900">Pricing</a>
        </li>
        <li>
            <a href="#" class="block rounded px-3 py-2 text-gray-900">Contact</a>
        </li>
    </ul>
</div> --}}

