@extends('layouts.app')

@section('content')
<div class="auth-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 enter-col">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="enter-container">
                        <div class="enter-img-cont text-center">
                            <a class="logo d-inline-block" href="/">
                                <img src="{{ asset('img/logo.png') }}" width="88" height="88" alt="Жесты">
                            </a>
                        </div>
                        <div class="text-center">
                            <h2>Вход</h2>
                        </div>
                        <div class="enter-input-container">
                            <label>
                                <span>E-mail</span>
                                <input autocomplete="email" autofocus value="{{ old('email') }}" class="enter-redaction" type="email" name="email" required>
                                @error('email') <p class="feedback">Неверный email</p> @enderror
                            </label>
                        </div>
                        <div class="enter-input-container">
                            <label>
                                <span>Пароль</span>
                                <input class="enter-redaction" type="password" name="password" autocomplete="current-password" required>
                                @error('password') <p class="feedback">Неверный пароль</p> @enderror
                            </label>
                        </div>
                        <div class="forgot-pass">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label ml-2 mb-0" for="remember">Запомнить меня</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <input class="primary-but" type="submit" value="Войти">
                        </div>
                        <div class="text-center new-sub">
                            <a href="{{ route('register') }}">Регистрация</a>
                        </div>
                        <div class="text-center new-sub">
                            <a href="{{ route('password.request') }}">Восстановить пароль</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
