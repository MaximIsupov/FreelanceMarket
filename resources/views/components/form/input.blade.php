<div {{ $attributes->except(['label', 'name', 'id', 'value', 'type', 'required', 'placeholder', 'autocomplete', 'autofocus', 'disabled', 'readonly']) }}>

    <input
        {{ $attributes
            ->merge([
                'type'         => $type ?? 'text',
                'name'         => $name,
                'id'           => $id ?? $name,
                'value'        => old($name, $value ?? ($attributes['value'] ?? '')),
                'placeholder'  => $placeholder ?? '',
                'autocomplete' => $autocomplete ?? 'off',
                'autofocus'    => $autofocus ?? false,
                'required'     => $required ?? false,
                'disabled'     => $disabled ?? false,
                'readonly'     => $readonly ?? false,
            ])
        }}
    />

    <x-form.error name="{{ $name }}" />

</div>