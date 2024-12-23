@props(['type' => 'text', 'id', 'name', 'label', 'placeholder' => '', 'value' => ''])

<div>
    <label for="{{ $id }}" class="mb-2 block text-sm font-semibold md:font-normal">{{ $label }}</label>
    <div class="relative">
        <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            class="block w-full rounded-lg border border-slate-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50">
    </div>
</div>

