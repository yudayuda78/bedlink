@props(['type' => 'button'])
<button type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex items-center gap-x-1.5 rounded-lg md:rounded-full border border-transparent bg-[#196ECD] px-2.5 md:px-3 py-2 text-sm text-white hover:bg-blue-700 focus:bg-blue-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50',
    ]) }}>
    {{ $slot }}
</button>

