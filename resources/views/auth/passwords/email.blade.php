@extends('layouts.app')

@section('content')
<div class="auth-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 enter-col">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="enter-container">
                        <div class="enter-img-cont text-center">
                            <a class="logo d-inline-block" href="/">
                                <img src="{{ asset('img/logo.png') }}" width="88" height="88" alt="Жесты">
                            </a>
                        </div>
                        <div class="text-center">
                            <h2>Восстановление пароля</h2>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                        @endif
                        <div class="enter-input-container">
                            <label>
                                <span>E-mail</span>
                                <input id="email" type="email" class="enter-redaction" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <p class="feedback">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                        <div class="text-center">
                            <input class="primary-but" type="submit" value="Отправить">
                        </div>
                        <div class="text-center new-sub">
                            <a href="{{ route('login') }}">Назад ко входу</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
