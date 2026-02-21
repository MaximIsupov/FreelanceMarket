<li {{ $attributes->merge(['class' => 'product-card']) }}>
    <a class="product-card__title" href="{{ $link }}">{{ $title }}</a>
    <p>Срок: {{ $time }}</p>
    <p>Стоимость: {{ $price }}</p>
    <a href="{{ $link }}" class="product-card__more">Подробнее</a>
</li>
