@if (session()->has('success'))
    <div id="toast"
        class="animate-fade-in fixed bottom-3 left-1/2 mb-4 flex w-full max-w-xs -translate-x-1/2 items-center rounded-lg border border-slate-200 bg-white p-4 text-slate-500"
        role="alert">
        <div class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-blue-100 text-blue-500">
            <i class="ri-checkbox-circle-fill"></i>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ session()->get('success') }}</div>
        <button type="button"
            class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-slate-400 hover:bg-slate-100 hover:text-slate-900 focus:ring-2 focus:ring-slate-300"
            data-dismiss-target="#toast" aria-label="Close">
            <span class="sr-only">Close</span>
            <i class="ri-close-fill"></i>
        </button>
    </div>
@endif
