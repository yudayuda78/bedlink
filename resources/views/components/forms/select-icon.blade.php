@props(['id', 'name', 'label', 'value' => '', 'checked' => '', 'isChecked' => false])

<li>
    <input type="radio" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" class="peer hidden"
        {{ $checked }} {{ $isChecked ? 'checked' : '' }} />
    <label for="{{ $id }}"
        class="inline-flex w-full cursor-pointer items-center justify-between rounded-lg border border-slate-200 bg-white p-1.5 text-slate-500 hover:bg-slate-100 hover:text-slate-600 peer-checked:border-blue-600 peer-checked:bg-blue-50 peer-checked:text-blue-600">
        <div class="inline-flex w-full items-center justify-center"><img class="h-8"
                src="/img/icon/{{ $value }}.png" alt="default"><span
                class="hidden pr-3 text-sm md:block">{{ $label }}</span></div>
    </label>
</li>

