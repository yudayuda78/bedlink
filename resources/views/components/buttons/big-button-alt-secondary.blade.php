@props(['type' => 'button'])
<button type="{{ $type }}"
    {{ $attributes->class([
        'text-vlack inline-flex w-full items-center justify-center gap-x-2 rounded-full border border-slate-200 px-4 py-3 text-sm font-medium hover:bg-blue-50 focus:bg-blue-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50',
    ]) }}>
    {{ $slot }}
</button>
