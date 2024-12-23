<x-app bg="bg-slate-50">
    <x-dashboard.header micrositeId="{{ $microsite->id }}" micrositeMicrosite="{{ $microsite->microsite }}" />
    <div class="bg-slate-50">
        <div class="mx-auto flex flex-col px-5 md:max-w-screen-xl md:flex-row md:px-0">
            <div class="w-full border-r-0 py-8 md:w-[855px] md:border-r md:border-slate-200">
                <span class="text-lg font-bold md:text-xl">Personalization</span>
                <div class="mt-4">
                    <div
                        class="mb-4 w-full items-center justify-between rounded-xl border border-slate-200 bg-white px-4 py-7 md:w-[810px] md:px-6 md:py-10">
                        <form method="POST" action="{{ route('dashboard.personalization', ['id' => $microsite->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="w-full space-y-4">
                                <label for="url" class="mb-2 block text-sm font-semibold md:font-normal">Edit
                                    URL</label>
                                <div
                                    class="flex w-full gap-0.5 rounded-lg border border-slate-200 bg-white px-4 py-3 text-sm text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50">
                                    bedlink.id/
                                    <input type="text" name="microsite" id="microsite"
                                        value="{{ $microsite->microsite }}"
                                        class="w-full text-sm text-gray-900 outline-none focus:ring-0">
                                </div>
                                <x-forms.input name="title" id="title" label="Edit Header"
                                    value="{{ $microsite->title }}" />
                                <x-forms.textarea name="description" id="description" label="Edit Description"
                                    value="{{ $microsite->description }}" />
                                <img src="{{ $microsite->icon ? url('/img/logo/' . $microsite->icon) : '/img/icon-example.png' }}"
                                    class="aspect-square h-14 w-14 rounded-lg border border-slate-200 bg-white object-cover object-center">
                                <x-forms.upload name="icon" id="icon" label="Edit Icon" />
                                <div class="pt-3">
                                    <x-buttons.big-button-alt type="submit">
                                        <i class="ri-save-3-line"></i> Save
                                    </x-buttons.big-button-alt>
                                </div>
                            </div>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
            <div class="mb-8 py-0 pl-0 md:mb-0 md:py-8 md:pl-8">
                <span class="text-lg font-bold md:text-xl">Guide</span>
                <img class="mt-4 rounded-2xl border-[6px]" src="/img/ui/guide.svg">
            </div>
        </div>
    </div>
    <x-dashboard.success-popup />
</x-app>

