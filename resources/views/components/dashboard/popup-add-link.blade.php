@props(['micrositeId'])

<div id="add-link-modal" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-full max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-slate-800 bg-opacity-60 md:inset-0">
    <div class="relative max-h-full w-full max-w-2xl p-4">
        <!-- Modal content -->
        <div class="relative rounded-3xl bg-white shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                <h3 class="text-xl font-bold text-gray-900">
                    Add Link
                </h3>
                <button type="button"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                    data-modal-hide="add-link-modal">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form method="POST" action="{{ route('links.store') }}">
                @csrf
                <div class="mb-5 p-4 md:p-5">
                    <div class="space-y-3">
                        <input type="hidden" name="microsite_id" value="{{ $micrositeId }}">
                        <input type="hidden" name="type" id="type" value="link">
                        <x-forms.input type="text" name="title" id="title" label="Link Name"
                            placeholder="e.g. Instagram" />
                        <x-forms.input type="url" name="url" id="url" label="URL"
                            placeholder="e.g. https://instagram.com/bedlink" />
                        <div>
                            <label for="icon" class="mb-2 block text-sm font-semibold md:font-normal">Icon</label>
                            <div class="grid list-none grid-cols-6 gap-1 md:grid-cols-4 md:gap-2.5">
                                <x-forms.select-icon name="icon" id="default" label="Default" value="default"
                                    checked="checked" />
                                <x-forms.select-icon name="icon" id="whatsapp" label="Whatsapp" value="whatsapp" />
                                <x-forms.select-icon name="icon" id="instagram" label="Instagram"
                                    value="instagram" />
                                <x-forms.select-icon name="icon" id="telegram" label="Telegram" value="telegram" />

                                <x-forms.select-icon name="icon" id="tiktok" label="TikTok" value="tiktok" />
                                <x-forms.select-icon name="icon" id="facebook" label="Facebook" value="facebook" />
                                <x-forms.select-icon name="icon" id="youtube" label="YouTube" value="youtube" />
                                <x-forms.select-icon name="icon" id="twitter" label="Twitter" value="twitter" />

                                <x-forms.select-icon name="icon" id="discord" label="Discord" value="discord" />
                                <x-forms.select-icon name="icon" id="linkedin" label="Linkedin" value="linkedin" />
                                <x-forms.select-icon name="icon" id="behance" label="Behance" value="behance" />
                                <x-forms.select-icon name="icon" id="bed" label="BED" value="bed" />

                                <x-forms.select-icon name="icon" id="email" label="Email" value="email" />
                                <x-forms.select-icon name="icon" id="website" label="Website" value="website" />
                                <x-forms.select-icon name="icon" id="store" label="Store" value="store" />
                                <x-forms.select-icon name="icon" id="live" label="Live" value="live" />
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center rounded-b border-t border-gray-200 p-4 md:p-5">
                    <x-buttons.small-button type="submit"><i class="ri-add-line font-bold text-white"></i> Add
                        Link</x-buttons.small-button>
                </div>
            </form>
        </div>
    </div>
</div>

