@props(['type' => 'button'])
<button type="{{ $type }}"
    {{ $attributes->class([
        'inline-flex w-full items-center justify-center gap-x-2
                                    rounded-full border border-[#196ECD] px-4 py-4 font-medium text-[#196ECD] hover:bg-blue-200
                                    focus:bg-blue-200 focus:outline-none disabled:pointer-events-none disabled:opacity-50',
    ]) }}>
    {{ $slot }}
</button>
