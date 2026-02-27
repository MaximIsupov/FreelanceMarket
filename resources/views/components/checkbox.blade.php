<div class="checkbox">
    <input type="checkbox" {{ $attributes->merge([
        'value' => 1,
    ]) }} class="form-check-input" id="agreement">
    <label class="form-check-label" for="agreement">
        {{ $slot }}
    </label>
</div>