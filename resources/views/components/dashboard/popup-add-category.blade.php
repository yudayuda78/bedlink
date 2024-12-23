@props(['micrositeId'])

<div id="add-category-modal" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-full max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-slate-800 bg-opacity-60 md:inset-0">
    <div class="relative max-h-full w-full max-w-2xl p-4">
        <!-- Modal content -->
        <div class="relative rounded-3xl bg-white shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                <h3 class="text-xl font-bold text-gray-900">
                    Add Category
                </h3>
                <button type="button"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                    data-modal-hide="add-category-modal">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="POST" action="{{ route('links.store') }}">
                @csrf
                <div class="mb-5 p-4 md:p-5">
                    <div class="space-y-3">
                        <input type="hidden" name="microsite_id" value="{{ $micrositeId }}">
                        <input type="hidden" name="type" id="type" value="category">
                        <input type="hidden" name="icon" id="icon" value="default">
                        <input type="hidden" name="url" id="url" value="http://bedlink.id">
                        <x-forms.input type="text" name="title" id="title" label="Link Name"
                            placeholder="e.g. Instagram" />
                        {{-- <x-forms.upload name="icon" id="icon" label="Upload Icon" /> --}}
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center rounded-b border-t border-gray-200 p-4 md:p-5">
                    <x-buttons.small-button type="submit"><i class="ri-add-line font-bold text-white"></i> Add
                        Category</x-buttons.small-button>
                </div>
            </form>
        </div>
    </div>
</div>

