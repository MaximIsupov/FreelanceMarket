<section class="work-list">
    <h2>
        {{ $title }}
    </h2>
    {{ $slot }} <!-- На случай доп. инофрмации -->
    <ul>
        @forelse ($posts as $post)
            @isset($post['id'])
                <x-product-card 
                    :id="$post['id']"
                    :title="$post['title']"
                    :time="$post['time']"
                    :price="$post['price']"
                    :type="$type"
                />
            @endisset
        @empty
            <li class="empty">Пока нет объявлений</li>
        @endforelse
    </ul>
    @if ($latestPosts)
        <a href="{{ route($type) }}" class="btn work-list__more">{{ __("Смотреть все") }}</a>
    @else
        <div class="mt-8 flex justify-center">
            {{ $posts->links() }}
        </div>
    @endif
</section>