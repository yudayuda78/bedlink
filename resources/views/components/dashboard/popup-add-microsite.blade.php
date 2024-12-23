<div id="add-microsite-modal" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-full max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-slate-800 bg-opacity-60 md:inset-0">
    <div class="relative max-h-full w-full max-w-2xl p-4">
        <!-- Modal content -->
        <div class="relative rounded-3xl bg-white shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                <h3 class="text-xl font-bold text-gray-900">
                    Add Microsite
                </h3>
                <button type="button"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                    data-modal-hide="add-microsite-modal">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <form method="POST" action="{{ route('cek-link') }}">
                @csrf
                <div class="mb-5 p-4 md:p-5">
                    <div class="space-y-3">
                        <div>
                            <label for="microsite" class="mb-2 block text-sm font-semibold md:font-normal">URL</label>
                            <div
                                class="flex w-full rounded-lg border border-slate-200 px-4 py-3 text-sm focus-within:border-black focus-within:ring-1 focus-within:ring-black disabled:pointer-events-none disabled:opacity-50">
                                <span class="text-[#196ECD]">bedlink.id/</span>
                                <input type="text" id="microsite" name="microsite" placeholder="yourpage"
                                    class="w-full focus:outline-none">
                            </div>
                        </div>
                        <x-forms.input type="text" name="title" id="title" label="Header"
                            placeholder="e.g. Bedlink" />
                        <x-forms.textarea type="text" name="description" id="description" label="Description"
                            placeholder="e.g. Link to bedlink.id" />
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center rounded-b border-t border-gray-200 p-4 md:p-5">
                    <x-buttons.small-button type="submit"><i class="ri-add-line font-bold text-white"></i>
                        Add Microsite</x-buttons.small-button>
                </div>
            </form>
        </div>
    </div>
</div>
