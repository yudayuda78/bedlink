<x-app>
    <div class="mx-3 mt-3 rounded-2xl bg-gradient-to-tr from-slate-200 to-slate-500">
        <x-homepage.navbar />
        <div class="pb-20 text-white">
            <h1 class="px-5 pb-1.5 text-center font-syne text-4xl font-bold md:text-5xl">Blog
            </h1>
            <p class="px-5 text-center text-lg md:text-xl">Artikel oleh tim bedlink.id</p>
        </div>
    </div>
    <div class="mx-auto my-10 max-w-screen-xl px-5 md:my-14 xl:px-0">
        <div class="flex items-center justify-between">
            <h2 class="font-syne text-xl font-bold xl:text-3xl">Recent Post</h2>
        </div>
        <div class="mt-4 flex flex-col justify-between gap-5 md:mt-8 xl:flex-row xl:gap-8">
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
    <div class="hidden h-96 xl:block"></div>
    <x-homepage.footer />
</x-app>
