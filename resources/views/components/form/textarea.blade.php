@props([
    'name',
    'id' => null,
    'label' => null,
    'value' => null,
    'placeholder' => '',
    'rows' => 4,
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'autocomplete' => 'off',
])

<div {{ $attributes->merge(['class' => 'relative']) }}>

    @if($label)
        <label 
            for="{{ $id ?? $name }}" 
            class="block text-sm font-medium text-gray-700 mb-1"
        >
            {{ $label }}
            @if($required)<span class="text-red-500">*</span>@endif
        </label>
    @endif

    <textarea
        id="{{ $id ?? $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        autocomplete="{{ $autocomplete }}"
        {{ $required ? 'required' : '' }}
        {{ $disabled ? 'disabled' : '' }}
        {{ $readonly ? 'readonly' : '' }}
    >{{ old($name, $value ?? $slot ?? '') }}</textarea>

    <x-form.error name="{{ $name }}" class="mt-1.5" />

</div>