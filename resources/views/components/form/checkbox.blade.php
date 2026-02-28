<div class="checkbox">
    <input type="checkbox" {{ $attributes->merge([
        'value' => 1,
    ])->except(['id']) }} class="form-check-input" id="{{ $id ?? 'agreement' }}">
    <label class="form-check-label" for="{{ $id ?? 'agreement' }}">
        {{ $slot }}
    </label>
</div>