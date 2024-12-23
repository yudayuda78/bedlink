<style>
    /* Custom animation for gradient background */
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .animate-gradient {
        background-size: 200% 200%;
        animation: gradient 6s ease infinite;
    }
</style>
<x-app title="{{ $microsite->title }}">
    <div class="animate-gradient bg-gradient-to-r from-slate-50 via-white to-slate-50 md:to-slate-100">
        <div class="mx-auto px-5 md:max-w-2xl md:px-0">
            <div class="mx-auto flex items-center justify-between pt-8 md:pt-14">
                <div class="rounded-full">
                    <img class="aspect-square h-12 rounded-full bg-slate-100 object-cover object-center md:h-14"
                        src="/img/logo/{{ $microsite->icon }}">
                </div>
                <button type="button" data-modal-target="header-modal" data-modal-toggle="header-modal">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-slate-200 transition duration-300 hover:bg-slate-100 md:h-14 md:w-14">
                        <i class="ri-share-line text-xl text-[#196ECD]"></i>
                    </div>
                </button>
            </div>
            <div class="space-y-3 pb-12 pt-12">
                <h1 class="text-center font-syne text-xl font-bold md:text-2xl">{{ $microsite->title }}</h1>
                <p class="max-w-100 mx-auto text-center text-sm text-slate-500 md:text-base">
                    {{ $microsite->description }}
                </p>
            </div>
        </div>
    </div>
    <div class="mx-auto px-5 md:max-w-2xl md:px-0">
        <div class="mb-24 space-y-4 pt-5 md:space-y-5 md:pt-2">
            @foreach ($links as $link)
                @if ($link->type === 'link')
                    <a href="{{ $link->url }}" target="_blank"
                        class="flex items-center justify-between rounded-full bg-slate-100 p-1.5 transition duration-300 hover:scale-105 hover:bg-slate-200 md:p-2">
                        <img class="aspect-square h-8 rounded-full bg-white md:h-10"
                            src="/img/icon/{{ $link->icon }}.png">
                        <span class="text-[13px] text-slate-800 md:text-base">{{ $link->title }}</span>
                        <i class="ri-arrow-right-up-line me-2 text-xl text-[#196ECD] md:text-2xl"></i>
                    </a>
                @elseif($link->type === 'category')
                    <div class="pt-1 text-center text-base font-bold md:pt-3 md:text-lg">{{ $link->title }}</div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="mx-auto px-5 md:max-w-2xl md:px-0">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9697129609724227"
            crossorigin="anonymous"></script>
        <!-- Microsite -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9697129609724227"
            data-ad-slot="5642007864" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <!-- Main modal -->
    <div id="header-modal" tabindex="-1" aria-hidden="true"
        class="fixed left-0 right-0 top-0 z-50 hidden h-full max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-black bg-opacity-40 md:inset-0">
        <div class="relative max-h-full w-full p-4 md:w-[672px] md:p-0">
            <!-- Modal content -->
            <div class="relative rounded-2xl bg-white shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                    <h3 class="text-lg font-semibold text-slate-900">
                        Share Link
                    </h3>
                    <button type="button"
                        class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-slate-400 hover:bg-slate-200 hover:text-slate-900"
                        data-modal-toggle="header-modal">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <p class="text-sm font-normal text-slate-500">Share this link to everyone by clicking the
                        links below!</p>
                    <ul class="my-4 space-y-3">
                        <li>
                            <button
                                class="group flex w-full items-center justify-start rounded-lg bg-slate-50 p-3 text-base font-bold text-slate-900 hover:bg-slate-100 hover:shadow"
                                onclick="navigator.clipboard.writeText('{{ url()->current() }}'); return false;">
                                <i class="ri-file-copy-line ms-1 text-xl font-normal text-slate-400"></i>
                                <span class="ms-3 whitespace-nowrap">Copy Link</span>
                            </button>
                        </li>
                        <li>
                            <a href="https://wa.me/?text={{ url()->current() }}" target="_blank"
                                class="group flex items-center rounded-lg bg-slate-50 p-3 text-base font-bold text-slate-900 hover:bg-slate-100 hover:shadow">
                                <i class="ri-whatsapp-line ms-1 text-xl font-normal text-green-500"></i>
                                <span class="ms-3 flex-1 whitespace-nowrap">Share WhatsApp</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://telegram.me/share/url?url={{ url()->current() }}" target="_blank"
                                class="group flex items-center rounded-lg bg-slate-50 p-3 text-base font-bold text-slate-900 hover:bg-slate-100 hover:shadow">
                                <i class="ri-telegram-line ms-1 text-xl font-normal text-sky-600"></i>
                                <span class="ms-3 flex-1 whitespace-nowrap">Share Telegram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/?url={{ url()->current() }}" target="_blank"
                                class="group flex items-center rounded-lg bg-slate-50 p-3 text-base font-bold text-slate-900 hover:bg-slate-100 hover:shadow">
                                <i class="ri-instagram-line ms-1 text-xl font-normal text-red-500"></i>
                                <span class="ms-3 flex-1 whitespace-nowrap">Share Instagram</span>
                            </a>
                        </li>
                    </ul>
                    <div>
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center text-xs font-normal text-slate-500 hover:underline">
                            <i class="ri-question-line me-1 text-[#196ECD]"></i>
                            Interested on making your own link? Let's register here!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>

