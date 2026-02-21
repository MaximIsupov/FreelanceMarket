<section class="work-list">
    <h2>
        {{ $title }}
    </h2>
    {{ $slot }} <!-- На случай доп. инофрмации -->
    <ul>
        @forelse ($posts as $post)
            <x-product-card :link="$post['link']" :title="$post['title']" :time="$post['time']" :price="$post['price']">     
            </x-product-card>
        @empty
            <li class="empty">Пока нет объявлений</li>
        @endforelse
    </ul>
    <a href="{{ $fullPageUrl }}" class="btn work-list__more">{{ $fullPageText }}</a>
</section>