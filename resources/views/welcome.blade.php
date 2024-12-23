<x-app title="Bedlink">
    <div
        class="mx-3 mt-3 rounded-2xl bg-gradient-to-t from-blue-200 via-blue-400 to-blue-600 xl:bg-[radial-gradient(circle_at_bottom,_var(--tw-gradient-stops))] xl:from-white xl:via-blue-400 xl:to-blue-600">
        <div
            class="rounded-2xl bg-[url(https://res.cloudinary.com/duockdpep/image/upload/v1727799314/grid_l9pdws.svg)] bg-center text-white">
            <x-homepage.navbar />
            <div class="pb-10 pt-6 xl:pb-20 xl:pt-11">
                <h1 class="px-5 text-center font-syne text-4xl font-bold leading-tight xl:text-[64px]">Satu <span
                        class="text-blue-100">Link</span> Untuk
                    Semua</h1>
                <p class="px-5 text-center text-lg xl:text-xl">Buat halaman personal untuk berbagi semua tautanmu ke
                    dunia</p>
                <div class="mt-5 text-center leading-loose xl:block">
                    <a href="{{ route('register') }}">
                        <button type="button"
                            class="rounded-full bg-blue-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 xl:text-base">Coba
                            Sekarang</button>
                    </a>
                    <a href="#whyus" class="ms-0 text-sm hover:text-blue-100 xl:ms-3 xl:text-base">
                        <br class="block xl:hidden"> Lihat Layanan Kami
                    </a>
                </div>
            </div>
            <img class="mx-auto hidden w-[1417px] xl:block" src="/img/ui/hero-image.png">
            <img class="mx-auto block xl:hidden" src="/img/ui/hero-image-mobile.png">
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl px-5 py-10 xl:px-0 xl:py-14" id="whyus">
        <h2 class="mb-2 font-syne text-2xl font-bold xl:text-5xl">Kenapa pilih kami?</h2>
        <p class="text-base text-slate-500 xl:text-xl">Dapatkan benefit dibawah ini dengan menggunakan bedlink.id
        </p>
        <div class="mt-5 flex flex-col justify-between gap-5 xl:mt-8 xl:flex-row">
            <div class="w-fit rounded-2xl bg-slate-100 p-4">
                <img class="rounded-xl" src="/img/ui/whyus1.svg">
                <div class="max-w-[542px] p-4">
                    <p class="text my-1 text-xl font-bold xl:text-2xl">Ringkas dan Cepat</p>
                    <p class="text-base text-slate-500 xl:text-xl">Deploy micrositemu dalam hitungan detik saja dari
                        proses bergabung sampai publikasi link</p>
                </div>
            </div>
            <div class="w-fit rounded-2xl bg-slate-100 p-4">
                <img class="rounded-xl" src="/img/ui/whyus2.svg">
                <div class="max-w-[542px] p-4">
                    <p class="text my-1 text-xl font-bold xl:text-2xl">Gratis Tanpa Batas</p>
                    <p class="text-base text-slate-500 xl:text-xl">Semua layanan dapat digunakan sepenuhnya gratis dan
                        tanpa batasan penggunaan ataupun kustomisasi</p>
                </div>
            </div>
        </div>
        <div class="mt-5 flex flex-col justify-between gap-5 xl:mt-11 xl:flex-row">
            <div class="w-fit rounded-2xl bg-slate-100 p-4">
                <img class="rounded-xl" src="/img/ui/whyus3.svg">
                <div class="max-w-[542px] p-4">
                    <p class="text my-1 text-xl font-bold xl:text-2xl">Penuh Personalisasi</p>
                    <p class="text-base text-slate-500 xl:text-xl">Bebas memilih url, desain, icon dan opsi
                        personalisasi lain yang sesuai dengan brand identity kamu</p>
                </div>
            </div>
            <div class="w-fit rounded-2xl bg-slate-100 p-4">
                <img class="rounded-xl" src="/img/ui/whyus4.svg">
                <div class="max-w-[542px] p-4">
                    <p class="text my-1 text-xl font-bold xl:text-2xl">Mudah di Share</p>
                    <p class="text-base text-slate-500 xl:text-xl">Link bisa kamu taruh dimana saja, dari bio Instagram,
                        TikTok, Twitter, Thread, dan sebagainya</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-slate-100 py-3">
        <div
            class="mx-auto flex max-w-screen-xl flex-col-reverse items-center justify-between gap-10 px-5 py-8 xl:flex-row xl:px-0">
            <div>
                <span class="rounded-lg bg-yellow-300 px-3 py-2"><i class="ri-bard-line"></i> Coming Soon</span>
                <div class="mb-4 mt-6">
                    <h2 class="mb-1 font-syne text-3xl font-bold xl:text-5xl">Link Shortener</h2>
                    <p class="text-base text-slate-500 xl:text-xl">Atau pemendek link yang bisa kamu gunakan sepuasanya
                        gratis!</p>
                </div>
                <div class="flex">
                    <i class="ri-checkbox-circle-fill me-2 text-slate-300"></i>
                    <p class="mb-3 text-slate-500"> Mudah, sederhana, cepat, sesuai dengan ekspektasi dari sebuah link
                        shortener
                    </p>
                </div>
                <div class="flex">
                    <i class="ri-edit-box-fill me-2 text-slate-300"></i>
                    <p class="mb-3 text-slate-500"> URL yang tertaut bisa diedit bahkan setelah link sudah di publikasi
                    </p>
                </div>
                <div class="flex">
                    <i class="ri-price-tag-3-fill me-2 text-slate-300"></i>
                    <p class="mb-3 text-slate-500"> Dapat digunakan sepenuhnya gratis dan tanpa batasan apapun
                    </p>
                </div>
                <a href="{{ route('register') }}">
                    <button type="button"
                        class="mt-3 rounded-full bg-blue-600 px-5 py-2.5 text-center font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Cek
                        Sekarang</button>
                </a>
            </div>
            <img class="rounded-2xl bg-slate-100" src="/img/ui/link-shortener.svg">
        </div>
    </div>
    <div class="bg-slate-50 py-8">
        <div class="mx-auto max-w-screen-xl px-5 xl:my-20 xl:px-0">
            <h2 class="mb-2 font-syne text-2xl font-bold xl:text-center xl:text-5xl">What's coming next</h2>
            <p class="text-base text-slate-500 xl:text-center xl:text-xl">Fitur-fitur bedlink.id yang akan datang</p>
            <div class="mt-8 flex flex-col justify-between gap-5 xl:flex-row xl:gap-8">
                <div class="w-full rounded-2xl bg-slate-100 p-7 xl:p-10">
                    <div
                        class="mb-3 flex aspect-square w-12 items-center justify-center rounded-full bg-blue-200 xl:w-16">
                        <i class="ri-qr-code-line text-2xl leading-none"></i>
                    </div>
                    <h2 class="mb-2 text-xl font-bold xl:text-3xl">QR Code Support</h2>
                    <p class="text-base text-slate-500 xl:text-xl">Generate QR Code otomatis untuk setiap link</p>
                </div>
                <div class="w-full rounded-2xl bg-slate-100 p-7 xl:p-10">
                    <div
                        class="mb-3 flex aspect-square w-12 items-center justify-center rounded-full bg-amber-200 xl:w-16">
                        <i class="ri-palette-line text-2xl leading-none"></i>
                    </div>
                    <h2 class="mb-2 text-xl font-bold xl:text-3xl">Personalisasi+</h2>
                    <p class="text-base text-slate-500 xl:text-xl">Lebih banyak personalisasi dari warna dan desain</p>
                </div>
                <div class="w-full rounded-2xl bg-slate-100 p-7 xl:p-10">
                    <div
                        class="mb-3 flex aspect-square w-12 items-center justify-center rounded-full bg-red-200 xl:w-16">
                        <i class="ri-mail-send-line text-2xl leading-none"></i>
                    </div>
                    <h2 class="mb-2 text-xl font-bold xl:text-3xl">Email Subscription</h2>
                    <p class="text-base text-slate-500 xl:text-xl">Notifikasi email setiap link baru ditambahkan /
                        diedit
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto my-14 max-w-screen-xl px-5 xl:my-20 xl:px-0">
        <div class="flex items-center justify-between">
            <h2 class="font-syne text-2xl font-bold xl:text-5xl">Blog</h2>
            <a href="{{ route('blog') }}">
                <button type="button"
                    class="rounded-full bg-blue-600 px-5 py-2.5 text-center font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Selengkapnya</button>
            </a>
        </div>
        <div class="mt-8 flex flex-col justify-between gap-5 xl:flex-row xl:gap-8">
            @foreach ($blogs as $blog)
                <article
                    class="flex w-full flex-col justify-between gap-8 rounded-2xl border border-slate-200 p-7 hover:bg-slate-50 xl:p-10">
                    <div>
                        <h2 class="mb-3 text-xl font-semibold text-slate-700 hover:text-blue-600">
                            <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                        </h2>
                        <p class="leading-snug text-slate-500">
                            <a href="/blog/{{ $blog->slug }}">{{ $blog->excerpt }}</a>
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <img class="h-11 w-11 rounded-full" src="/img/avatar/{{ $blog->author->avatar }}"
                            alt="{{ $blog->author->name }}'s avatar">
                        <div>
                            <p class="font-semibold leading-tight text-slate-700">{{ $blog->author->name }}</p>
                            <p class="text-sm text-slate-500">{{ $blog->date }}</p>
                        </div>
                    </div>
                </article>
            @endforeach

            @for ($i = $blogs->count(); $i < 3; $i++)
                <article class="hidden w-full rounded-2xl border border-dashed border-slate-200 p-7 xl:block xl:p-10">
                </article>
            @endfor
        </div>
    </div>
    <x-homepage.footer />
</x-app>

