@props(['category', 'id'])

<div
    class="mb-4 flex w-full items-center justify-between rounded-xl border border-slate-200 bg-slate-200 py-4 pl-2.5 pr-2.5 hover:bg-slate-100 md:w-[810px] md:py-6 md:pl-3 md:pr-6">
    <div>
        <!-- Drag handle -->
        <span class="drag-handle cursor-pointer">
            <i class="ri-draggable me-1 text-lg text-[#196ECD]"></i>
        </span>
        <span class="text-sm font-bold md:text-base">{{ $category }}</span>
    </div>
    <div class="flex gap-1.5">

        <x-buttons.small-button data-modal-target="edit-category-modal-{{ $id }}"
            data-modal-toggle="edit-category-modal-{{ $id }}">
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

<x-dashboard.popup-edit-category id="{{ $id }}" category="{{ $category }}" />

