@props(['id', 'link', 'url', 'icon', 'micrositeMicrosite'])
<div id="edit-link-modal-{{ $id }}" tabindex="-1" aria-hidden="true"
    class="fixed left-0 right-0 top-0 z-50 hidden h-full max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-slate-800 bg-opacity-60 md:inset-0">
    <div class="relative max-h-full w-full max-w-2xl p-4">
        <!-- Modal content -->
        <div class="relative rounded-3xl bg-white shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                <h3 class="text-xl font-bold text-gray-900">
                    Edit Link
                </h3>
                <button type="button"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                    data-modal-hide="edit-link-modal-{{ $id }}">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="POST" action="{{ route('edit-link', ['microsite' => $micrositeMicrosite, $id]) }}">
                @csrf
                @method('PUT')
                <div class="mb-5 p-4 md:p-5">
                    <div class="space-y-3">
                        <x-forms.input type="text" name="title" id="title" label="Link Name"
                            value="{{ $link }}" />
                        <x-forms.input type="url" name="url" id="url" label="URL"
                            value="{{ $url }}" />
                        <div>
                            <label for="icon" class="mb-2 block text-sm font-semibold md:font-normal">Icon</label>
                            <div class="grid list-none grid-cols-6 gap-1 md:grid-cols-4 md:gap-2.5">
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Default"
                                    value="default" :isChecked="$icon == 'default'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Whatsapp"
                                    value="whatsapp" :isChecked="$icon == 'whatsapp'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Instagram"
                                    value="instagram" :isChecked="$icon == 'instagram'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Telegram"
                                    value="telegram" :isChecked="$icon == 'telegram'" />

                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="TikTok"
                                    value="tiktok" :isChecked="$icon == 'tiktok'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Facebook"
                                    value="facebook" :isChecked="$icon == 'facebook'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="YouTube"
                                    value="youtube" :isChecked="$icon == 'youtube'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Twitter"
                                    value="twitter" :isChecked="$icon == 'twitter'" />

                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Discord"
                                    value="discord" :isChecked="$icon == 'discord'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Linkedin"
                                    value="linkedin" :isChecked="$icon == 'linkedin'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Behance"
                                    value="behance" :isChecked="$icon == 'behance'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="BED"
                                    value="bed" :isChecked="$icon == 'bed'" />

                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Email"
                                    value="email" :isChecked="$icon == 'email'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Website"
                                    value="website" :isChecked="$icon == 'website'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Store"
                                    value="store" :isChecked="$icon == 'store'" />
                                <x-forms.select-icon name="icon" id="{{ uniqid('icon_') }}" label="Live"
                                    value="live" :isChecked="$icon == 'live'" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center rounded-b border-t border-gray-200 p-4 md:p-5">
                    <x-buttons.small-button type="submit"><i class="ri-edit-box-line text-white"></i> Edit
                        Link</x-buttons.small-button>
                </div>
            </form>
        </div>
    </div>
</div>

