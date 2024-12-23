@props(['type' => 'text', 'id', 'name', 'label', 'placeholder' => '', 'value' => ''])

<div>
    <label for="{{ $id }}" class="mb-2 block text-sm font-semibold md:font-normal">{{ $label }}</label>
    <textarea id="message" rows="3" type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}""
        class="block w-full rounded-lg border border-slate-200 p-2.5 px-4 py-3 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50">{{ $value }}</textarea>
</div>

