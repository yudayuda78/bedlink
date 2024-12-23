@props(['type' => 'button'])
<button type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex items-center gap-x-1.5 rounded-lg md:rounded-full border border-[#196ECD] px-2.5 md:px-3 py-2 text-sm text-black hover:bg-slate-50 focus:bg-slate-50 focus:outline-none disabled:pointer-events-none disabled:opacity-50',
    ]) }}>
    {{ $slot }}
</button>

