<form {{ $attributes }}>
    @if ($isRegister)
        <div class="form-register__user-type">
            <label for="userTypeSelect"></label>
            <select name="userType" id="userTypeSelect">
                <option value="seller">Я являюсь покупателем услуг</option>
                <option value="freelancer">Я являюсь фрилансером</option>
            </select>
        </div>
        <input type="mail" name="mail" placeholder="Электронная почта">
    @endif
    @if ($isLogin || $isRegister)
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="pasword" placeholder="Пароль">
    @endif
    <button class="btn">{{ $btnText }}</button>
    {{ $slot }}
</form>