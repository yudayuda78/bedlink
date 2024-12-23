<x-app title="Dashboard" bg="bg-slate-50">
    <x-dashboard.header-alt />
    <div class="mx-auto flex flex-col px-5 md:max-w-screen-xl md:flex-row md:px-0">
        <div class="w-full py-8">
            <x-dashboard.error-popup />
            <span class="text-lg font-bold md:text-xl">Microsite</span>
            <div class="mt-4 grid w-full grid-cols-1 gap-3 md:grid-cols-3 md:gap-5">
                @foreach ($microsites as $microsite)
                    <div class="rounded-xl border border-slate-200 bg-white p-6">
                        <div class="flex items-center justify-between">
                            <img class="aspect-square h-10 rounded-full bg-slate-100 object-cover object-center md:h-10"
                                src="/img/logo/{{ $microsite->icon }}">
                            <div class="flex items-center gap-1.5">
                                <a href="/dashboard/edit-link/{{ $microsite->microsite }}">
                                    <x-buttons.small-button>
                                        <i class="ri-edit-box-line text-white"></i>
                                        Edit
                                    </x-buttons.small-button>
                                </a>
                                <form action="{{ route('microsite.delete', $microsite->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this microsite?');">
                                    @csrf
                                    @method('DELETE')
                                    <x-buttons.small-button-secondary type="submit">
                                        <i class="ri-delete-bin-2-line text-[#196ECD]"></i>
                                        Delete
                                    </x-buttons.small-button-secondary>
                                </form>
                            </div>
                        </div>
                        <div class="my-3">
                            <a href="/dashboard/edit-link/{{ $microsite->microsite }}"
                                class="font-syne font-bold">{{ $microsite->title }}
                            </a>
                            <p class="text-xs text-slate-500">{{ $microsite->description }}</p>
                        </div>
                        <a href="/{{ $microsite->microsite }}" target="_blank"
                            class="rounded-full border border-[#196ECD] p-1 px-3 text-xs hover:bg-slate-50">
                            <span class="text-slate-500">
                                <i
                                    class="ri-link me-1 font-bold text-[#196ECD]"></i>bedlink.id/</span>{{ $microsite->microsite }}
                        </a>
                    </div>
                @endforeach
                <button data-modal-target="add-microsite-modal" data-modal-toggle="add-microsite-modal"
                    class="flex h-[177px] items-center justify-center rounded-xl border border-slate-200 p-6 hover:bg-slate-100">
                    <span class="text-[#196ECD]"><i class="ri-add-line me-1"></i>Add More</span>
                </button>
            </div>
        </div>
    </div>
    <x-dashboard.popup-add-microsite />
    <x-dashboard.success-popup />
</x-app>

