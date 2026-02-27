<form {{ $attributes->merge(['method' => 'POST']) }}>
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($isRegister)
        <input type="text" name="name" placeholder="Имя">
    @endif
    @if ($isLogin || $isRegister)
        <input type="mail" name="email" placeholder="Электронная почта">
        <input type="password" name="password" placeholder="Пароль">
    @endif
    @if ($isRegister)
        <input type="password" name="password_confirmation" placeholder="Подтвердите пароль">
        <x-checkbox name="agreement" value="1">{{ __('Я согласен с условиями обработки персональных данных') }}</x-checkbox>
    @endif
    <button class="btn">{{ $btnText }}</button>
    {{ $slot }}
</form>