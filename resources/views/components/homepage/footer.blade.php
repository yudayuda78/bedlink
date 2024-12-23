<div class="rounded-t-3xl bg-slate-800 xl:rounded-t-[45px]">
    <div class="mx-auto max-w-screen-xl">
        <div class="flex flex-col items-center gap-1 px-5 py-10 xl:px-0 xl:py-16">
            <p
                class="mx-auto max-w-[665px] px-5 text-center font-syne text-3xl font-bold leading-tight text-white xl:text-5xl">
                Ayo Coba Layanan Kami Gratis!
            </p>
            <div>
                <a href="{{ route('register') }}">
                    <button type="button"
                        class="mt-3 rounded-full bg-blue-600 px-5 py-2.5 text-center font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Daftar Gratis
                    </button>
                </a>
            </div>
        </div>
        <div class="flex justify-between border-t border-slate-700 py-7">
            <a href="/"><img class="hidden w-[120px] xl:block xl:w-[142px]"
                    src="/img/ui/logo-bedlink-white.svg"></a>
            <div class="mx-auto flex items-center px-5 xl:mx-0 xl:px-0">
                <a href="{{ route('syarat-ketentuan') }}"
                    class="me-3 text-sm text-white hover:text-blue-100 xl:me-5 xl:text-base">Syarat & Ketentuan</a>
                <a href="{{ route('kebijakan-privasi') }}"
                    class="me-3 text-sm text-white hover:text-blue-100 xl:me-5 xl:text-base">Kebijakan Privasi</a>
                <a href="{{ route('register') }}">
                    <button type="button"
                        class="rounded-full bg-blue-700 px-4 py-1.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:text-base">Kontak</button>
                </a>
            </div>
        </div>
    </div>
</div>
