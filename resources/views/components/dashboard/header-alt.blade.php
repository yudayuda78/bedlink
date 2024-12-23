<div class="bg-white">
    <div class="mx-auto flex justify-between bg-white px-5 py-5 md:max-w-screen-xl md:px-0 md:py-9">
        <img class="h-min w-[142px]" src="/img/ui/logo-bedlink.png">
        <div class="flex items-center gap-3">
            <i class="ri-notification-3-fill text-2xl text-slate-500"></i>
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName">
                <div class="h-11 w-11 rounded-full border-4 border-slate-200 bg-slate-300">
                    <img class="h-full w-full rounded-full object-cover object-center" src="/img/ui/user-icon.jpg">
                </div>
            </button>
        </div>
    </div>
</div>
<div class="w-full bg-slate-200">
    <div class="mx-auto block items-center justify-between px-5 py-7 md:flex md:max-w-screen-xl md:px-0 md:py-4">
        <div class="mb-2.5 flex items-center justify-center gap-2 md:mb-0">
            <div
                class="h-8 w-8 overflow-hidden rounded-full border-2 border-white bg-white md:me-0 md:h-12 md:w-12 md:border-4">
                <img class="h-full w-full object-cover object-center" src="/img/ui/user-icon.jpg">
            </div>
            <div class="flex items-center gap-0 md:gap-1">
                <a href="{{ route('cek-link') }}"
                    class="text-sm font-bold capitalize hover:text-[#196ECD]">{{ auth()->user()->name }}
                </a>
            </div>
        </div>
        <div class="hidden justify-between gap-1.5 md:flex md:justify-end">
            <a href="{{ route('dashboard.account') }}">
                <x-buttons.small-button>Account</x-buttons.small-button>
            </a>
        </div>
        <div class="mt-2 flex gap-2 md:mt-0 md:hidden">
            <a href="{{ route('dashboard.account') }}"
                class="block w-full rounded-lg border border-transparent bg-[#196ECD] px-3 py-2 text-center text-sm text-white hover:bg-blue-700 focus:bg-blue-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50 md:w-full">
                Account
            </a>
        </div>
    </div>
</div>

{{-- Modal User --}}
<div id="dropdownAvatarName"
    class="z-10 hidden w-44 divide-y divide-slate-100 rounded-lg border border-slate-100 bg-white">
    <div class="px-4 py-3 text-sm text-slate-900">
        <div class="font-bold">{{ auth()->user()->name }}</div>
        <div class="truncate">{{ auth()->user()->email }}</div>
    </div>
    <ul class="py-2 text-sm text-slate-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
        <li>
            <a href="{{ route('cek-link') }}" class="block px-4 py-2 hover:bg-slate-100">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('dashboard.account') }}" class="block px-4 py-2 hover:bg-slate-100">Account</a>
        </li>
    </ul>
    <div class="py-2">
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="block w-full px-4 py-2 text-start text-sm text-red-500 hover:bg-slate-100">Logout</button>
            </form>
        @endauth
    </div>
</div>

