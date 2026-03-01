<section class="work-detail">
    <h1 class="work-detail__title">
        {{ $title }}
    </h1>
    <div class="work-detail__author">
        Заказчик: <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
    </div>
    <div class="work-detail__price">
        Цена: {{ $type == 'jobs' ? 'до ' : 'от ' }} <span>{{ $price }}</span> руб.
    </div>
    <div class="work-detail__time">
        Срок: до <span>{{ $time }}</span> дн.
    </div>
    <div class="work-detail__description">
        {{ $description }}
    </div>
    @if (!$isCurrentUserOwner)
        @if($currentUserAlreadyOffered)
            <div class="work-detail__note">Вы уже откликнулись на заявку</div>
        @else
            <a href="{{ route('offers.create', $id) }}" class="work-detail__btn">{{ __('Откликнуться') }}</a>
        @endif
    @else
        <div class="work-detail__note">Это ваша заявка</div>
    @endif
</section>