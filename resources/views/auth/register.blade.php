@extends('layouts.app')

@section('content')
<div class="auth-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 enter-col">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="enter-container">
                        <div class="enter-img-cont text-center">
                            <a class="logo d-inline-block" href="/">
                                <img src="{{ asset('img/logo.png') }}" width="88" height="88" alt="Жесты">
                            </a>
                        </div>
                        <div class="text-center">
                            <h2>Регистрация</h2>
                        </div>
                        <div class="enter-input-container">
                            <label for="name">
                                <span>Ваше имя</span>
                                <input id="name" type="text" class="enter-redaction" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </label>
                        </div>
                        <div class="enter-input-container">
                            <label>
                                <span>E-mail</span>
                                <input id="email" type="email" class="enter-redaction" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email') <p class="feedback">Неверный email</p> @enderror
                            </label>
                        </div>
                        <div class="enter-input-container">
                            <label>
                                <span>Пароль</span>
                                <input id="password" type="password" class="enter-redaction" name="password" required autocomplete="new-password">
                                @error('password') <p class="feedback">Неверный пароль</p> @enderror
                            </label>
                        </div>
                        <div class="enter-input-container">
                            <label>
                                <span>Повторите пароль</span>
                                <input id="password-confirm" type="password" class="enter-redaction" name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirmation') <p class="feedback">Пароли не совпадают</p> @enderror
                            </label>
                        </div>
                        <div class="text-center">
                            <input class="primary-but" type="submit" value="Зарегистрироваться">
                        </div>
                        <div class="text-center new-sub">
                            <a href="{{ route('login') }}">Уже есть аккаунт?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
