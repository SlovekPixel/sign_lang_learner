@extends('layouts.app')

@section('content')
<div class="landing-page">
    <div class="landing-glow" aria-hidden="true"></div>

    <header class="landing-top">
        <div class="container landing-top__inner">
            <a class="landing-brand" href="/">
                <img src="{{ asset('img/logo.png') }}" width="44" height="44" alt="">
                <span>Жесты</span>
            </a>
            <nav class="landing-nav">
                <a href="{{ route('login') }}">Войти</a>
                <a class="landing-nav__cta" href="{{ route('register') }}">Регистрация</a>
            </nav>
        </div>
    </header>

    <main class="landing-hero">
        <div class="container">
            <div class="landing-hero__grid">
                <div class="landing-hero__content">
                    <p class="landing-brand-line">Жесты</p>
                    <h1>Изучайте жестовый язык</h1>
                    <p class="landing-lead">Короткие ролики и тренировка на узнавание — спокойный путь к новым словам.</p>
                    <div class="landing-actions">
                        <a class="btn-solid" href="{{ route('login') }}">Начать</a>
                        <a class="btn-ghost" href="{{ route('register') }}">Создать аккаунт</a>
                    </div>
                </div>
                <div class="landing-hero__visual">
                    <img src="{{ asset('img/back--logo.png') }}" width="520" height="520" alt="" loading="eager" decoding="async">
                </div>
            </div>
        </div>
    </main>

    <footer class="landing-footer">
        <div class="container landing-footer__inner">
            <p>Обучение жестовому языку</p>
            <p class="landing-footer__note">Сайт использует cookie для работы сессии.</p>
        </div>
    </footer>
</div>
@endsection
