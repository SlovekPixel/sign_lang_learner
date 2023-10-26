@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 enter-col">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="enter-container">
                    <div class="enter-img-cont text-center">
                        <div class="logo text-center">
                            <img src="/img/logo.png" width="100px" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h2>Вход</h2>
                    </div>
                    <div class="enter-input-container">
                        <label for="">
                            <span>E-mail</span>
                            <input  autocomplete="email" autofocus value="{{ old('email') }}" class="enter-redaction" type="email" name="email">
                            @error('email') Введен неправильный email @enderror
                        </label>
                    </div>
                    <div class="enter-input-container">
                        <label for="">
                            <span>Пароль</span>
                            <input class="enter-redaction" type="password"  name="password"  autocomplete="current-password">
                            @error('password') Введен неправильный пароль @enderror
                        </label>
                    </div>
                    <div class="forgot-pass">
                        <div class="d-flex">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>

                        </div>
                    </div>
                    <div class="text-center">
                        <input class="primary-but" type="submit" value="Вход">
                    </div>
                    <div class="text-center new-sub d-none">
                        <a  href="/register">Регистрация</a>
                    </div>
                    <div class="text-center new-sub">
                        <a  href="/password/reset">Восстановить пароль</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<style>
    body {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom center;
        height: 100vh;
    }
    .new-sub{
        margin:  15px 0;
    }
</style>
@endsection
