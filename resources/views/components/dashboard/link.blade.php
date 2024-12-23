@props(['link', 'url', 'id', 'icon', 'micrositeMicrosite'])

<div
    class="mb-4 flex w-full items-center justify-between rounded-xl border border-slate-200 py-4 pl-2.5 pr-2.5 hover:bg-slate-100 md:w-[810px] md:py-6 md:pl-3 md:pr-6">
    <div class="flex items-center">
        <!-- Drag handle -->
        <span class="drag-handle cursor-pointer">
            <i class="ri-draggable me-1.5 text-lg text-[#196ECD]"></i>
        </span>
        <img class="me-1.5 aspect-square h-9 rounded-full bg-slate-200 md:me-3 md:h-12"
            src="/img/icon/{{ $icon }}.png">
        <div class="flex flex-col">
            <span
                class="... w-36 overflow-hidden truncate text-sm font-bold md:w-full md:text-base">{{ $link }}</span>
            <a class="block w-32 truncate text-xs text-slate-500 md:w-full md:text-sm" href="{{ $url }}">
                <i class="ri-link font-bold text-[#196ECD]"></i>
                <span class="... overflow-hidden text-clip">{{ $url }}</span>
            </a>
        </div>
    </div>
    <div class="flex gap-1.5">
        <x-buttons.small-button data-modal-target="edit-link-modal-{{ $id }}"
            data-modal-toggle="edit-link-modal-{{ $id }}">
            <i class="ri-edit-box-line text-white"></i><span class="hidden md:block">Edit</span>
        </x-buttons.small-button>

        <form method="POST" action="{{ route('delete-link', $id) }}" style="display:inline;"
            onsubmit="return confirm('Are you sure you want to delete this link?');">
            @csrf
            @method('DELETE')
            <x-buttons.small-button-secondary type="submit">
                <i class="ri-delete-bin-2-line text-[#196ECD]"></i><span class="hidden md:block">Delete</span>
            </x-buttons.small-button-secondary>
        </form>
    </div>
</div>

<x-dashboard.popup-edit-link id="{{ $id }}" link="{{ $link }}" url="{{ $url }}"
    icon="{{ $icon }}" micrositeMicrosite="{{ $micrositeMicrosite }}" />

