@props(['micrositeId', 'micrositeMicrosite'])
<div class="bg-white">
    <div class="mx-auto flex justify-between bg-white px-5 py-5 md:max-w-screen-xl md:px-0 md:py-9">
        <a href="/"><img class="h-min w-[142px]" src="/img/ui/logo-bedlink.png"></a>
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
                    class="text-sm font-bold capitalize hover:text-[#196ECD]">{{ auth()->user()->name }}</a>
                <i class="ri-arrow-right-s-line text-2xl text-slate-500"></i>
                <span class="text-sm text-slate-500">bedlink.id/{{ $micrositeMicrosite }}</span>
            </div>
        </div>
        <div class="hidden justify-between gap-1.5 md:flex md:justify-end">
            <a href="/{{ $micrositeMicrosite }}">
                <x-buttons.small-button>Open Link</x-buttons.small-button>
            </a>
            <x-buttons.small-button-secondary id="dropdown-more-header" data-dropdown-toggle="dropdown1">
                More <i class="ri-expand-up-down-line font-bold text-[#196ECD]"></i>
            </x-buttons.small-button-secondary>
        </div>
        <div class="flex gap-2 md:hidden">
            <a href="/{{ $micrositeMicrosite }}"
                class="block w-full rounded-lg border border-transparent bg-[#196ECD] px-3 py-2 text-center text-sm text-white hover:bg-blue-700 focus:bg-blue-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50 md:w-full">
                Open Link
            </a>
            <x-buttons.small-button-secondary id="dropdown-more-header-mobile" data-dropdown-toggle="dropdown2">
                More <i class="ri-expand-up-down-line font-bold text-[#196ECD]"></i>
            </x-buttons.small-button-secondary>
        </div>
    </div>
</div>
<div class="relative z-10 w-full bg-white shadow-sm">
    <div class="mx-auto flex items-center justify-center px-5 md:max-w-screen-xl md:justify-start md:px-0">
        <a href="{{ route('dashboard.edit-link', ['microsite' => $micrositeMicrosite]) }}">
            <div
                class="{{ request()->routeIs('dashboard.edit-link') ? 'font-bold border-[#196ECD] border-b-2 text-black' : 'text-slate-500' }} p-4 text-sm md:px-4 md:py-5 md:text-base">
                Edit Link
            </div>
        </a>
        <a href="/dashboard/personalization/{{ $micrositeMicrosite }}">
            <div
                class="{{ request()->routeIs('dashboard.personalization') ? 'font-bold border-[#196ECD] border-b-2 text-black' : 'text-slate-500' }} p-4 text-sm md:px-4 md:py-5 md:text-base">
                Personalization</div>
        </a>
        <a class="hidden md:block" href="{{ route('cek-link') }}">
            <button
                class="me- rounded-full bg-[#196ECD] py-1.5 pl-1 pr-4 text-xs text-white hover:bg-blue-700 md:py-1 md:text-sm">
                <i class="ri-arrow-go-back-line me-1 rounded-full bg-[#3889e6] p-1"></i> Dashboard</button>
        </a>
    </div>
</div>

{{-- Modal More Desktop --}}
<div id="dropdown1" class="z-10 hidden w-36 divide-y divide-slate-100 rounded-lg bg-white shadow">
    <ul class="py-2 text-sm text-slate-600" aria-labelledby="dropdown-more-header">
        <li>
            <button type="button" class="block w-full px-4 py-2 text-start hover:bg-slate-100"
                onclick="navigator.clipboard.writeText('bedlink.id/{{ $micrositeMicrosite }}'); return false;">
                <i class="ri-clipboard-fill me-1"></i> Copy Link</button>
        </li>
        <li>
            <a href="{{ route('cek-link') }}" class="block px-4 py-2 text-red-500 hover:bg-red-100"><i
                    class="ri-delete-bin-2-fill me-1"></i> Delete Link</a>
        </li>
    </ul>
</div>

{{-- Modal More Mobile --}}
<div id="dropdown2" class="z-10 hidden w-36 divide-y divide-slate-100 rounded-lg bg-white shadow">
    <ul class="py-2 text-sm text-slate-600" aria-labelledby="dropdown-more-header-mobile">
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-slate-100"><i class="ri-clipboard-fill me-1"></i> Copy
                Link</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-slate-100"><i class="ri-edit-box-fill me-1"></i> Edit
                Link</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-red-500 hover:bg-red-100"><i
                    class="ri-delete-bin-2-fill me-1"></i> Delete Link</a>
        </li>
    </ul>
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

