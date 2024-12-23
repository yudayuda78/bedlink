@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div id="alert-{{ $loop->iteration }}" class="mb-2 flex items-center rounded-lg bg-red-50 px-4 py-3 text-red-800"
            role="alert">

            <i class="ri-information-fill text-lg"></i>
            <span class="sr-only">Info</span>
            <div class="ms-2 text-sm font-medium">
                {{ $error }}
            </div>
            <button type="button"
                class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-red-50 p-1.5 text-red-500 hover:bg-red-200 focus:ring-2 focus:ring-red-400"
                data-dismiss-target="#alert-{{ $loop->iteration }}" aria-label="Close">
                <span class="sr-only">Close</span>
                <i class="ri-close-line text-xl"></i>
            </button>
        </div>
    @endforeach
@endif

