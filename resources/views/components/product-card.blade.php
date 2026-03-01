<li {{ $attributes->merge(['class' => 'product-card']) }}>
    <a class="product-card__title" href="{{ route($type . '.show', $id) }}">{{ $title }}</a>
    <p>Срок: {{ $time }} дн.</p>
    <p>Стоимость: {{ $type == 'jobs' ? 'до ' . $price : 'от ' . $price }} руб.</p>
    <a href="{{ route($type . '.show', $id) }}" class="product-card__more">Подробнее</a>
</li>
