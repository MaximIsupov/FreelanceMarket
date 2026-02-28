<form {{ $attributes->merge(['method' => $method ?? 'POST']) }}>
    @csrf

    {{ $slot }}

    <button class="btn">
        {{ $btnText ?? "Отправить" }}
    </button>
</form>