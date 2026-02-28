<li {{ $attributes->merge(['class' => 'product-card']) }}>
    <a class="product-card__title" href="{{ route($type . '.show', $id) }}">{{ $title }}</a>
    <p>Срок: {{ $time }}</p>
    <p>Стоимость: {{ $price }}</p>
    <a href="{{ route($type . '.show', $id) }}" class="product-card__more">Подробнее</a>
</li>
