<div class="offers-section">
    <h2>{{ __('Отклики на заявку') }} ({{ $offers->count() }})</h2>

    @if($offers->isEmpty())
        <p>{{ __('Пока откликов нет') }}</p>
    @else
        <div class="offers-list">
            @foreach($offers as $offer)
                <div class="offer-item">
                    <a href="{{ route('users.show', $offer->user->id) }}">
                        {{ __('Исполнитель: ') }}<strong>{{ $offer->user->name ?? __('Аноним') }}</strong>
                    </a>

                    <p>{{ __('Наименование услуги: ') }}<strong>{{ $offer->title }}</strong></p>
                    <p>{{ __('Стоимость: ') }}<strong>{{ $offer->price }} {{ __('руб.') }}</strong></p>
                    <p>{{ __('Срок выполнения: ') }}<strong>{{ $offer->time }} {{ __('дн.') }}</strong></p>
                    <p class="text-muted">{{ $offer->created_at->diffForHumans() }}</p>
                    <p>{{ Str::limit($offer->message, 150) }}</p>

                    @if($isCurrentUserOwner)
                        <div class="actions">
                            <!-- Принять -->
                            <form action="" method="POST" class="form form-offer">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-sm">Принять</button>
                            </form>

                            <!-- Отказать -->
                            <form action="" method="POST" class="form form-offer">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger btn-sm">Отказать</button>
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>