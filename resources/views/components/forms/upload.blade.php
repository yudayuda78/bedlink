@props(['id', 'name', 'label'])
<div>
    <label for="{{ $id }}" class="mb-2 block text-sm font-semibold md:font-normal">{{ $label }}</label>
    <input type="file" name="{{ $name }}" id="{{ $id }}"
        class="block w-full rounded-lg border border-slate-200 bg-white text-sm file:me-4 file:border-0 file:bg-slate-50 file:px-4 file:py-3 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50">
</div>

