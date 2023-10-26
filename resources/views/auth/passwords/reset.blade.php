@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5 enter-col">
            <form  method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="enter-container">
                    <div class="enter-img-cont text-center">
                        <div class="logo text-center">
                            <img src="/img/logo.png" width="100px" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h2>Новый пароль</h2>
                    </div>
                    <div class="enter-input-container">
                        <label for="">
                            <span>E-mail</span>
                            <input id="email" type="email" class="enter-redaction" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                    </div>
                    <div class="enter-input-container">
                        <label for="">
                            <span>Пароль</span>
                            <input id="password" type="password" class="enter-redaction" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                    </div>
                    <div class="enter-input-container">
                        <label for="">
                            <span>Повторите пароль</span>
                            <input id="password-confirm" type="password" class="enter-redaction" name="password_confirmation" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </label>
                    </div>


                    <div class="text-center">
                        <input class="primary-but" type="submit" value="Отправить">
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
            background-image: url('/../img/bg-wel-min.jpg');
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
