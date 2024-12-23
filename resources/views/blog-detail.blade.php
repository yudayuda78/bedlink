<x-app>
    <div class="placeholder: mx-3 mt-3 rounded-2xl bg-gradient-to-r from-slate-300 to-slate-500">
        <x-homepage.navbar height="py-7" />
    </div>
    <div class="mx-auto my-3 mb-5 max-w-[810px] p-5 xl:mb-16">
        <div class="my-5 space-y-2 md:my-10">
            <p class="text-base leading-none text-slate-500 md:text-lg">{{ $blog->date }}</p>
            <h1 class="font-syne text-3xl font-bold leading-tight md:text-[40px]">
                {{ $blog->title }}
            </h1>
            <div class="flex items-center gap-3 pt-1">
                <img class="h-11 w-11 rounded-full" src="/img/avatar/{{ $blog->author->avatar }}"
                    alt="{{ $blog->author->name }}'s avatar">
                <div>
                    <p class="font-semibold leading-tight text-slate-700">{{ $blog->author->name }}</p>
                    <p class="text-sm text-slate-500">{{ $blog->author->position }}</p>
                </div>
            </div>
        </div>
        <article
            class="prose prose-lg prose-blue max-w-none pt-0.5 xl:prose-xl prose-h1:-mb-2 prose-h1:mt-6 prose-p:my-4 prose-p:text-slate-600 prose-a:no-underline prose-img:my-6 prose-img:w-full prose-img:rounded-xl prose-img:border prose-img:border-slate-100 xl:md:pt-0">
            {!! \Illuminate\Support\Str::markdown($blog->content) !!}
        </article>
    </div>
    <x-homepage.footer />
</x-app>
