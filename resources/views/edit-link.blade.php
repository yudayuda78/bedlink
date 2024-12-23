<x-app bg="bg-slate-50" title="Dashboard">
    <x-dashboard.header micrositeId="{{ $microsite->id }}" micrositeMicrosite="{{ $microsite->microsite }}" />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="bg-slate-50">
        <div class="mx-auto flex flex-col px-5 md:max-w-screen-xl md:flex-row md:px-0">
            <div class="w-full border-r-0 py-8 md:w-[855px] md:border-r md:border-slate-200">
                <span class="text-lg font-bold md:text-xl">Edit Link</span>
                <ul class="mt-4" x-data="{ links: @js($links) }" x-init="new Sortable($refs.sortable, {
                    animation: 150,
                    handle: '.drag-handle', // This sets the handle class
                    onEnd: function(event) {
                        let order = Array.from($refs.sortable.children).map(el => el.dataset.id);
                        // Update the order using AJAX
                        fetch('{{ route('links.reorder') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ order })
                        });
                    }
                })" x-ref="sortable">

                    @if ($links->isNotEmpty())
                        @foreach ($links as $link)
                            @if ($link->type === 'link')
                                <li class="sortable-item flex items-center" data-id="{{ $link->id }}">
                                    <x-dashboard.link id="{{ $link->id }}" link="{{ $link->title }}"
                                        url="{{ $link->url }}" icon="{{ $link->icon }}"
                                        micrositeMicrosite="{{ $microsite->microsite }}" />
                                </li>
                            @elseif($link->type === 'category')
                                <li class="sortable-item flex items-center" data-id="{{ $link->id }}">
                                    <x-dashboard.category id="{{ $link->id }}" category="{{ $link->title }}" />
                                </li>
                            @endif
                        @endforeach
                    @else
                        <p
                            class="mb-2 w-full rounded-xl border-2 border-dashed border-slate-300 py-10 text-center text-base text-slate-500 md:w-[810px]">
                            Link is Empty! Go add some!
                        </p>
                    @endif

                    <div class="w-full flex-col gap-3 space-y-3 pt-3 md:flex md:w-[810px] md:flex-row md:space-y-0">
                        <x-buttons.big-button data-modal-target="add-link-modal" data-modal-toggle="add-link-modal">
                            <i class="ri-add-line font-bold"></i>Add Link
                        </x-buttons.big-button>
                        <x-buttons.big-button-secondary data-modal-target="add-category-modal"
                            data-modal-toggle="add-category-modal">
                            <i class="ri-add-line font-bold"></i>Add Category
                        </x-buttons.big-button-secondary>
                    </div>
                </ul>
            </div>
            <div class="mb-8 py-0 pl-0 md:mb-0 md:py-8 md:pl-8">
                <span class="text-lg font-bold md:text-xl">Guide</span>
                <img class="mt-4 rounded-2xl border-[6px]" src="/img/ui/guide.svg">
            </div>
        </div>
    </div>
    <x-dashboard.popup-add-link micrositeId="{{ $microsite->id }}" />
    <x-dashboard.popup-add-category micrositeId="{{ $microsite->id }}" />
    <x-dashboard.success-popup />
</x-app>

