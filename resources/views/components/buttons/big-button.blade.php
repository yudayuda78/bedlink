@props(['type' => 'button'])
<button type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex w-full items-center justify-center gap-x-2
                                    rounded-full border border-transparent bg-[#196ECD] px-4 py-4 font-medium text-white hover:bg-blue-700
                                    focus:bg-blue-700 focus:outline-none disabled:pointer-events-none disabled:opacity-50',
    ]) }}>
    {{ $slot }}
</button>

